<?php
session_start();
if (!isset($_SESSION["userSession"])){
	echo "No access, you need to <a href='index.php'>log in.</a>";
	exit();
}
if(isset($_POST['submit-form'])) {
$uploaddir = '../images/uploads/branding/';
$uploadfile = $uploaddir . "fullscreenbg.jpg";

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
	$current = "html {   background: url(../images/uploads/branding/fullscreenbg.jpg) no-repeat center center fixed; 
							-webkit-background-size: cover;
							-moz-background-size: cover;
							-o-background-size: cover;
							 background-size: cover;";
		$file = '../config/cmsgenerated.css';
	  // Open the file to get existing content
	  // Write the contents to the file
	  file_put_contents($file, $current);
	  echo "<br>Writing to file...";
				  echo "<br>Setup step 2 complete.";
	 			 echo "<br> Go to <a href='setup3.php'>step 3</a>";
				 exit();
} else {
    echo "Possible file upload attack!\n";
}


}
?>
<html>
<head>
<title>Website Setup</title>
<link rel="stylesheet" type="text/css" href="../styles/styles.css"/>
</head>
<body>
<?php readfile("menu.html");  ?>
<h3>Website Setup Step 2</h3>
<h4>Website background image</h4>
<form enctype="multipart/form-data" action="" method="POST">
    <!-- MAX_FILE_SIZE must precede the file input field -->
        <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
    <!-- Name of input element determines name in $_FILES array -->
    Choose image: <input name="userfile" type="file" />
    <input type="submit" value="Send File" name="submit-form"/>
</form>
</body>
</html>