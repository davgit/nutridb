<?php

/**
 * Copyright (c) 2007 Nathan Kinkade
 * 
 * This code is offered under an MIT (X11) license.  For more information
 * about the terms of this license see the file LICENSE included with this
 * software or visit: http://www.opensource.org/licenses/mit-license.php
 */

# Directory where USDA update files are located
$updatesDir = "./sr25";

# Where to log errors and stats
$fh_log = fopen("./sr25_updates.log", "a");

# Fields are delimited with this character
$delimiter = "^";

# Fields are optionally enclosed between this character
$enclosure = "~";

# site constants that don't need to be interpolated in strings and/or
# are more sensitive will be setup as constants
define("DBHOST", "localhost"); # database host
define("DBNAME", "nutridb_sr25"); # database name
define("DBUSER", "nutridb"); # database user
define("DBPASS", ""); # database password

define("ADODBDIR", "../lib/adodb"); # adodb db abastractions libs - adodb.sourceforge.net

require("../lib/database.class.php"); # database class  

# instantiate the database object
$db = new Database();

?>
