<?
//error_reporting(E_ERROR);
function getsetup_input_slidertest()
{
$options['_CREDITS']				= 'Main Developters: Robert Pahle, Prem Randeria.';
	$options['_MODULEDESCRIPTION']		= 'The slider module allows to design the slider bar.<br>
                                                  The options it allows are - <br>1. Customize the bar<br>
							2. The thumb pointer<br>3. The layout and the position<br>
                                           Main note the reference line is always horizontal,<p> the x and y positions of the min and the max values are in reference to that.</p>
                                           It is like the number line with X-axes and Y-axes. And the starting point as Origin.
                                           Also the starting point is the x-y co-ordinate of module placement. So example<br>
                                             ----------------------------------------------------------------<br>
                                             Start(0,0) the x-y placement of the slider module<br>
                                             ----------------------------------------------------------------<br>


&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp^Yaxis<br>



&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp| <br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp|(+y) <br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp| <br>
Xaxis<-------( -x )-----|ORIGIN(0,0) -----(+x)-----------><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp| <br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp|(-y) <br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp| <br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspV <br>
                                             If I set x to some negative integer, it goes before the start (0,0), if x is set to anything positive it goes after the start in the same horizontal line.
                                             Just like the number - line.
                                             If I set y to some negative integer, it goes below the start, if y is set to anything positive it goes above the start in the same vertical line. 
                                             
                                            
							';

/*	$options[0]['name']			= 'css';
	$options[0]['description']	= 'Please select the CSS';
	$options[0]['detail']		= 'This is the css number that influences the layout';
	$options[0]['type']			= 'Integer';
	$options[0]['link']			= 'link to further information..?';
	$options[0]['lookup']		= ''; #this would be if i have a dropdown and want to lookup the value you would enter a sql script with the column that comes back beeing the selection
	$options[0]['default']		= '001';
	$options[0]['optional']		= 'no';
	$options[0]['perdashboard']	= 'yes';
	$options[0]['dependenton']	= '';
*/	
	$options[10]['name'] = 'x';
	$options[10]['description'] = 'Please select the x coordinate';
	$options[10]['detail'] = 'This sets the x coordinate to place the element on the dashboard.';
	$options[10]['type'] = 'Integer';
	$options[10]['link'] = 'link to further information..?';
	$options[10]['lookup'] = ''; 
	$options[10]['default']	= '10';
	$options[10]['optional'] = 'no';
	$options[10]['repeatable'] = 'no';
	$options[10]['perdashboard'] = 'yes';
	$options[10]['dependenton'] = '';

	$options[20]['name'] = 'y';
	$options[20]['description'] = 'Please select the y coordinate';
	$options[20]['detail'] = 'This sets the y coordinate to place the element on the dashboard.';
	$options[20]['type'] = 'Integer';
	$options[20]['link'] = 'link to further information..?';
	$options[20]['lookup'] = ''; 
	$options[20]['default']	= '10';
	$options[20]['optional'] = 'no';
	$options[20]['repeatable'] = 'no';
	$options[20]['perdashboard'] = 'yes';
	$options[20]['dependenton'] = '';
	
	/*$options[30]['name'] = 'sliderName';
	$options[30]['description'] = 'Please enter the name of the slider';
	$options[30]['detail'] = 'This sets the slider name.';
	$options[30]['type'] = 'Text';
	$options[30]['link'] = 'link to further information..?';
	$options[30]['lookup'] = ''; 
	$options[30]['default'] = 'slider';
	$options[30]['optional'] = 'yes';
	$options[30]['repeatable'] = 'no';
	$options[30]['perdashboard'] = 'no';
	$options[30]['dependenton'] = '';
	*/


	$options[70]['name']= 'sections';
        $options[70]['description']= 'Set the increment step value for the slider bar';
        $options[70]['detail']= 'This lets to jump in increments of the specified value rather than each number';
        $options[70]['type']= 'Integer';
        $options[70]['link']= 'link to further information..?';
        $options[70]['lookup']= '';
        $options[70]['default']= '0';
        $options[70]['optional']= 'yes';
        $options[70]['repeatable']= 'no';
        $options[70]['perdashboard']= 'yes';
        $options[70]['dependenton']= '';


	$options[34]['name'] = 'setMinAllowed';
        $options[34]['description'] = 'Please select the minimum allowed value for the slider bar';
        $options[34]['detail'] = 'Value should greater than or equal to minimum value of the slider bar';
        $options[34]['type'] = 'Integer';
        $options[34]['link'] = 'link to further information..?';
        $options[34]['lookup'] = '';
        $options[34]['default'] = '100';
        $options[34]['optional'] = 'yes';
        $options[34]['repeatable'] = 'no';
        $options[34]['perdashboard'] = 'yes';
        $options[34]['dependenton'] = '';

	$options[40]['name'] = 'width';
	$options[40]['description'] = 'Length of the slider';
	$options[40]['detail']	= 'This sets the length of the Slider bar on the dashboard.';
	$options[40]['type']  = 'Integer';
	$options[40]['link']= 'link to further information..?';
	$options[40]['lookup']= ''; 
	$options[40]['default']= '500';
	$options[40]['optional'] = 'no';
	$options[40]['repeatable'] = 'no';
	$options[40]['perdashboard'] = 'yes';
	$options[40]['dependenton'] = '';
	
	$options[50]['name']= 'min';
	$options[50]['description']= 'Minimum value of range';
	$options[50]['detail']	= 'This will set the minimum range of slider';
	$options[50]['type']= 'Integer';
	$options[50]['link']= 'link to further information..?';
	$options[50]['lookup']= ''; 
	$options[50]['default']= '0';
	$options[50]['optional']= 'no';
	$options[50]['repeatable']= 'no';
	$options[50]['perdashboard']= 'no';
	$options[50]['dependenton']= '';
	
	$options[60]['name']= 'max';
	$options[60]['description']= 'Maximum value of range';
	$options[60]['detail']= 'This will set the maximum range of slider';
	$options[60]['type']= 'Integer';
	$options[60]['link']= 'link to further information..?';
	$options[60]['lookup']= ''; 
	$options[60]['default']= '500';
	$options[60]['optional']= 'no';
	$options[60]['repeatable']= 'no';
	$options[60]['perdashboard']= 'no';
	$options[60]['dependenton']= '';
	/*
	$options[70]['name']= 'sections';
	$options[70]['description']= 'Set the number of sections on slider bar,keep 0 for no sections';
	$options[70]['detail']= 'Number of divisions of the whole range bar, if 500 is divided in 5, sections will be 0, 100,200,300, 400,500';
	$options[70]['type']= 'Integer';
	$options[70]['link']= 'link to further information..?';
	$options[70]['lookup']= '';
	$options[70]['default']= '0';
	$options[70]['optional']= 'yes';
	$options[70]['repeatable']= 'no';
	$options[70]['perdashboard']= 'yes';
	$options[70]['dependenton']= '';
	*/
  	$options[1]['name'] = 'sliderColor';
        $options[1]['description'] = 'Color of the slider bar';
        $options[1]['detail'] = 'Slider bar color';
        $options[1]['type'] = 'Color';
        $options[1]['link'] = 'link to further information..?';
        $options[1]['lookup'] = ''; 
        $options[1]['default'] = '#000000';
        $options[1]['optional'] = 'yes';
        $options[1]['repeatable'] = 'no';
        $options[1]['perdashboard'] = 'yes';
        $options[1]['dependenton'] = '';

	$options[2]['name'] = 'sizeOfSlider';
        $options[2]['description']= 'Width of the Slider bar';
        $options[2]['detail'] = 'This sets the thickness of the slider bar.';
        $options[2]['type']= 'Integer';
        $options[2]['link']= 'link to further information..?';
        $options[2]['lookup'] = '';
        $options[2]['default']= '15';
        $options[2]['optional'] = 'yes';
        $options[2]['repeatable'] = 'no';
        $options[2]['perdashboard'] = 'yes';
        $options[2]['dependenton'] = '';



	$options[3]['name'] = 'radiusOfThumb';
        $options[3]['description'] = 'Radius of thumb/pointer on the Slider bar';
        $options[3]['detail'] = 'This sets the slider pointer thumb to be more rounded';
        $options[3]['type'] = 'Integer';
        $options[3]['link'] = 'link to further information..?';
        $options[3]['lookup'] = ''; 
        $options[3]['default'] = '0';
        $options[3]['optional'] = 'yes';
        $options[3]['repeatable'] = 'no';
        $options[3]['perdashboard'] = 'yes';
        $options[3]['dependenton'] = '';


        $options[4]['name'] = 'colorOfThumb';
        $options[4]['description'] = 'Color of the thumb';
        $options[4]['detail'] = 'This sets the slider pointer thumb to be more colored default is  white';
        $options[4]['type'] = 'Color';
        $options[4]['link'] = 'link to further information..?';
        $options[4]['lookup'] = '';
        $options[4]['default'] = '#000000';
        $options[4]['optional'] = 'yes';
        $options[4]['repeatable'] = 'no';
        $options[4]['perdashboard'] = 'yes';
        $options[4]['dependenton'] = '';

        $options[5]['name'] = 'widthOfThumb';
        $options[5]['description'] = 'Width of the thumb';
        $options[5]['detail'] = 'This specifies the width of the thumb default is 10 px';
        $options[5]['type'] = 'Integer';
        $options[5]['link'] = 'link to further information..?';
        $options[5]['lookup'] = ''; 
        $options[5]['default'] = '15';
        $options[5]['optional'] = 'yes';
        $options[5]['repeatable'] = 'no';
        $options[5]['perdashboard'] = 'yes';
        $options[5]['dependenton'] = '';

	$options[19]['name'] = 'heightOfThumb';
        $options[19]['description'] = 'Height of the thumb';
        $options[19]['detail'] = 'This sets the border of the background of the range value which hovers on the slider bar';
        $options[19]['type'] = 'Integer';
        $options[19]['link'] = 'link to further information..?';
        $options[19]['lookup'] = ''; 
        $options[19]['default'] = '15';
        $options[19]['optional'] = 'yes';
        $options[19]['repeatable'] = 'no';
        $options[19]['perdashboard'] = 'yes';
        $options[19]['dependenton'] = '';


        $options[6]['name'] = 'colorOfRangeValue';
        $options[6]['description'] = 'Color of the Range Value in the Box';
        $options[6]['detail'] = 'This sets the color of the range value displayed when slider bar is changed';
        $options[6]['type'] = 'Color';
        $options[6]['link'] = 'link to further information..?';
        $options[6]['lookup'] = '';
        $options[6]['default'] = '#000000';
        $options[6]['optional'] = 'yes';
        $options[6]['repeatable'] = 'no';
        $options[6]['perdashboard'] = 'yes';
        $options[6]['dependenton'] = '';

        $options[7]['name'] = 'fontSizeOfRangeValue';
        $options[7]['description'] = 'Font size of Value in the Box while Slider Bar is in transition';
        $options[7]['detail'] = 'This sets the font of the range value, it is displayed when the slider bar is changed';
        $options[7]['type'] = 'Integer';
        $options[7]['link'] = 'link to further information..?';
        $options[7]['lookup'] = ''; 
        $options[7]['default'] = '10';
        $options[7]['optional'] = 'yes';
        $options[7]['repeatable'] = 'no';
        $options[7]['perdashboard'] = 'yes';
        $options[7]['dependenton'] = '';


        $options[8]['name'] = 'colorOfBackgroundRange';
        $options[8]['description'] = 'Color of the Box while Slider bar is in transition';
        $options[8]['detail'] = 'This sets the color of the hovering box over the slider';
        $options[8]['type'] = 'Color';
        $options[8]['link'] = 'link to further information..?';
        $options[8]['lookup'] = '';
        $options[8]['default'] = '#ffffff';
        $options[8]['optional'] = 'yes';
        $options[8]['repeatable'] = 'no';
        $options[8]['perdashboard'] = 'yes';
        $options[8]['dependenton']  = '';


        $options[9]['name'] = 'borderOfBackgroundRange';
        $options[9]['description'] = 'Please select the color of border of the Box';
        $options[9]['detail'] = 'This sets the border of the box which hovers on the slider bar';
        $options[9]['type'] = 'Color';
        $options[9]['link'] = 'link to further information..?';
        $options[9]['lookup'] = ''; 
        $options[9]['default'] = '#000000';
        $options[9]['optional'] = 'yes';
        $options[9]['repeatable'] = 'no';
        $options[9]['perdashboard'] = 'yes';
        $options[9]['dependenton'] = '';

        $options[11]['name'] = 'sizeOfBackgroundRange';
        $options[11]['description'] = 'Size of box hovering while Slider bar is changed';
        $options[11]['detail'] = 'This sets the size of the box in which range Value appears';
        $options[11]['type'] = 'Integer';
        $options[11]['link'] = 'link to further information..?';
        $options[11]['lookup'] = '';
        $options[11]['default'] = '15';
        $options[11]['optional'] = 'yes';
        $options[11]['repeatable'] = 'no';
        $options[11]['perdashboard'] = 'yes';
        $options[11]['dependenton']  = '';

    	$options[12]['name'] = 'pixelSizeborderRange';
        $options[12]['description'] = 'Please select the pixel Size of border of the Box';
        $options[12]['detail'] = 'This sets the border of the Box value which hovers on the slider bar';
        $options[12]['type'] = 'Integer';
        $options[12]['link'] = 'link to further information..?';
        $options[12]['lookup'] = '';
        $options[12]['default'] = '2';
        $options[12]['optional'] = 'yes';
        $options[12]['repeatable'] = 'no';
        $options[12]['perdashboard']= 'yes';
        $options[12]['dependenton'] = '';

/*
  	$options[13]['name']= 'minValFontSize';
        $options[13]['description'] = 'Font Size for Minimum Value displayed on the bar';
        $options[13]['detail'] = 'This sets the minimum value font size';
        $options[13]['type'] = 'Integer';
        $options[13]['link'] = 'link to further information..?';
        $options[13]['lookup'] = '';
        $options[13]['default'] = '12';
        $options[13]['optional'] = 'yes';
        $options[13]['repeatable'] = 'no';
        $options[13]['perdashboard'] = 'yes';
        $options[13]['dependenton'] = '';

  	$options[14]['name'] = 'minValFontColor';
        $options[14]['description'] = 'Font Color for Minimum Value displayed on the bar';
        $options[14]['detail']= 'This sets the minimum value font color';
        $options[14]['type'] = 'Color';
        $options[14]['link'] = 'link to further information..?';
        $options[14]['lookup'] = '';
        $options[14]['default'] = 'black';
        $options[14]['optional'] = 'yes';
        $options[14]['repeatable'] = 'no';
        $options[14]['perdashboard'] = 'yes';
        $options[14]['dependenton'] = '';



  	$options[15]['name'] = 'minValFontWeight';
        $options[15]['description'] = 'Font Weight for Minimum Value displayed on the bar';
        $options[15]['detail'] = 'This sets the font weight for the minimum value';
        $options[15]['type'] = 'Dropdown';
        $options[15]['link'] = 'link to further information..?';
        $options[15]['lookup'] = 'light|lighter|bold|bolder|normal';
        $options[15]['default'] = 'bold';
        $options[15]['optional'] = 'yes';
        $options[15]['repeatable'] = 'no';
        $options[15]['perdashboard'] = 'yes';
        $options[15]['dependenton'] = '';

  	$options[23]['name'] = 'minValFontStyle';
        $options[23]['description'] = 'Font Style for Minimum Value displayed on the bar';
        $options[23]['detail'] = 'This sets the font style for the minimum value';
        $options[23]['type'] = 'Dropdown';
        $options[23]['link'] = 'link to further information..?';
        $options[23]['lookup'] = '|italic|normal';
        $options[23]['default'] = '';
        $options[23]['optional'] = 'yes';
        $options[23]['repeatable'] = 'no';
        $options[23]['perdashboard'] = 'yes';
        $options[23]['dependenton'] = '';


        $options[24]['name'] = 'minValFontFamily';
        $options[24]['description'] = 'Font Family for Minimum Value displayed on the bar';
        $options[24]['detail'] = 'This sets the font family for the minimum value';
        $options[24]['type'] = 'Dropdown';
        $options[24]['link'] = 'link to further information..?';
        $options[24]['lookup'] = '|Arial|Times New Roman|Helvetica';
        $options[24]['default'] = 'Arial';
        $options[24]['optional'] = 'yes';
        $options[24]['repeatable'] = 'no';
        $options[24]['perdashboard'] = 'yes';
        $options[24]['dependenton'] = '';

  	$options[16]['name'] = 'maxValFontSize';
        $options[16]['description'] = 'Font Size for Maximum Value displayed on the bar';
        $options[16]['detail'] = 'This sets the font size for the maximum value';
        $options[16]['type'] = 'Integer';
        $options[16]['link'] = 'link to further information..?';
        $options[16]['lookup'] = ''; 
        $options[16]['default'] = '12';
        $options[16]['optional'] = 'yes';
        $options[16]['repeatable'] = 'no';
        $options[16]['perdashboard'] = 'yes';
        $options[16]['dependenton'] = '';


  	$options[17]['name'] = 'maxValFontColor';
        $options[17]['description'] = 'Font Color of the Maximum Value displayed on the bar';
        $options[17]['detail'] = 'This sets the color for the maximum value';
        $options[17]['type'] = 'Color';
        $options[17]['link'] = 'link to further information..?';
        $options[17]['lookup'] = ''; 
        $options[17]['default'] = 'black';
        $options[17]['optional'] = 'yes';
        $options[17]['repeatable'] = 'no';
        $options[17]['perdashboard'] = 'yes';
        $options[17]['dependenton'] = '';


  	$options[18]['name'] = 'maxValFontWeight';
        $options[18]['description'] = 'Font Weight of the Maximum Value diplayed on the bar';
        $options[18]['detail'] = 'This sets the font weight for the maximum value';
        $options[18]['type'] = 'Dropdown';
        $options[18]['link'] = 'link to further information..?';
        $options[18]['lookup'] = '|light|lighter|bold|bolder|normal';
        $options[18]['default'] = 'bold';
        $options[18]['optional'] = 'yes';
        $options[18]['repeatable'] = 'no';
        $options[18]['perdashboard'] = 'yes';
        $options[18]['dependenton'] = '';


  	$options[21]['name'] = 'maxValFontStyle';
        $options[21]['description'] = 'Font Style of the Maximum Value displayed on the bar';
        $options[21]['detail'] = 'This sets the maximum value font style';
        $options[21]['type'] = 'Dropdown';
        $options[21]['link'] = 'link to further information..?';
        $options[21]['lookup'] = '|italic|normal'; 
        $options[21]['default'] = '';
        $options[21]['optional'] = 'yes';
        $options[21]['repeatable'] = 'no';
        $options[21]['perdashboard'] = 'yes';
        $options[21]['dependenton'] = '';
  
	$options[22]['name'] = 'maxValFontFamily';
        $options[22]['description'] = 'Font Family of the Maximum Value displayed on the bar';
        $options[22]['detail'] = 'This sets the maximum value font family';
        $options[22]['type'] = 'Dropdown';
        $options[22]['link'] = 'link to further information..?';
        $options[22]['lookup'] = '|Arial|Times New Roman|Helvetica'; 
        $options[22]['default'] = 'Arial';
        $options[22]['optional'] = 'yes';
        $options[22]['repeatable'] = 'no';
        $options[22]['perdashboard'] = 'yes';
        $options[22]['dependenton'] = '';



*/
  /*	$options[23]['name']                                    = 'minValFontStyle';
        $options[23]['description']                     = 'Please select the minimum value font style';
        $options[23]['detail']                          = 'This sets the font style for the minimum value';
        $options[23]['type']                            = 'Dropdown';
        $options[23]['link']                            = 'link to further information..?';
        $options[23]['lookup']                          = '|italic|normal'; #this would be if i have a dropdown and want to lookup the value you w ould enter a sql script with the column that comes back being the selection
        $options[23]['default']                         = '';
        $options[23]['optional']                        = 'yes';
        $options[23]['repeatable']                      = 'no';
        $options[23]['perdashboard']                    = 'yes';
        $options[23]['dependenton']                     = '';


  	$options[24]['name']                            = 'minValFontFamily';
        $options[24]['description']                     = 'Please select the Minimum value of the font family';
        $options[24]['detail']                          = 'This sets the font family';
        $options[24]['type']                            = 'Dropdown';
        $options[24]['link']                            = 'link to further information..?';
        $options[24]['lookup']                          = '|Arial|Times New Roman|Helvetica'; #this would be if i have a dropdown and want to lookup the value you w ould enter a sql script with the column that comes back being the selection
        $options[24]['default']                         = 'Arial';
        $options[24]['optional']                        = 'yes';
        $options[24]['repeatable']                      = 'no';
        $options[24]['perdashboard']                    = 'yes';
        $options[24]['dependenton']                     = '';

*/
/*  
	$options[25]['name'] = 'cursorType';
        $options[25]['description'] = 'Please select the Cursor Type';
        $options[25]['detail'] = 'This sets the cursor';
        $options[25]['type'] = 'Dropdown';
        $options[25]['link'] = 'link to further information..?';
        $options[25]['lookup'] = '|pointer|progress'; 
        $options[25]['default'] = 'pointer';
        $options[25]['optional']  = 'yes';
        $options[25]['repeatable'] = 'no';
        $options[25]['perdashboard'] = 'yes';
        $options[25]['dependenton'] = '';
*/

   	$options[26]['name'] = 'moveLeftRangeHover';
        $options[26]['description'] = 'Please select the Position of Hovering Box from 1-100';
        $options[26]['detail'] = 'Value is in percent, for more middle set 40 - 50';
        $options[26]['type'] = 'Integer';
        $options[26]['link'] = 'link to further information..?';
        $options[26]['lookup'] = ''; 
        $options[26]['default'] = '44';
        $options[26]['optional'] = 'yes';
        $options[26]['repeatable'] = 'no';
        $options[26]['perdashboard'] = 'yes';
        $options[26]['dependenton'] = '';


        $options[27]['name'] = 'rotateSlider';
        $options[27]['description'] = 'Please select the degree of rotating the slider, 0-360';
        $options[27]['detail'] = '0 keeps it horizontal(no rotation), 270 sets high to low, 90 sets low to high';
        $options[27]['type'] = 'Dropdown';
        $options[27]['link'] = 'link to further information..?';
        $options[27]['lookup'] = '|0|90|180|270';
        $options[27]['default'] = '';
        $options[27]['optional'] = 'yes';
        $options[27]['repeatable'] = 'no';
        $options[27]['perdashboard'] = 'yes';
        $options[27]['dependenton'] = '';

/*
        $options[28]['name'] = 'rotateThumb';
        $options[28]['description'] = 'Please select the degree to rotate the thumb, 0-360 ';
        $options[28]['detail'] = '0 keeps it horizontal(no rotation), 270 sets high to low, 90 sets low to high';
        $options[28]['type'] = 'Dropdown';
        $options[28]['link'] = 'link to further information..?';
        $options[28]['lookup'] = '|0|90|180|270';
        $options[28]['default'] = '';
        $options[28]['optional'] = 'yes';
        $options[28]['repeatable'] = 'no';
        $options[28]['perdashboard'] = 'yes';
        $options[28]['dependenton'] = '';
*/
/*
    	$options[29]['name'] = 'offsetLeftButtonTop';
        $options[29]['description'] = 'Specify offset for the left button ';
        $options[29]['detail'] = 'Value can be positive or negative';
        $options[29]['type'] = 'Integer';
        $options[29]['link'] = 'link to further information..?';
        $options[29]['lookup'] = '';
        $options[29]['default'] = '0';
        $options[29]['optional'] = 'yes';
        $options[29]['repeatable'] = 'no';
        $options[29]['perdashboard'] = 'yes';
        $options[29]['dependenton'] = '';

	$options[31]['name'] = 'offsetRightButtonTop';
        $options[31]['description'] = 'Specify offset for the right button';
        $options[31]['detail'] = 'Value can be positive or negative';
        $options[31]['type'] = 'Integer';
        $options[31]['link'] = 'link to further information..?';
        $options[31]['lookup'] = '';
        $options[31]['default'] = '0';
        $options[31]['optional'] = 'yes';
        $options[31]['repeatable'] = 'no';
        $options[31]['perdashboard'] = 'yes';
        $options[31]['dependenton'] = '';
*/

/*
        $options[29]['name'] = 'setMinTop';
        $options[29]['description'] = 'Position of Minimum values location y with respect to the Slider bar';
        $options[29]['detail'] = 'Value can be positive or negative';
        $options[29]['type'] = 'Integer';
        $options[29]['link'] = 'link to further information..?';
        $options[29]['lookup'] = '';
        $options[29]['default'] = '0';
        $options[29]['optional'] = 'yes';
        $options[29]['repeatable'] = 'no';
        $options[29]['perdashboard'] = 'yes';
        $options[29]['dependenton'] = '';


        $options[31]['name'] = 'setMinLeft';
        $options[31]['description'] = 'Position of Minimum value location x with respect to the Slider bar';
        $options[31]['detail'] = 'Value can be positive or negative ';
        $options[31]['type'] = 'Integer';
        $options[31]['link'] = 'link to further information..?';
        $options[31]['lookup'] = '';
        $options[31]['default'] = '-10';
        $options[31]['optional'] = 'yes';
        $options[31]['repeatable'] = 'no';
        $options[31]['perdashboard'] = 'yes';
        $options[31]['dependenton'] = '';


        $options[32]['name'] = 'setMaxTop';
        $options[32]['description'] = 'Position of Maximum value location y with respect to the Slider bar ';
        $options[32]['detail'] = 'Value can be positive or negative.';
        $options[32]['type'] = 'Integer';
        $options[32]['link'] = 'link to further information..?';
        $options[32]['lookup'] = '';
        $options[32]['default'] = '0';
        $options[32]['optional'] = 'yes';
        $options[32]['repeatable'] = 'no';
        $options[32]['perdashboard'] = 'yes';
        $options[32]['dependenton'] = '';


        $options[33]['name'] = 'setMaxLeft';
        $options[33]['description'] = 'Please select the location x with respect to the Slider bar';
        $options[33]['detail'] = 'Value can be positive or negative';
        $options[33]['type'] = 'Integer';
        $options[33]['link'] = 'link to further information..?';
        $options[33]['lookup'] = '';
        $options[33]['default'] = '100';
        $options[33]['optional'] = 'yes';
        $options[33]['repeatable'] = 'no';
        $options[33]['perdashboard'] = 'yes';
        $options[33]['dependenton'] = '';

 	$options[34]['name'] = 'setMinAllowed';
        $options[34]['description'] = 'Please select the minimum allowed value for the slider bar';
        $options[34]['detail'] = 'Value should greater than or equal to minimum value of the slider bar';
        $options[34]['type'] = 'Integer';
        $options[34]['link'] = 'link to further information..?';
        $options[34]['lookup'] = '';
        $options[34]['default'] = '100';
        $options[34]['optional'] = 'yes';
        $options[34]['repeatable'] = 'no';
        $options[34]['perdashboard'] = 'yes';
        $options[34]['dependenton'] = '';
*/
	$options[35]['name'] = 'setButtonLeftURL';
        $options[35]['description'] = 'Enter the URL for the left/up button\'s image';
        $options[35]['detail'] = 'Please provide the link to the image';
        $options[35]['type'] = 'Text';
        $options[35]['link'] = 'link to further information..?';
        $options[35]['lookup'] = '';
        $options[35]['default'] = '';
        $options[35]['optional'] = 'yes';
        $options[35]['repeatable'] = 'no';
        $options[35]['perdashboard'] = 'yes';
        $options[35]['dependenton'] = '';

    	$options[36]['name'] = 'setButtonRightURL';
        $options[36]['description'] = 'Enter the URL for the right/down button\'s image';
        $options[36]['detail'] = 'Please provide the link to the image';
        $options[36]['type'] = 'Text';
        $options[36]['link'] = 'link to further information..?';
        $options[36]['lookup'] = '';
        $options[36]['default'] = '';
        $options[36]['optional'] = 'yes';
        $options[36]['repeatable'] = 'no';
        $options[36]['perdashboard'] = 'yes';
        $options[36]['dependenton'] = '';
    	
	$options[37]['name'] = 'setButtonLeftHeight';
        $options[37]['description'] = 'Please select the left/up button\'s height';
        $options[37]['detail'] = 'This sets the image height';
        $options[37]['type'] = 'Integer';
        $options[37]['link'] = 'link to further information..?';
        $options[37]['lookup'] = '';
        $options[37]['default'] = '20';
        $options[37]['optional'] = 'yes';
        $options[37]['repeatable'] = 'no';
        $options[37]['perdashboard'] = 'yes';
        $options[37]['dependenton'] = '';
    	
	$options[38]['name'] = 'setButtonLeftWidth';
        $options[38]['description'] = 'Please select the left/up button\'s width';
        $options[38]['detail'] = 'This sets the image width';
        $options[38]['type'] = 'Integer';
        $options[38]['link'] = 'link to further information..?';
        $options[38]['lookup'] = '';
        $options[38]['default'] = '20';
        $options[38]['optional'] = 'yes';
        $options[38]['repeatable'] = 'no';
        $options[38]['perdashboard'] = 'yes';
        $options[38]['dependenton'] = '';
    	
	$options[39]['name'] = 'setButtonRightHeight';
        $options[39]['description'] = 'Please select the right/down button\'s height';
        $options[39]['detail'] = 'This sets the image height';
        $options[39]['type'] = 'Integer';
        $options[39]['link'] = 'link to further information..?';
        $options[39]['lookup'] = '';
        $options[39]['default'] = '20';
        $options[39]['optional'] = 'yes';
        $options[39]['repeatable'] = 'no';
        $options[39]['perdashboard'] = 'yes';
        $options[39]['dependenton'] = '';
    	
	$options[41]['name'] = 'setButtonRightWidth';
        $options[41]['description'] = 'Please select right/down button\'s width';
        $options[41]['detail'] = 'This sets the image width';
        $options[41]['type'] = 'Integer';
        $options[41]['link'] = 'link to further information..?';
        $options[41]['lookup'] = '';
        $options[41]['default'] = '20';
        $options[41]['optional'] = 'yes';
        $options[41]['repeatable'] = 'no';
        $options[41]['perdashboard'] = 'yes';
        $options[41]['dependenton'] = '';




	/*
	
	*/
	
	return($options);
}

function validate_slidertest($id, $value)
{  
	global $db;
	
	$select = $db->select();
	$columns['value'] = $value;
	
	$db->update("station_variables",$columns,'"svid"=\''.$id.'\'');
	
	$result = $db->fetchAll('select sid from station_variables where "svid"=\''.$id.'\'');
	workflow_input($result[0]['sid']);
	
	return $value;  
} 

function place_input_slidertest($sid, $value, $options, $setup)
{	
	$dashboard_options = $options['dashboard_options'];

	$dashboard_options['x'] = str_replace('px','',$dashboard_options['x']);
	$dashboard_options['y'] = str_replace('px','',$dashboard_options['y']);
	
	$str = '<div id="cover'.$sid.'">';
	$str .= '<div id="celement'.$sid.'" style = "visibility:hidden; position:absolute;z-index:2;
	 top:'.($dashboard_options['y']).'px; left:'.($dashboard_options['x']).'px; ">';

	$str .= '</div>';
	$str .= reload_input_slidertest($sid, $value, $options, $setup);
	$str .= '</div>';
	$str .= '</div>';
	
		  
	$str .= '	<script language ="JavaScript" type = "text/javascript">
				document.getElementById("celement'.$sid.'").style.border=\'1 px solid red\';
				function update'.$sid.'(dashboard, response)
				{	
				    make_update(response.svid, response.value);
				}
				function reload'.$sid.'(dashboard, response)
				{
				    place_input(dashboard, '.$sid.',
				    {
					\'onUpdate\': 
					function(response,xmlhttp)
					{
					    reload_update'.$sid.'(response)
					}
				    });
				}

				function mark'.$sid.'(dashboard, response)
				{
				    document.getElementById("celement'.$sid.'").style.visibility = \'visible\';
					//document.getElementById("celement'.$sid.'").style.border=\'1 px solid red\';
				}
				function reload_update'.$sid.'(response)
				{
					document.getElementById("celement'.$sid.'").style.visibility=\'hidden\';
					//document.getElementById("celement'.$sid.'").style.border=\'none\';	
				}
			</script>';
	return($str);
    }

    function reload_input_slidertest($sid, $value, $options, $setup)
    {	
	$dashboard_options = $options['dashboard_options'];
	if (isset($dashboard_options['buttonName']) and (!isset($value) or ($value=='')))
	{
		//$value=$dashboard_options['buttonName'];
	}
	 $flag1=true;
	 $flag2=true;
	
	
	// if the degree of rotation is zero
	//if(($dashboard_options['offsetRightButtonTop'])!=0)
	//$offsetRight = $dashboard_options['offsetRightButtonTop'];
	//else
	$offsetRight = $dashboard_options['setButtonRightWidth']/2;

	
	//if(($dashboard_options['offsetLeftButtonTop'])!=0)
	
	//$offsetLeft = $dashboard_options['offsetLeftButtonTop'];
	//else
	$offsetLeft = -$dashboard_options['setButtonLeftWidth'];
	
	if($dashboard_options['rotateSlider'] == 0)
	{
	    $checkRight = $dashboard_options['width']+2;
	    $checkRightTop = 0;
	    $checkLeft = $offsetLeft+2;
	    $checkLeftTop = 0;
		
	}
	
	else 	if($dashboard_options['rotateSlider'] == 180)
	{
		
	    $checkLeft = $dashboard_options['width']+2;
	    $checkRightTop = 0;
	    $checkRight = $offsetLeft+2;
	    $checkLeftTop = 0;
	
	}
	
	else 
	{	
	    $checkRight = $dashboard_options['width']/2 - $offsetRight + 2 ;
	    $checkRightTop = $dashboard_options['width']/2 + $offsetRight;	
	    $checkLeft = $dashboard_options['width']/2 - $offsetRight + 2; 
	    $checkLeftTop = -$dashboard_options['width']/2 - $offsetRight+2  ;

	}
	
//	$show = false;	
	if(isset($dashboard_options['sections']))
	{ 
	    $sections=$dashboard_options['sections'];
	}
	else{$sections=1;}
	    if (isset($options['min'])&&  isset($options['max']))
	    {		
			
	        if( $options['min'] > $options['max'])	
		{
			//echo "Input Range is incorrect";
		    $flag2 = false;
		}
		
		if($flag1&&$flag2)
		{
		    $min = $options['min'];
		    $max = $options['max'];
		    $step = ($max - $min)/$sections;
		    $step = round($step,2);
		    $step = $sections; 	
			 
		    $flag = 0;
			
		    $content = '';
		    $content .= ' <style type="text/css">
	
			/* #min'.$sid.'{
	                /* Set the min val style */ 	
			color :'.$dashboard_options['minValFontColor'].';
			font-weight : '.$dashboard_options['minValFontWeight'].';
			font-size : '.$dashboard_options['minValFontSize'].';
			font-style : '.$dashboard_options['minValFontStyle'].';
			font-family : '.$dashboard_options['minValFontFamily'].';
			position : absolute;
                        /* the top and the left can be customized, the positions are relative to the slider bar*/
			//top : 0px;
			top : '.$dashboard_options['setMinTop'].'px;
			//left : -10px;
			left : '.$dashboard_options['setMinLeft'].'px;
			 } */
			#max'.$sid.'
			{
		        /* Set the max val style */
			//font-size :'.$dashboard_options['maxValFontSize'].'px;
			//color :'.$dashboard_options['maxValFontColor'].';
			//font-weight : '.$dashboard_options['maxValFontWeight'].';
			//font-style : '.$dashboard_options['maxValFontStyle'].';
			//font-family : '.$dashboard_options['maxValFontFamily'].';
		
	//		position : absolute;
			//top : -150px;
                        /*  The top option can be customized */
                        
//			top : '.$dashboard_options['setMaxTop'].'px;
			//position : relative;
                        /*  The left option can be customized */
			//left : '.$dashboard_options['width'].'px;
	//		left : '.$dashboard_options['setMaxLeft'].'px;
			}
			#leftButton'.$sid.'{
			//background-image: url(\'files/image/left_arrow.png\');
			background-image: url(\''.$dashboard_options['setButtonLeftURL'].'\');

			top : '.$checkLeftTop.'px;
			left : '.$checkLeft.'px;
    			width: '.$dashboard_options['setButtonLeftWidth'].'px; 
    			height: '.$dashboard_options['setButtonLeftHeight'].'px;
			position: absolute;
			}
			#rightButton'.$sid.'{
			//background-image: url(\'files/image/right_arrow.png\');
			background-image: url(\''.$dashboard_options['setButtonRightURL'].'\');
			top : '.$checkRightTop.'px;
			left : '.$checkRight.'px;
    			width: '.$dashboard_options['setButtonRightWidth'].'px; 
    			height: '.$dashboard_options['setButtonRightHeight'].'px;
			position: absolute;
			}				


			/* Set the slider bar style 
			#slider'.$sid.'	input[type = "range"]*/
			input[type = "range"]
			{	
		
		        /* Set the rotation for the slider bar, 0 keeps it horizontal,
			 270 high to low, 90 low to high */
			-webkit-transform: rotate('.$dashboard_options['rotateSlider'].'deg);
			-webkit-appearance : none;
  		 	background-color : '.$dashboard_options['sliderColor'].';
  		 //	background : -webkit-linear-gradient(0deg,green,rgba(0,204,102,1),red);
                 	height : '.$dashboard_options['sizeOfSlider'].'px;
			z-index: 2;	
			}


			/*Slider bar thumb Style
 			#slider1'.$sid.' input[type="range"]::-webkit-slider-thumb*/
 			input[type="range"]::-webkit-slider-thumb
			{
			-webkit-appearance : none;

		        /* Set the rotation for the thumb,
			 0 keeps it horizontal, 90 low to high(up-down) */
			-webkit-transform: rotate('.$dashboard_options['rotateSlider'].'deg);

			position : relative;
			top : 0px;
			//z-index : 1;
			width : '.$dashboard_options['widthOfThumb'].'px;
			height : '.$dashboard_options['heightOfThumb'].'px;
			//height: 20px;
			cursor : '.$dashboard_options['cursorType'].';
			
	//		-webkit-box-shadow : 0px 6px 5px 0px rgba(0,0,0,0.6);
	//		-moz-box-shadow : 0px 6px 5px 0px rgba(0,0,0,0.6);
			box-shadow : 0px 2px 1px 0px rgba(0,0,0,0.5);
			-webkit-border-radius : 40px;
			-moz-border-radius : 40px;
			border-radius : '.$dashboard_options['radiusOfThumb'].'px;
		
			//background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ebf1f6),
			// color-stop(50%,#abd3ee), color-stop(51%,#89c3eb), color-stop(100%,#d5ebfb));
			background-color :'.$dashboard_options['colorOfThumb'].';
			opacity:0.6;
			}			
			
			/* Tool Tip */
			#rangevalue'.$sid.' {
		
			font-size: '.$dashboard_options['fontSizeOfRangeValue'].'px;
			text-align: center;
			font-family:  Arial, sans-serif;
			display: block;
			color: '.$dashboard_options['colorOfRangeValue'].';
			margin: 20px 0;
			position: relative;
			left : '.$dashboard_options['moveLeftRangeHover'].'%;
			padding: 6px 12px;
			border: '.$dashboard_options['pixelSizeborderRange'].'px
			 solid '.$dashboard_options['borderOfBackgroundRange'].';


			-webkit-box-shadow : inset 0px 1px 1px 0px rgba(255, 255, 255, 0.2), 
			0px 2px 4px 0px rgba(0,0,0,0.4);
			-moz-box-shadow : inset 0px 1px 1px 0px rgba(255, 255, 255, 0.2), 
			0px 2px 4px 0px rgba(0,0,0,0.4);
			box-shadow : inset 0px 1px 1px 0px rgba(255, 255, 255, 0.2), 
			0px 2px 4px 0px rgba(0,0,0,0.4);
		
			//background: -webkit-gradient(linear, left top, left bottom,
			// color-stop(0%,#222931), color-stop(100%,#181D21));
			background-color:'.$dashboard_options['colorOfBackgroundRange'].';	
	

			-webkit-border-radius : 20px;
			-moz-border-radius : 20px;
			border-radius : 20px;
			width : '.$dashboard_options['sizeOfBackgroundRange'].'px;
			filter : alpha(opacity=0);
			opacity : 0;


			-webkit-transition : all 0.5s ease;
			-moz-transition : all 0.5s ease;
			-o-transition : all 0.5s ease;
			-ms-transition : all 0.5s ease;
			transition : all 0.5s ease;


			/* Change it for the hovering box */
			top : -95px;
			}

			input[type = "range"]:hover ~ #rangevalue'.$sid.', active ~ #rangevalue'.$sid.' {
        
        		filter : alpha(opacity=100);
        		opacity : 1;
        		top : -75px;
			
			}
			input[type = "button"]:active ~ #rangevalue'.$sid.' {
        		filter : alpha(opacity=100);
        		opacity : 1;
        		top : -75px;
			}	
			</style>
			
			<div id="element'.$sid.'" style="'.($dashboard_options['css']).'z-index:0; position:absolute;
			 top:'.($dashboard_options['y']).'; left:'.($dashboard_options['x']).'; ">	
			
			
  <input type="range"  STYLE="'.($dashboard_options['css']).' ;width:'.$dashboard_options['width'].'px;  "  min="'.$options['min'].'" ; max="'.($max).'" ;  step="'.$step.'" ;   id="'.$setup['value_svid'].'" ; value="'.$value.'" ; onmousemove="showValue'.$sid.'(this.value,this.min,this.max,this.step)"; onmouseup="validate_slidertest(this.id, this.value, {\'onUpdate\': function(response,xmlhttp){make_update(\''.$sid.'\',response); }})"; class="slider1'.$sid.'";/> ';
                        $content.='<span id="max"></span><br>
                        <div style="text-align: center;">
                         </div>
                         
			<output id = "rangevalue'.$sid.'">'.$value.'</output><span id="max'.$sid.'"></span>



                        <span id="val"></span>
                        <script type="text/javascript">

                        var flag='.$flag.';

                        document.getElementById("min'.$sid.'").innerHTML='.$options['min'].';
                        document.getElementById("max'.$sid.'").innerHTML='.$max.';
                                function showValue'.$sid.'(newValue,min,max,step)
                                        {

                                                v=Number(newValue);
                                                n=Number(step);
                                        console.log(v+n);
                                                document.getElementById("rangevalue'.$sid.'").innerHTML=(newValue);

                                        }

	
			
			 
			
			
			
			// Setting the minimum and the maximum
			    
			    /*
				This function shows the range box on hovering over the slider box
			    */
			    
			
			    /*
			
				This functions moves right and then calls function showValue()

			    */

			    function moveRight'.$sid.'(slide)
			    {
				
				if(slide.step == 0) slide.step = 1;
				(slide.value)= parseFloat(slide.step) + parseFloat(slide.value);
			  	showValue'.$sid.'(slide.value,slide.min,slide.max,slide.step);
		
			    }

			    /* 
		
				This function validates after the user selects the value on the sliderBar.
				It is called on mouseup/can be called on mouseout			
	
			    */		
		
			    function myVar'.$sid.'(slide)
			    {
				//document.write(slide.value);
				//if(slide.value < minAllowed'.$sid.') slide.value = minAllowed'.$sid.';
				
				
				{	
		validate_slidertest('.$setup['value_svid'].',10, {\'onUpdate\': function(response,xmlhttp){make_update(\''.$sid.'\',response);}});
				//document.write(parseFloat(slide.value));
			    	}
			    }

			    /*
			
				The slider bar moves left and if the value is set below the minimum value, 
				then it is reset to the minimum allowed/ recommended	
				
			    */
			    function moveLeft'.$sid.'(slide)
			    {
				if(slide.step == 0) slide.step = 1;
				
				if((slide.value - slide.step ) <=( minAllowed'.$sid.')) slide.value = minAllowed'.$sid.';
				else
					(slide.value) = parseFloat(slide.value)-parseFloat(slide.step);
			  	
				showValue'.$sid.'(slide.value,slide.min,slide.max,slide.step);
			    }
					
			</script>
			<script>
			    var inputs = document.getElementsByTagName("input");
				 
		 	    for(var i = 0; i < inputs.length; i++) 
			    {
				if(inputs[i].type == "range" || inputs[i].type == "button") 
				{
				    inputs[i].addEventListener("onclick", 
					function() 
 					{
				    	    this.focus();
					});
				}
			    }  
			</script>
			</div>';
			}
			
	}
	return ($content) ;
	//onchange="showValue(this.value),validate_slider(this.id, this.value,
	// {\'onUpdate\': function(response,xmlhttp){make_update(\''.$sid.'\',response)}})";
    }
    
    function slidertest_rtrn_default_value($sid, $options)
    {
    }
