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
include("config.php");

# if the user got here by pressing the "Register" button, then
# let's process the request.
if ( isset($_POST['action']) && ($_POST['action'] == "registerUser") ) {

	# validate the form .. this is already done through javascript, but we
	# better make sure

	# make sure they entered a username
	if ( isset($_POST['username']) && ("" == trim($_POST['username'])) ) {
		$_SESSION['systemMsg'] = "<span class='msgError'>You must specify a login name.</span>";
		header("Location: {$config->_previousUri}");
		exit;
	} else {
		$username = trim($_POST['username']);
		if ( strlen($username) < 5 ) {
			$_SESSION['systemMsg'] = "<span class='msgError'>The login name must contain at least 5 characters.</span>";
			header("Location: {$config->_previousUri}");
			exit;
		}
	}
	# make sure there is a password and that the confirm password matches
	if ( isset($_POST['password']) && ("" == trim($_POST['password'])) ) {
		$_SESSION['systemMsg'] = "<span class='msgError'>You must specify a password.</span>";
		header("Location: {$config->_previousUri}");
		exit;
	} else {
		$password = trim($_POST['password']);
		if ( strlen($password) < 5 ) {
			$_SESSION['systemMsg'] = "<span class='msgError'>The password must contain at least 5 characters.</span>";
			header("Location: {$config->_previousUri}");
			exit;
		}
		if ( ! isset($_POST['password2']) || (trim($_POST['password']) != trim($_POST['password2'])) ) {
			$_SESSION['systemMsg'] = "<span class='msgError'>Your passwords do not match.</span>";
			header("Location: {$config->_previousUri}");
			exit;
		}
	}

	# make sure the user entered a birthday, and if so, covert it to a UNIX timestamp
	if ( isset($_POST['birthday']) && ("" == trim($_POST['birthday'])) ) {
		$_SESSION['systemMsg'] = "<span class='msgError'>You must specify a birthday (even if it's not real).</span>";
		header("Location: {$config->_previousUri}");
		exit;
	} else {
		$birthday = strtotime($_POST['birthday']);
		if ( ! $birthday ) {
			$_SESSION['systemMsg'] = "<span class='msgError'>Your birthday doesn't appear to be an actual date.</span>";
			header("Location: {$config->_previousUri}");
			exit;
		}
	}

	# make sure they accepted the Terms & Conditions
	if ( ! isset($_POST['terms']) ) {
		$_SESSION['systemMsg'] = "<span class='msgError'>You must accept the Terms &amp; Conditions of this site in order to register.</span>";
		header("Location: {$config->_previousUri}");
		exit;
	}
	# make sure the user doesn't already exist in the database
	$sql = sprintf ("
		SELECT * FROM users
		WHERE username = '%s'
		",
		trim($_POST['username'])
	);
	$db->Select($sql);
	if ( $db->_rowCount > 0 ) {
		$_SESSION['systemMsg'] = "<span class='msgError'>The login name you selected is already in use.  Please select another.</span>";
		header("Location: {$config->_previousUri}");
		exit;
	}

	# validation must have passed so let's add the new user.
	# the local variables were assigned during validation
	$sql = sprintf ("
		INSERT INTO users(username,password,birthday,gender)
		VALUES ('%s', '%s', '%s', '%s')
		",
		$username,
		md5($password),
		$birthday,
		$_POST['gender']
	);
	$db->Modify($sql);
	if ( $db->_affectedRows == 1 ) {
		# give the new user authorization
		$_SESSION['auth']['status'] = "access_granted";
		$_SESSION['auth']['ipaddress'] = $_SERVER['REMOTE_ADDR'];
		# dump the users info into the session
		$_SESSION['user']['id'] = $db->InsertId();
		$_SESSION['user']['username'] = $username;
		$_SESSION['user']['birthday'] = $birthday;
		$_SESSION['user']['gender'] = $_POST['gender'];

		# determine the users age and put it in the session so that we don't have
		# to calculate it over and over again as they view things. 31536000 is the 
		# number of seconds in a year.
		$_SESSION['user']['age'] = floor((time() - $db->_row['birthday'])/31536000);

		# now let's add the default nutrients as the users default set of nutrients
		$sql = sprintf("
			INSERT INTO userNutrients(user, nutrient)
			SELECT '%s', nutr_no FROM nutrientDefs
			WHERE is_default = '1'
			",
			$_SESSION['user']['id']
		);
		$db->Modify($sql);
		if ( ! $db->_error ) {
			$_SESSION['systemMsg'] = "<span class='msgOkay'>Congratulations.  Registration succeeded.</span>";
		} else {
			$_SESSION['systemMsg'] = "<span class='msgError'>Registration succeeded, but with errors.</span>";
		}

		# send the user to the main page
		header("Location: {$config->_rootUri}");
		exit;
	} else {
		$_SESSION['systemMsg'] = "<span class='msgError'>There was an error. Registration failed.</span>";
		header("Location: {$config->_previousUri}");
		exit;
	}

}

# Create a list of genders for the template
$smarty->assign("genders", array('Female', 'Male'));

# grab the various parts.  these sections are not printed to the screen
# but rather dumped into smarty variables that will simply be printed
# in the template, so the order doesn't matter here at the moment
include("header.php");
include("sidebar_left.php");
include("sidebar_right.php");
include("footer.php");

$smarty->display("register.tpl");

