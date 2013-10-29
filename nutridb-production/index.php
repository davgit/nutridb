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

$sql = "
	SELECT * FROM foodCats
	ORDER BY fdgrp_desc
";
$db->Select($sql);
# add the "All" category to the beginning of categories
array_unshift($db->_rows, array("fdgrp_cd" => "All", "fdgrp_desc" => "All categories"));
$smarty->assign("foodCats", $db->_rows);

# if some of the form field were submitted via a GET then load them
# up on the form, else use some defaults
if ( isset($_GET['searchString']) ) {
	$smarty->assign("currentSearchString", $_GET['searchString']);
} else {
	$smarty->assign("currentSearchString", "");
}
if ( isset($_GET['searchType']) ) {
	$smarty->assign("currentSearchType", $_GET['searchType']);
} else {
	$smarty->assign("currentSearchType", "All Words");
}
if ( isset($_GET['wordType']) ) {
	$smarty->assign("currentWordType", $_GET['wordType']);
} else {
	$smarty->assign("currentWordType", "Partial Word");
}
if ( isset($_GET['foodCat']) ) {
	$smarty->assign("currentFoodCat", $_GET['foodCat']);
} else {
	$smarty->assign("currentFoodCat", "All");
}
if ( isset($_GET['sortType']) ) {
	$smarty->assign("currentSortType", $_GET['sortType']);
} else {
	$smarty->assign("currentSortType", "Category");
}

# search types, and word types
$smarty->assign("searchTypes", array("All Words", "Any Word", "Exact Phrase"));
$smarty->assign("wordTypes", array("Partial Word", "Full Word"));
$smarty->assign("sortTypes", array("Category", "Food Description", "Popularity"));


$sql = "
	SELECT nutr_no, nutrdesc FROM nutrientDefs
	ORDER BY nutrdesc 
";
$db->Select($sql);
$smarty->assign("nutrientList", $db->_rows);


# grab the various parts.  these sections are not printed to the screen
# but rather dumped into smarty variables that will simply be printed
# in the template, so the order doesn't matter here at the moment
include("header.php");
include("sidebar_left.php");
include("sidebar_right.php");
include("footer.php");

$smarty->display("index.tpl");

?>
