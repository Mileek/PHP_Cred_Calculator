<?php
define('_SERVER_NAME', 'localhost');//Domyślny port 80, którego nie trzeba zapisywać
define('_SERVER_URL', 'http://' . _SERVER_NAME);
define('_APP_ROOT', '/PHP_Project');
define('_APP_URL', _SERVER_URL . _APP_ROOT);
define("_ROOT_PATH", dirname(__FILE__));


//& oznacza przekazanie parametru przez referencję, a nie jako kopię wartości
function out(&$param){
	if (isset($param)){
		echo $param;
	}
}