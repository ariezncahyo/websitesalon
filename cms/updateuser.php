<?php
session_start();
if (!isset($_SESSION["userSession"])){
	echo "No access, you need to <a href='index.php'>log in.</a>";
	exit();
}
include_once ("../includes/init.php");
include_once("../classes/DB.php");

$conn = new DB();		
//get the values from the table

$data = $conn->getone("users", "id", $_GET['id']);
$f1 = mysqli_fetch_array($data);

$username = $f1['username'];

//check to see that the form has been submitted
if(isset($_POST['submit-form'])) {
	//retrieve the $_POST variables
	$password = $_POST['password'];
	//validate that the form was filled out correctly
	if (strlen($password) < 8) {
			echo  "Password must be have a minimum of 8 characters<br/> \n\r";
		}else{
			$password = md5($password).$privateKey; //encrypt the password for storage + add the privatekey
		$updatedata = $conn->update("users", "password='".$password."', modified='".date('Y-m-d H:i:s')."'", $_POST['id']);
		//redirect them to main page
		header("Location: users.php");	
		}
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../styles/styles.css"/>
<title>Update User</title>
</head>
<body>
<?php 
readfile("menu.html"); 
?>
<h3>Update User</h3>
<form action="updateuser.php?id=<?php echo $_GET['id']; ?>" method="post">
<h4><?php echo $username; ?></h4>
<div>New Password</div><input name="password" type="text" value="" size="50" maxlength="200" />

<input type="hidden" name="id" value="<?php echo $_GET['id'];  ?>">

<div class="clear"></div>
<input type="submit" value="Update" name="submit-form" />
</form>
</body>
</html>