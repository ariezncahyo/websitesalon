<?php
session_start();
if (!isset($_SESSION["userSession"])){
	echo "No access, you need to <a href='index.php'>log in.</a>";
	exit();
}
//for setting up the config files of the website
$success=false;
//initialize php variables used in the form
$bgcolor = "";
$error = "";

//check to see that the form has been submitted
if(isset($_POST['submit-form'])) {
	//retrieve the $_POST variables

	
	$bgcolor = $_POST['bgcolor'];
	
	
			//trim the whitespace
			$bgcolor = "#".trim($bgcolor);
			//validate that the form was filled out correctly
			$success = true;
			$hexlen = strlen($bgcolor);
			if($hexlen < 3 OR $hexlen > 7 )
			{
				$error .= "Value for background color is incorrect.\n";
				$success = false;
			}else{
				$current = "body {     background-color: {$bgcolor}; }";
				$file = '../config/cmsgenerated.css';
			  // Open the file to get existing content
			  // Write the contents to the file
			  file_put_contents($file, $current);
				 echo "<br>Writing to file...";
				  echo "<br>Step 2 complete.";
	 			 echo "<br> Go to <a href='setup3.php'>step 3</a>";
	 			 exit();
			}
		}
		
	
	 


//If the form wasn't submitted, or didn't validate
//then we show the form again
?>

<html>
<head>
<title>Website Setup</title>
<link rel="stylesheet" type="text/css" href="../styles/styles.css"/>
</head>
<body>
<?php readfile("menu.html");  ?>
<?php echo ($error != "") ? $error : ""; ?>
<form action="" method="post" enctype="multipart/form-data">
<h3>Website Setup Step 2</h3>
<h4>Website background color</h4>
Background color: <input type="text" value="" name="bgcolor" /><br/>
<input type="submit" value="Save" name="submit-form" />
</form>
</body>
</html>




