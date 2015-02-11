<?php
session_start();
if (!isset($_SESSION["userSession"])){
	echo "No access, you need to <a href='index.php'>log in.</a>";
	exit();
}
require_once ("../config/socialmediabuttons.php");
if(isset($_POST['submit-form'])) {
	if(isset($_POST['twitter'])){
		$urltwitter = trim($_POST['urltwitter']);
	}
	if(isset($_POST['youtube'])){
		$urlyoutube = trim($_POST['urlyoutube']);
	}
	if(isset($_POST['linkedin'])){
		$urllinkedin = trim($_POST['urllinkedin']);
	}
	if(isset($_POST['facebook'])){
		$urlfacebook = trim($_POST['urlfacebook']);
	}
	if(isset($_POST['instagram'])){
		$urlinstagram = trim($_POST['urlinstagram']);
	}
	
	//write to file
	$socmedbuttons = "<?php ";
	$socmedbuttons .= "\$urltwitter = '{$urltwitter}' ;";
	$socmedbuttons .= "\$urlfacebook = '{$urlfacebook}' ;";
	$socmedbuttons .= "\$urlyoutube = '{$urlyoutube}' ;";
	$socmedbuttons .= "\$urllinkedin = '{$urllinkedin}' ;";
	$socmedbuttons .= "\$urlinstagram = '{$urlinstagram}' ;";
	$socmedbuttons .= "  ?>";
	$file = '../config/socialmediabuttons.php';
	file_put_contents($file, $socmedbuttons);
	echo "<br>Writing to file...";
	echo "<br>Setup complete.";
	echo "<br> Go to <a href='main.php'>CMS</a>";
	exit();




}
?>
<html>
<head>
<title>Website Setup</title>
<link rel="stylesheet" type="text/css" href="../styles/styles.css"/>
</head>
<body>
<?php readfile("menu.html");  ?>
<h3>Website Setup Step 4</h3>
<h4>Social Media Buttons</h4>
Select which social media button to display on your website.
<form enctype="multipart/form-data" action="" method="POST">
  <img src="../images/twitter.jpg" class="socmedimage"><input name="twitter" type="checkbox" value=""><input name="urltwitter" type="text" value="<?php echo $urltwitter; ?>"><br/>
  <img src="../images/youtube.jpg" class="socmedimage"><input name="youtube" type="checkbox" value=""><input name="urlyoutube" type="text" value="<?php echo $urlyoutube; ?>">    <br/>          
  <img src="../images/linkedin.jpg" class="socmedimage"><input name="linkedin" type="checkbox" value=""><input name="urllinkedin" type="text" value="<?php echo $urllinkedin; ?>">    <br/>     
  <img src="../images/facebook.jpg" class="socmedimage"><input name="facebook" type="checkbox" value=""><input name="urlfacebook" type="text" value="<?php echo $urlfacebook; ?>">   <br/>       
  <img src="../images/instagram.jpg" class="socmedimage"><input name="instagram" type="checkbox" value=""><input name="urlinstagram" type="text" value="<?php echo $urlinstagram; ?>"> <br/>         
    <input type="submit" value="Save" name="submit-form"/>
</form>
</body>
</html>