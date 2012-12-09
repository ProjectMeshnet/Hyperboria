<?php
// locale
$locale = "en_US"; // default locale
$domain = "messages"; // name of file with translations
if (isset($_GET['lang'])) {
	$locale = $_GET['lang'];
	setcookie('lang', $_GET['lang'], 1640995200);
}
elseif (isset($_COOKIE['lang'])) {
	$locale = $_COOKIE['lang'];
}
setlocale(LC_ALL, $locale);
putenv("LC_ALL=".$locale);
bindtextdomain($domain, "./locale");
bind_textdomain_codeset($domain,'UTF-8');
textdomain($domain);

// pages
$pages = array(
	'default' => array(
		'title' => _("the decentralized network powered by CJDNS"),
		'menu' => _("Home"),
	),
	'about' => array(
		'title' => _("about the network"),
		'menu' => _("About"),
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
		$pages[$page]['title'] = _('page not found (404 error)');
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
