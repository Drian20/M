<?php
	//first phase
	ini_set('display_errors','on');

	error_reporting(E_ALL);

	include 'config.php';
	require 'sys/core.php';
	require 'sys/helper.php';
	require 'sys/registry.php';
	require 'sys/session.php';

	$conf =Registry::getInstance();
	$conf->welcome = "Hola";
	$msg = $conf->welcome;

	Core::init();
	$id = session::get_session_variable('id');

	//session::session_id();
	//Coder::code($id);


	
	
	//unset($conf);
	//Coder::codear($msg);
	//Coder::codear($conf);

	
?>