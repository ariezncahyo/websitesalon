<?php
session_start();
include_once ("../classes/Session.php");

Session::delete("userSession");
?>
<html>
<head>
<title>Website Salon CMS</title>
<link rel="stylesheet" type="text/css" href="../styles/styles.css"/>
</head>
<body>
<?php readfile("menu.html");  ?>
<h2>Logged Out.</h2>

</body>
</html>

