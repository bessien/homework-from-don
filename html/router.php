<?php
	$page = $_SERVER["REQUEST_URI"];
	$file = substr($page, 10);
		if ($file == "about")
		include('./index.php/about');
		elseif ($file == "contact")
		include('./index.php/contact');
		else
		echo "Welcome home.";
?>