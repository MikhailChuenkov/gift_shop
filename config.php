<?php

function __autoload($classname) {
	switch ($classname[0]) {
	case 'C':
		include_once "c/$classname.php";
		break;
	case 'M':
		include_once "m/$classname.php";
		break;
	}
}

define('BASE_URL', $_SERVER["HTTP_HOST"]);

define('MYSQL_SERVER', '127.0.0.1:3307');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', '');
define('MYSQL_DB', 'test');
