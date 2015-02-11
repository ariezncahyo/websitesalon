<?php
include_once("classes/DB.php");
require("config/footer.php");
require("config/socialmediabuttons.php");

$conn = new DB();
$data = $conn->getall("posts", "DESC");
$nav = $conn->getall("pages", "ASC");
//process the mail form
if(isset($_POST['submit-form'])) {

	//retrieve the $_POST variables
	$fname = trim($_POST['fname']);
	$lname = trim($_POST['lname']);
	$femail = trim($_POST['email']);
	
	$to = $email;
	$subject = "Message from website form.";
	$message = $fname." ".$lname;
	$message .=" with the email address ".$femail." wants to be contacted.";
	$message .=" This message was created through the website";
	if ($fname == "" AND $lname == "" AND $femail == ""){
		echo "Please enter your first name, last name and email address.";
	}else{
		mail($to, $subject, $message);
	}
}
?>

<html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<!--<![endif]-->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $company; ?></title>

<link href="styles/boilerplate.css" rel="stylesheet" type="text/css">
<link href="styles/layout.css" rel="stylesheet" type="text/css">

<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="js/respond.min.js"></script>
<link rel="stylesheet" type="text/css" href="config/cmsgenerated.css">
</head>
<body>
<div class="gridContainer clearfix">
  <div id="logo"><a href="index.php"><img src="images/uploads/branding/companylogo.png"></a></div>
  <div id="menu"><div id="nav"><?php 
	  while ($f2 = mysqli_fetch_array($nav)){
				echo "<li><a href='page.php?title=".$f2['urltitle']."' class='pagelink'>";
				echo $f2['title']."</a></li>";
	  		}    ?>
   </div></div>
  <div id="page">
    <div id="main">
      <div id="featured">
      <?php //here comes the loop
	  		$s = 1;
	  		while ($f1 = mysqli_fetch_array($data)){
				$s++;
				$getimage = substr($f1['image'],8,30);
				$body = substr($f1['body'], 0, 220);
				echo "<a href='post.php?title=".$f1['urltitle']."'>";
				echo "<div class='main-feat'>
						<img src='images/uploads/posts/285x220_".$getimage."'><br />
						<div class='main-feat-post'>
						<span class='posttitle'>".$f1['title']."</span>".$body."</div>
						<div class='date'>Posted on: ".substr($f1['created'],0,10)."</div></div>";
				echo "</a>";
				 if($s>2){
      				  break;
   				 }
	  		}
      ?>
      </div>
      <div id="posts">
	  	<?php 
			//loop though the results
			$t=1;
			while($f1 = mysqli_fetch_array($data)){
				$t++;
				$body= substr($f1['body'], 0, 220);
				echo "<a href='post.php?title=".$f1['urltitle']."'>";
				echo "<div class='postimage'><img src='images/uploads/posts/".$f1['image']."'></div>
						<div class='post'><div class='posttitle'>".$f1['title']."
						<div class='date'>Posted on: ".substr($f1['created'],0,10)."</div>
						</div>
										

						<div class='postbody'>".$body."</div></div>";
				echo "</a>";
				echo "<div class='clear'></div>";
				if($t>5){
      				  break;
   				 }
			}
		  ?>
      </div>
    </div>
    <div id="sidebar">
    	<div id="searcharea"><form action="search.php" method="post"><input name="searchstring" type="text" class="searchfield" ><input  type="submit" value="Search" class="formbutton" name="submit-form"></form></div>
        <div id="form">
        <h2>Contact Us</h2>
        	<form action="index.php" method="post">
            	<div class="formlabel">First Name </div><div> <input name="fname" type="text" class="formfield"></div>
                <div class="formlabel">Last Name </div><div><input name="lname" type="text" class="formfield"></div>
                <div class="formlabel">Email </div><div><input name="email" type="text" class="formfield"></div>
                <div class="formlabel"><input name="submit" type="submit" value="Submit" name="submit-form" class="formbutton"></div>
      		</form>
        </div>
        <div class="clear"></div>
        <div class="socmedlabel"><h2>Connect With Us</h2></div>
        <div class="clear"></div>
        <div class="socmedbuttons">
			<?php if ($urltwitter <> ""){  ?>
                <a href="http://<?php echo $urltwitter  ; ?>" target="_new"><img src="images/twitter.jpg" class="socmedimage"></a>
            <?php	} 		?>
            <?php if ($urlyoutube <> ""){  ?>
                <a href="http://<?php echo $urlyoutube  ; ?>" target="_new"><img src="images/youtube.jpg" class="socmedimage"></a>
            <?php	} 		?>
            <?php if ($urllinkedin <> ""){  ?>
                <a href="http://<?php echo $urllinkedin  ; ?>" target="_new"><img src="images/linkedin.jpg" class="socmedimage"></a>
            <?php	} 		?>
            <?php if ($urlfacebook <> ""){  ?>
                <a href=http://"<?php echo $urlfacebook  ; ?>" target="_new"><img src="images/facebook.jpg" class="socmedimage"></a>
            <?php	} 		?>
            <?php if ($urlinstagram <> ""){  ?>
                <a href="http://<?php echo $urlinstagram  ; ?>" target="_new"><img src="images/instagram.jpg" class="socmedimage"></a>
            <?php	} 		?>
        </div>
    </div>
    <div class="clear"></div>
    <div id="footer">
    
    <div class="left"><?php echo $year; ?></div>
    <div class="left">
    	<li><span class="cname"><?php echo $company; ?></span></li>
        <li><?php echo $streetandnumber; ?></li>
        <li><?php echo $zipcode." ".$place; ?></li>
        <li>T. <?php echo $tel; ?></li>
        <li><?php echo $email; ?></li>
        <li><?php echo $www; ?></li>
    </div>
    
    </div>   
  </div>
</div>

</body>
</html>
