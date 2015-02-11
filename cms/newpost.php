<?php
session_start();
require_once ("../includes/init.php");
//include_once("../classes/DB.php");

//initialize php variables used in the form
$title = "";
$body = "";
$error = "";

//check to see that the form has been submitted
if(isset($_POST['submit-form'])) {

	//retrieve the $_POST variables
	$title = $_POST['title'];
	$body = $_POST['body'];
	$author= $_SESSION["userSession"];
	$created = date('Y-m-d H:i:s');
	$image = $_POST['selimage'];
	
	//trim the whitespace
	$title = trim($title);
	$body = trim($body);
	//replace single quote with double quotes
	$title = str_replace(chr(39), chr(34), $title);
	$body = str_replace(chr(39), chr(34), $body);
	$titleforurl = str_replace(chr(34), chr(45), $title);
	$urltitle = str_replace(chr(32), chr(45), $titleforurl); //replace spaces with dashes
	
	//validate that the form was filled out correctly
	$success = true;
	if($title == "" OR $body == "")
	{
		$error .= "Please give this new post a title and body.";
		$success = false;
	}
	if($success){
		$conn = new DB();
		$newdata = $conn->insert("posts", "title, urltitle, body, image, created, author",
		 "'{$title}', '{$urltitle}', '{$body}' ,'{$image}', '{$created}', '{$author}'");
		
		//redirect them to posts page
		header("Location: posts.php");
	}

}

//If the form wasn't submitted, or didn't validate
//then we show the form again
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="../styles/styles.css"/>
<title>Add New Post</title>
<script src="../ckeditor/ckeditor.js"></script>
</head>
<body>
<?php 
readfile("menu.html");
echo ($error != "") ? $error : ""; ?>
<h3>Add New Post</h3>
<form action="newpost.php" method="post">

Title<br> <input type="text" value="<?php echo $title; ?>" name="title"  size="50" maxlength="200"/><br/>
Post<br>
<textarea cols="55" rows="15" name="body" id="body"><?php echo $body; ?></textarea><br/><br/>
<script>
    CKEDITOR.replace( 'body' );
</script>
Select an image:<br>
<?php
$files = array_slice(scandir('../images/uploads/posts'), 2);

foreach ($files as &$value) {
	//only display those with a certain dimension
	$name = substr($value, 0,3);
	if ($name === "150"){
		echo "<div style='float:left;margin:5px'><img src = '../images/uploads/posts/".$value."' width=75 height=65>";
		echo "<input name='selimage' type='radio' value='".$value."'></div>";
	}
}
?>
<div class="clear"></div>
<input type="submit" value="Save" name="submit-form" />

</form>
</body>
</html>