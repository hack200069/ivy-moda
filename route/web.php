<?php
	$controller = $_GET['controller'];
	
	if(file_exists('controller/site/' . $controller . '.php')){
		require('controller/site/' . $controller . '.php'); 
	}
	else {
		require('controller/site/not_found.php');
	}
	