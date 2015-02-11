<?php
session_start();
if (!isset($_SESSION["userSession"])){
	echo "No access, you need to <a href='index.php'>log in.</a>";
	exit();
}
?>
<html>
<head>
<title>Wetbsite Setup</title>
<link rel="stylesheet" type="text/css" href="../styles/styles.css"/>
</head>
<body>
<?php readfile("menu.html");  ?>
<h3>Website Setup Step 2</h3>
<h4>Website background image or color</h4>
Choose between <a href="setup2a.php">image</a> or  <a href="setup2b.php">color</a> as background for website.
</body>
</html>




