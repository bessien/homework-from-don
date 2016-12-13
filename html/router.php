<?php
	$page = $_SERVER["REQUEST_URI"];
	$file = substr($page, 10);
		if ($file == "/about")
		include('./about.php');
		elseif ($file == "/contact")
		include('./contact.php');
		else
		echo "Welcome home.";
?>