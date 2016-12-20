<?php
session_start();
  if(isset($_REQUEST['color']))
  {
      $color=$_REQUEST['color'];
 
  }
?>
<html>
<body bgcolor="<?php echo $color; ?>">
<h1>Welcome!</h1>
<!--<pre>
	<?php echo var_dump($_SERVER); ?>
</pre>-->
<?php include('./nav.php');?>
<?php include('./router.php');?>
</body>
</html>

