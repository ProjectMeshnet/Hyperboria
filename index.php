<?php

// pages
$pages = array(
	'default' => array(
		'title' => 'the decentralized network powered by CJDNS',
		'menu' => 'Home',
	),
	'about' => array(
		'title' => 'about the network',
		'menu' => 'About',
	),
	'status' => true, // this is the minimum you need to add a page (along with "status.php").
	// add pages here. Array keys define the URL and file name (without the ".php" extension).
);

// router
$page = 'default';
if(isset($_GET['page'])) {
	if(isset($pages[$_GET['page']])) { // make sure the filename is clean
		$page = $_GET['page'];
	} else {
		$page = '404';
		$pages[$page]['title'] = 'page not found (404 error)';
		header('HTTP/1.0 404 Not Found'); // tell bots not to bother looking here
	}
}

// visited via hyperboria?
$connected = false;
$url = '/hyperboria.net/';
if (!preg_match($url, $_SERVER['HTTP_HOST'])) { 
	$connected = true;
}

// render layout
include 'layout.php';

?>