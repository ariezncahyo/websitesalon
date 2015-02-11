<?php
session_start();
if (!isset($_SESSION["userSession"])){
	echo "No access, you need to <a href='index.php'>log in.</a>";
	exit();
}

?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../styles/styles.css"/>
</head>
<body>
<?php
readfile("menu.html");
echo "<p>Upload <a href='imgupload.php'>new</a> image</p>";
//go read the image files in this dir
$files = array_slice(scandir('../images/uploads/posts'), 2);

foreach ($files as &$value) {
	//only display those with a certain dimension
	$name = substr($value, 0,3);
	if ($name === "150"){
		echo "<div style='float:left;margin:5px'><img src = '../images/uploads/posts/".$value."'>";
		echo "<br><a href='delete.php?image=".$value."'>delete</a></div>";
	}
}
?>
</body>
</html>
