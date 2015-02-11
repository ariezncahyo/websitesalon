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
		$data=$conn->delete("posts", $id);
		header("Location: posts.php");
	}
$data = $conn->getall("posts", "DESC");
?>
<html>
<head>
<title>Website Salon CMS</title>
<link rel="stylesheet" type="text/css" href="../styles/styles.css"/>
</head>
<body>
<?php readfile("menu.html");  ?>
<h2>All Posts</h2><hr>
<?php
echo "<div class='functions'><a href='newpost.php'>Add New Post</a></div>";
echo "<div class='clear'></div>";
//loop though the results
while($f1 = mysqli_fetch_array($data)){
    echo "<div class='title'><a href='post.php?urltitle=".$f1['urltitle']."'>".$f1['title']."</a></div>"; 
	echo "<div>".substr($f1['body'],0,300)."</div>";
	echo "<div>Last worked on by: ".$f1['author']."</div>";
    echo "<div class='functions'><a href='posts.php?id=".$f1['id']."'>DELETE</a>"; 
    echo " - <a href='update.php?id=".$f1['id']."'>UPDATE</a></div>";
	echo "<div class='clear'></div>";
}
?>
</body>
</html>

