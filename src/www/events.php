<?php
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}

include_once($_SERVER["FRAMEWORK_PATH"]."/config/init.php");

$action = $page->actions();


$page->bodyClass("events");
$page->pageTitle("Dukke Partiet - Mød kandidaterne");

// list
if(!$action) {

	$page->header();
	$page->template("pages/events.php");
	$page->footer();

}
else {

	$page->header();
	$page->template("pages/404.php");
	$page->footer();

}

?>