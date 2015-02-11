<?php
session_start();
if (!isset($_SESSION["userSession"])){
	echo "No access, you need to <a href='index.php'>log in.</a>";
	exit();
}
require_once ("../config/footer.php");
//for setting up the config files of the website
$success=false;
//initialize php variables used in the form

$error = "";

//check to see that the form has been submitted
if(isset($_POST['submit-form'])) {
	//retrieve the $_POST variables
	//company details
	$cname = trim($_POST['cname']);
	$address = trim($_POST['address']);
	$zipcode= trim($_POST['zipcode']);
	$place =trim($_POST['place']);
	$tel = trim($_POST['tel']);
	$email = trim($_POST['email']);
	$www = trim($_POST['www']);
	if($cname <>"" AND $address <>"" AND $zipcode<>"" and $place <>"" and $tel<>"" AND $email<>"" AND $www<>""){
		//go write the file
		$success = true;
		$footertext = "<?php ";
		$footertext .= "\$year = '&copy; {$cname} '.date('Y');";
		$footertext .= "\$company = '{$cname}' ;";
		$footertext .= "\$streetandnumber = '{$address}' ;";
		$footertext .= "\$zipcode = '{$zipcode}' ;";
		$footertext .= "\$place = '{$place}';";
		$footertext .= "\$tel = '{$tel}';";
		$footertext .= "\$email = '{$email}';";
		$footertext .= "\$www = '{$www}';";
		$footertext .= "  ?>";
	}else{
		$error .= "Some details are missing.\n\r";
	}
	
	
	
		
	if($success){
	  //go write the config files
	  // Write the contents to the file
	  $file = '../config/footer.php';
	  file_put_contents($file, $footertext);
	  echo "<br>Writing to file...";
	  echo "<br>Setup step 1 complete.";
	  echo "<br> Go to <a href='setup2.php'>step 2</a>";
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
<h3>Website Setup Step 1</h3>
<h4>Enter Company Details</h4>
<div>Company Name</div> <input type="text" value="<?php echo $company; ?>" name="cname" /><br/>
<div>Address</div> <input type="text" value="<?php echo $streetandnumber; ?>" name="address" /><br/>
<div>Postal Code</div> <input type="text" value="<?php echo $zipcode; ?>" name="zipcode" /><br/>
<div>Place</div> <input type="text" value="<?php echo $place; ?>" name="place" /><br/>
<div>Telephone</div> <input type="text" value="<?php echo $tel; ?>" name="tel" /><br/>
<div>Email</div> <input type="text" value="<?php echo $email; ?>" name="email" /><br/>
<div>WWW</div> <input type="text" value="<?php echo $www; ?>" name="www" /><br/>
<input type="submit" value="Save" name="submit-form" />
</form>
</body>
</html>




