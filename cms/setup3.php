<?php
session_start();
if (!isset($_SESSION["userSession"])){
	echo "No access, you need to <a href='index.php'>log in.</a>";
	exit();
}
if(isset($_POST['submit-form'])) {
$uploaddir = '../images/uploads/branding/';
$uploadfile = $uploaddir . "companylogo.png";

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
	
	  echo "<br>Writing to file...";
				  echo "<br>Setup step 3 complete.";
	 			 echo "<br> Go to <a href='setup4.php'>step 4</a>";
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
<h3>Website Setup Step 3</h3>
<h4>Website company logo</h4>
<form enctype="multipart/form-data" action="" method="POST">
    <!-- MAX_FILE_SIZE must precede the file input field -->
    <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
    <!-- Name of input element determines name in $_FILES array -->
    Choose image: <input name="userfile" type="file" />
    <input type="submit" value="Send File" name="submit-form"/>
</form>
</body>
</html>