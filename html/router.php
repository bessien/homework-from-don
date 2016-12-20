<?php
  if(isset($_REQUEST['color']))
  include('./log_out.php');
	else
	include('./log_in.php');
?>

<?php
	$page = $_SERVER["REQUEST_URI"];
	$file = substr($page, 10);
		if ($file == "/about")
		include('./about.php');
		elseif ($file == "/contact")
		include('./contact.php');
		elseif ($file == '/form')
		include('./form.php');
		else
		echo "Welcome home.";
?>
