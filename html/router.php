<?php 
	$page = $_SERVER["REQUEST_URI"];
		if ($page == "/index.php")
		echo "You are currently on the 'Home' page at the following URI: " . $page;
		elseif ($page == "/about.php")
		echo "You are currently on the 'About' page at the following URI: " . $page;
		elseif ($page == "/contact.php")
		echo "You are currently on the 'Contact' page at the following URI: " . $page;
		else
		echo "Could not understand your request.";
?>