<?php
include 'includes/head.php';
include 'includes/nav.php';

$name = isset($_FILES['images']['name']) ? $_FILES['images']['name']:'';
$temp = isset($_FILES['images']['tmp_name']) ? $_FILES['images']['tmp_name']:'';
$type = isset( $_FILES['images']['type']) ?  $_FILES['images']['type']:'';
$size = isset($_FILES['images']['size']) ? $_FILES['images']['size']:'';
$error = isset($_FILES['images']['error']) ? $_FILES['images']['error']:'';

$dest = "upload/".$name;

$maxSize=100*1024;//150KB
if($size>$maxSize){
  echo '<div class="imagedisplay">';
  echo '<div class="imagedisplayinside">';
  echo 'The file you upload is too big';
  echo '</div>';
  echo '<a href="image_form.php">return to upload</a>';
  echo '</div>';
  exit;
}
if($error==4){
  echo '<div class="imagedisplay">';
  echo '<div class="imagedisplayinside">';
  echo 'Pls select your file';
  echo '</div>';
  echo '<a href="image_form.php">return to upload</a>';
  echo '</div>';
}else{
  move_uploaded_file($temp,$dest);
  echo '<div class="imagedisplay">';
  echo '<label>File name:</label>'.$name.'<br>';
  echo '<label>File size:</label>'.$size.'<br>';
  echo "<img src='$dest' alt='$name'>";
  echo '</div>';
}
include 'includes/footer.php';
 ?>
