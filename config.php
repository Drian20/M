<?php	
	define('DS',DIRECTORY_SEPARATOR);
	define('ROOT',realpath(dirname(__FILE__)).DS);
	//to access filesystem
	define('APP',ROOT.'app'.DS);
	define('APP_W',basename(dirname($_SERVER['SCRIPT_NAME'])));
?>