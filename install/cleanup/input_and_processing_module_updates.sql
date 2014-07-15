update station_variables set description = 'Input Type' where description='Type of Variable';
update station_variables set description = 'Processing Type' where description='PHP Filename';
update station_variables_template set description = 'Input Type' where description='Type of Variable';
update station_variables_template set description = 'Processing Type' where description='PHP Filename';
update station_template set name = 'New Processing' where name = 'New Module';
update station set name = 'New Processing' where name = 'New Module';
