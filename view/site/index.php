<?php
    require('layouts/header.php');

    if (isset($_GET['controller'])) {
		$controller = $_GET['controller'];
	} else {
		$controller = '';
	}

	switch ($controller) {
		case 'signup':
			require('pages/signup.php');
			break;
		
		default:
			require('pages/home.php');
			break;
	}

	require('layouts/footer.php');




