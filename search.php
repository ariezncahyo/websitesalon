<?php
include_once("classes/DB.php");
require("config/footer.php");
require("config/socialmediabuttons.php");

$conn = new DB();
$nav = $conn->getall("pages", "ASC");
if(isset($_POST['submit-form'])) {
	$searchstring = $_POST['searchstring'];
	$data = $conn->search("posts", "body", $searchstring);
	$f1 = mysqli_fetch_array($data);
}
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
    <div id="postmain"><h3>Search Results</h3>
		<?php
        //check if the search got a result
		if($f1['urltitle'] <>""){
			//found 1 result
	  			 echo "<div class='posttitle'><a href='post.php?title=".$f1['urltitle']."'>".$f1['title']."</a></div>";
                echo "<div class='detailpost'>".substr($f1['body'],0,150)."</div>";
                echo "<div class='date'>Posted on: ".substr($f1['created'],0,10)."</div>";
			//found multiple results
            while ($f1 = mysqli_fetch_array($data)){ 
                echo "<div class='posttitle'><a href='post.php?title=".$f1['urltitle']."'>".$f1['title']."</a></div>";
                echo "<div class='detailpost'>".substr($f1['body'],0,150)."</div>";
                echo "<div class='date'>Posted on: ".substr($f1['created'],0,10)."</div>";
                echo "<hr>";
            }
		}else{
			echo "<div class='posttitle'>No results found. Please change your search term.</div>";
		}
			 
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
