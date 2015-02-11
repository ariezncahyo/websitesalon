<?php
session_start();
if (!isset($_SESSION["userSession"])){
	echo "No access, you need to <a href='index.php'>log in.</a>";
	exit();
}
include_once ("../includes/init.php");
include_once("../classes/DB.php");
$conn = new DB();
//check if id is set to delete
	if(isset($_GET['id'])) {
		$id = $_GET['id'];
		$data=$conn->delete("users", $id);
		header("Location: users.php");
	}
$data = $conn->getall("users", "ASC");
?>
<html>
<head>
<title>Website Salon CMS</title>
<link rel="stylesheet" type="text/css" href="../styles/styles.css"/>
</head>
<body>
<?php readfile("menu.html");  ?>
<h2>Registered Users</h2><hr>
<?php
echo "<div class='functions'><a href='newuser.php'>Add New User</a></div>";
echo "<div class='clear'></div>";
//loop though the results
while($f1 = mysqli_fetch_array($data)){
    echo "<div>Username: ".$f1['username']."</div>"; 
    echo "<div class='functions'><a href='users.php?id=".$f1['id']."'>DELETE</a>"; 
    echo " - <a href='updateuser.php?id=".$f1['id']."'>UPDATE</a></div>";
	echo "<div class='clear'></div>";
}
?>
</body>
</html>

