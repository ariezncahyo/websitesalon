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

$data = $conn->getone("posts", "id", $_GET['id']);
$f1 = mysqli_fetch_array($data);

$title = $f1['title'];
$body = $f1['body'];

$title = str_replace(chr(45), chr(39), $title);
$body = str_replace(chr(34), chr(39), $body);

$error = "";

//check to see that the form has been submitted
if(isset($_POST['submit-form'])) {

	//retrieve the $_POST variables
	$title = $_POST['title'];
	$body = $_POST['body'];
	
	//trim the whitespace
	$title = trim($title);
	$body = trim($body);
	//replace single quote with double quotes
	$title = str_replace(chr(39), chr(45), $title);
	$titleforurl = str_replace(chr(34), chr(45), $title);
	$urltitle = str_replace(chr(32), chr(45), $titleforurl); //replace spaces with dashes
	
	//validate that the form was filled out correctly
	$success = true;
	if($title == "" OR $body == "")
	{
		$error .= "Please give this post a title and body.";
		$success = false;
	}
	if($success){
		$updatedata = $conn->update("posts", "title='".$title."', urltitle='".$urltitle."', body='".$body."', image='".$_POST['selimage']."', modified='".date('Y-m-d H:i:s')."', author='".$_SESSION["userSession"]."'", $_POST['id']);
		//redirect them to main page
		header("Location: posts.php");
	}

}

//If the form wasn't submitted, or didn't validate
//then we show the form again
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="../styles/styles.css"/>
<title>Update Post</title>
<script src="../ckeditor/ckeditor.js"></script>
</head>
<body>
<?php
readfile("menu.html");
echo ($error != "") ? $error : ""; ?>
<h3>Update Post</h3>
<form action="update.php?id=<?php echo $_GET['id']; ?>" method="post">
<div>Title</div> <input name="title" type="text" value="<?php echo $title; ?>" size="50" maxlength="200" /><br/>
<div>Post:</div>
<textarea cols="55" rows="5" name="body" id="body"><?php echo $body; ?></textarea><br/>
<script>
    CKEDITOR.replace( 'body' );
</script>

<input type="hidden" name="id" value="<?php echo $_GET['id'];  ?>">
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
<input type="submit" value="Update" name="submit-form" />
</form>
</body>
</html>