<?php
	session_start();
if (isset($_GET['lang'])) { //if there is a language choice in the querystring
	$lang = $_GET['lang']; //use this language
	setcookie("lang", $lang, 0, '/'); //set a cookie
} else
	$lang = (isset($_COOKIE["lang"]) ? $_COOKIE["lang"] : 'en_CA'); //from cookie or default
//extract the root language from the complete locale to use with strftime
$rootlang = preg_split('/_/', $lang);
$rootlang = (is_array($rootlang) ? $rootlang[0] : $rootlang);
setlocale(LC_ALL, $rootlang . ".UTF8"); //which locale to use. .UTF8 is to ensure proper encoding of output
bindtextdomain($lang, "locale"); //pointing to the locale folder for the language of choice
textdomain($lang); //what is the file name to find translations

	require("app/core/autoload.php");
	require("app/core/phpqrcode/qrlib.php");
