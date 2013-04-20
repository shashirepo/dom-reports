<?php
$u=$_GET['id'];
$img=$u.".jpg"; 
/*$target = "images/"; */
//$target = $target . basename( $_FILES['photo']['name']);
$target = "images/" . $img;   
$pic=($_FILES['photo']['name']);
if(move_uploaded_file($_FILES['photo']['tmp_name'], $target))
 { 
	echo "The file ". basename( $_FILES['photo']['name']). " has been uploaded, and your information has been added to the directory"; 
header("location:profile.php?id=$u");
} 
else 
{ 
	echo "Sorry, there was a problem uploading your file.";
} 
?>