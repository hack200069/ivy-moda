<?php
	$controller = $_GET['controller'];
	require('Controller/' . $controller . '.php'); 
	$controller = ucfirst($controller); 
	$request = new $controller; 