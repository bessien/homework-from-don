<?php
	$page = $_SERVER["REQUEST_URI"];
	$file = substr($page, 10);
		if ($file == "/about")
		include('./about.php');
		elseif ($file == "/contact")
		include('./contact.php');
		elseif ($file == '/form') {
			include('./form.php');
			if (!empty($_REQUEST['color'])) {
				$input_color = $_REQUEST['color'];
				include('./loggedin.php');
			}
		}
		else
		echo "Welcome home.";
?>
