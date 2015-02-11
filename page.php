<?php
include_once("classes/DB.php");
require("config/footer.php");
require("config/socialmediabuttons.php");

$conn = new DB();
$data = $conn->getone("pages", "urltitle", "'".$_GET["title"]."'");
$nav = $conn->getall("pages", "ASC");

?>
<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
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
    <div id="postmain">
    	<?php
			$f1 = mysqli_fetch_array($data);
			$image = substr($f1['image'], 8,30);
			echo "<div class='somemargins'><img src='images/uploads/posts/700x325_".$image."'></div>";
			echo "<div class='posttitle'>".$f1['title']."</div>";
			echo "<div class='detailpost'>".$f1['body']."</div>";
			echo "<div class='date'>Posted on: ".substr($f1['created'],0,10)."</div>";
			?>
    </div>
    <div id="sidebar">
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
