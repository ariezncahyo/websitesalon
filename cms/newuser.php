<?php
include_once("../classes/DB.php");
include_once("../classes/User.php");
require_once ("../includes/init.php");

//initialize php variables used in the form
$username = "";
$password = "";
$password_again = "";
$email ="";
$error = "";

//check to see that the form has been submitted
if(isset($_POST['submit-form'])) {

	//retrieve the $_POST variables
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password_again = $_POST['password_again'];
	$email = $_POST['email'];
	
	//trim the whitespace
	$username = trim($username);
	$password = trim($password);
	$password_again = trim($password_again);
	$email = trim($email);
	
	
	//validate that the form was filled out correctly + check length of username and password
	$success = true;
	if (strlen($username) <8 OR strlen($password) < 8) {
			$error .=  "Username and password must be have a minimum of 8 characters<br/> \n\r";
			$success = false;
		}
	if($username == "" OR $password == "" OR $email == "")
	{
		$error .= "Please give this new user a username, password and email.<br/> \n\r";
		$success = false;
	}
	if($password != $password_again ){
		$error .= "Passwords do not match.<br/> \n\r";
		$success = false;
		}
	if($success){
		$conn = new User();
		//go check if user already exists in db
		$checkuser = $conn->getUser("users", 'username', "'".$username."'");

		if ($checkuser == 1){
			$error .= "This user is already registered";
		}else{
			$password = md5($password).$privateKey; //encrypt the password for storage + add the privatekey
			$conn2 = new DB();
			$newusers = $conn2->insert("users", "username, password, email", "'{$username}', '{$password}', '{$email}'");
		}
		//show a message that the new user is registered
		echo "New user registered. You can now log in.";
		exit();
	}

}

//If the form wasn't submitted, or didn't validate
//then we show the form again
?>

<html>
<head>
<title>Register New User</title>
</head>
<body>
<?php echo ($error != "") ? $error : ""; ?>
<form action="newuser.php" method="post">

Username: <input type="text" value="<?php echo $username; ?>" name="username" /><br/>
Password: <input type="password" value="" name="password" /><br/>
Password again: <input type="password" value="" name="password_again" /><br/>
Email: <input type="text" value="<?php echo $email; ?>" name="email" /><br/>
<input type="submit" value="Register" name="submit-form" />

</form>
</body>
</html>