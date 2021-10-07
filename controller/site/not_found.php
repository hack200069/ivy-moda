<?php

class NotFound{
    public function __construct()
	{
		require('view/site/pages/404.php');
	}
}
$not_found = new NotFound();