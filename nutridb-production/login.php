<?php

/**
 * Copyright (c) 2007 Nathan Kinkade
 * 
 * This code is offered under an MIT (X11) license.  For more information
 * about the terms of this license see the file LICENSE included with this
 * software or visit: http://www.opensource.org/licenses/mit-license.php
 */

# include the main site config where various global variables
# and libraries are included
require("config.php");

# pretty simple. check their credentials and then send them back
# to the index page.  if the login succeeded then the proper
# session variables will be set and the index page will automatically
# do what is necessary

if ( isset($_POST['doLogin']) ) {
	validateUser($_POST['username'],$_POST['password']);
}

# send the user back wherever they were when they logged in
header("Location: {$config->_previousUri}");
exit;

?>
