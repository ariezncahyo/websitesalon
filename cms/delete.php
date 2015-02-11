<?php
$image = $_GET['image'];
$image = substr($image, 8,200);
unlink('../images/uploads/posts/150x130_'.$image);
unlink('../images/uploads/posts/285x220_'.$image);
unlink('../images/uploads/posts/700x325_'.$image);

header("Location: images.php");

?>