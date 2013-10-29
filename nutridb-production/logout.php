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

# kill session variables and then the session itself
session_unset();
session_destroy();

# send the user back to wherever they were
header("Location: {$config->_previousUri}");
exit;

?>
