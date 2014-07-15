License, see license.txt

Installation Requirements
- apache
- php (incl. cli version)
- postgres
- postgis
- gdal,ogr (for shapefile import)

Install to the dist folder
- dist/excanvas
- dist/openlayers
- dist/phplivex
- dist/proto.menu
- dist/prototype
- dist/scriptaculous
- dist/swfupload

Installation
- create database with postgis installed
- set host, user, password, dbname, paths to software in includes/config.php
- run tables.sql from the install directory
- for the importer set php and apache values to the desired upload sizes
- set includes/dasboardBGs directory to allow read/writeedit_area
