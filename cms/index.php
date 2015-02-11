<?php
session_start();

require_once ("../includes/init.php");

include_once("../classes/DB.php");
include_once("../classes/User.php");
include_once("../classes/Session.php");

$error="";
//check is user is already logged in
if (!isset($_SESSION["userSession"])){
	//please log in
	//initialize php variables used in the form
	$username = "";
	$password = "";
	$error = "";

		//check to see that the form has been submitted
		if(isset($_POST['submit-form'])) {
		
			//retrieve the $_POST variables
			$username = $_POST['username'];
			$password = $_POST['password'];
			$password = md5($password).$privateKey;
			
			//validate that the form was filled out correctly + check length of username and password
			$success = true;
			if($username == "" OR $password == "")
			{
				$error .= "Please enter username and password.<br/> \n\r";
				$success = false;
			}
			if($success){
				$conn = new User();
				//go check if user  exists in db
				$checkuser = $conn->getUser("users", 'username', "'".$username."' and password = '".$password."'");
				if ($checkuser == 1){
					//user and password checkes out, proceed
					//create a user session to prevent CSRF
					
					$_SESSION["userSession"]=$username;
					session_write_close();
					header("Location: main.php");
				}else{
					$error .= "Username and/or password incorrect.";
				}
			}
}
}
//If the form wasn't submitted, or didn't validate
//then we show the form again
?>

<html>
<link rel="stylesheet" type="text/css" href="../styles/styles.css"/>
<head>
<title>Website Salon CMS</title>
</head>
<body>

    <div style="float:left"><img src="../images/logo.png" /></div>
    <div class="clear"></div>
         <hr>
     <h2>Log In</h2>
     <?php 
echo ($error != "") ? $error : ""; 
?>
    <form action="index.php" method="post">
    <div>Username</div> <input type="text" value="" name="username" /><br/>
    <div>Password</div> <input type="password" value="" name="password" /><br/>
    <input type="submit" value="Submit" name="submit-form" />
    </form>
</body>
</html>
	
	
	


