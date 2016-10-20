#!\usr\bin\perl

# PHP File Uploader with progress bar Version 2.1
# Copyright (C) Raditha Dissanyake 2003
# http://www.raditha.com
# Changed for use with AJAX by Tomas Larsson
# http://tomas.epineer.se/

# Modified (2009) By Arda Beyazoglu for cooperation with PHPLiveX ajax library
# http://www.phplivex.com

# Licence:
# The contents of this file are subject to the Mozilla Public
# License Version 1.1 (the "License"); you may not use this file
# except in compliance with the License. You may obtain a copy of
# the License at http://www.mozilla.org/MPL/
# 
# Software distributed under this License is distributed on an "AS
# IS" basis, WITHOUT WARRANTY OF ANY KIND, either express or
# implied. See the License for the specific language governing
# rights and limitations under the License.
# 
# The Initial Developer of the Original Code is Raditha Dissanayake.
# Portions created by Raditha are Copyright (C) 2003
# Raditha Dissanayake. All Rights Reserved.


use CGI;
use Fcntl qw(:DEFAULT :flock);
use File::Temp qw/ tempfile tempdir /;

# Settings came from user

@qstring = split(/&/, $ENV{'QUERY_STRING'});

@uid_exp = split(/=/, $qstring[0]);
$uid = $uid_exp[1];
$uid =~ s/[^a-zA-Z0-9]//g;

@max_size_exp = split(/=/, $qstring[1]);
$max_size = $max_size_exp[1];

@insensitivity_exp = split(/=/, $qstring[2]);
$insensitivity = $insensitivity_exp[1];

# You may need this while working in an alias directory for cgi scripts
# Otherwise, you may not ne able to access temp directory by php
# $docroot = $ENV{DOCUMENT_ROOT};
# $tmp_dir = "$docroot/tmp";

# This might be easier while working on local
$tmp_dir = "tmp";

$post_data_file = "$tmp_dir/$uid"."_postdata";
$monitor_file = "$tmp_dir/$uid"."_flength";
$error_file = "$tmp_dir/$uid"."_err";
$signal_file = "$tmp_dir/$uid"."_signal";
$qstring_file = "$tmp_dir/$uid"."_qstring";

$content_type = $ENV{'CONTENT_TYPE'};
$len = $ENV{'CONTENT_LENGTH'};
$bRead=0;
$|=1;

sub bye_bye {
	$mes = shift;
	
	$err_ok = open (ERRFILE, ">", $error_file);
	if($err_ok) {
		print ERRFILE $mes;
		close (ERRFILE);
	}
	exit;
}

# File size control
if($len > $max_size){
	close (STDIN);
	bye_bye("SIZE_ERROR");
}

# The thing to watch out for is file locking. Only
# one thread may open a file for writing at any given time.

if (-e "$post_data_file"){ unlink("$post_data_file") };
if (-e "$monitor_file"){ unlink("$monitor_file") };
if (-e "$error_file"){ unlink("$error_file") };

sysopen(FH, $monitor_file, O_RDWR | O_CREAT) or &bye_bye ("TEMP_FILE_ERROR");

# autoflush FH
$ofh = select(FH);
$| = 1; select ($ofh);
flock(FH, LOCK_EX) or &bye_bye ("TEMP_FILE_ERROR");
seek(FH, 0, 0) or &bye_bye ("TEMP_FILE_ERROR");
print FH $len;
close(FH);	

open(TMP,">","$post_data_file") or &bye_bye ("TEMP_FILE_ERROR");
binmode TMP, ':raw'; 

# read and store the raw post data on a temporary file so that we can
# pass it though to a CGI instance later on.

my $i=0;
$ofh = select(TMP);
$| = 1; select ($ofh);
			
while (read (STDIN ,$LINE, 4096) && $bRead < $len ){
	$bRead += length $LINE;
	select(undef, undef, undef, $insensitivity); # Sleep for a little time

	$i++;
	print TMP $LINE;
}

close (TMP);

# We don't want to decode the post data ourselves. That's like
# reinventing the wheel. If we handle the post data with the perl
# CGI module that means the PHP script does not get access to the
# files, but there is a way around this.
#
# We can ask the CGI module to save the files, then we can pass
# these filenames to the PHP script. In other words instead of
# giving the raw post data (which contains the 'bodies' of the
# files), we just send a list of file names.

open(STDIN,"$post_data_file") or &bye_bye("TEMP_FILE_ERROR");

my $cg = new CGI();
my $qstring="";
my %vars = $cg->Vars;
my $j=0;

while(($key,$value) = each %vars){
	$file_upload = $cg->param($key);

	if(defined $value && $value ne ''){
		my $fh = $cg->upload($key);
		
		if(defined $fh){
			($tmp_fh, $tmp_filename) = tempfile();
			while(<$fh>){
				print $tmp_fh $_;
			}
			close($tmp_fh);

			$fsize =(-s $fh);
			$fh =~ s/([^a-zA-Z0-9_\-.])/uc sprintf("%%%02x",ord($1))/eg;
			
			$tmp_filename =~ s/([^a-zA-Z0-9_\-.])/uc sprintf("%%%02x",ord($1))/eg;
			$qstring .= "file[name][$j]=$fh&file[size][$j]=$fsize&";
			$qstring .= "file[tmp_name][$j]=$tmp_filename&";
			$j++;
		}else{
			$value =~ s/([^a-zA-Z0-9_\-.])/uc sprintf("%%%02x",ord($1))/eg;
			$qstring .= "$key=$value&" ;
		}
	}
}

open (SIGNAL,">", $signal_file) or &bye_bye ("TEMP_FILE_ERROR");
print SIGNAL "\n";
close (SIGNAL);

open (QSTR,">", "$qstring_file") or &bye_bye ("TEMP_FILE_ERROR");
print QSTR $qstring;
close (QSTR);

print "Content-type: text/html\r\n";
print "<html></html>";