<?php
	require 'model/database.php';
	$db = new Database();

	require 'view/site/layouts/header.php'; 

	if (isset($_GET['controller'])) {
		require '../../route/admin/web.php'; 
	} else {
		require 'view/site/pages/home.php';
	}

	require 'view/site/layouts/footer.php'; 

	$db->closeDatabase();