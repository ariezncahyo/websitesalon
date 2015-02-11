<?php
session_start();
if (!isset($_SESSION["userSession"])){
	echo "No access, you need to <a href='index.php'>log in.</a>";
	exit();
}
include_once ("../includes/init.php");
include_once("../classes/DB.php");
$conn = new DB();

$data = $conn->getall("posts", "DESC");
?>
<html>
<head>
<title>Website Salon CMS</title>
<link rel="stylesheet" type="text/css" href="../styles/styles.css"/>
</head>
<body>
<?php readfile("menu.html");  ?>
<h2>Latest Posts</h2>
<?php
//loop though the results
$s = 1;
while($f1 = mysqli_fetch_array($data)){
    echo "<div style='font-weight:bold'>".$f1['urltitle']."</div>"; 
	echo "<div style='margin-bottom:15px;'>".substr($f1['body'],0,300)."</div>";
	$s++;
	if($s>3){
       break;
  		 }
}
?>
</body>
</html>

