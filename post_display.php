<?php

include 'includes/head.php';
include 'includes/nav.php';
$arr = $_POST;
$name= $arr['painting_name'];
$story= $arr['painting_story'];

if(empty($name) || empty($story)){
  echo '<div class="displayform">';
  echo '<p class="p1">Invalid input,please input again!</p>';
  echo '<a href="post_form.php">return to post</a>';
  echo '</div>';

}else{
  echo '<div class="displayform">';
  echo '<p class="p1">Thank you for your posting!</p>';
  echo '<p >The name of your posting: </p>';
  echo '<p>'.$name.'</p>';
  echo '<p>The story of your posting: </p>';
  echo '<p>'.$story.'</p>';
  echo '</div>';
};

include 'includes/footer.php';
 ?>
