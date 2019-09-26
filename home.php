<?php
include 'includes/head.php';
include 'includes/nav.php';
$arr = array(
'search_display.php?painting=moon'=>'img/4.jpg',
'search_display.php?painting=ball'=>'img/2.jpg',
'search_display.php?painting=congo'=>'img/1.jpg'
);

echo '<main class="layout">';
foreach($arr as $k=>$v){
  echo <<<EOT
    <section class="zoom">
       <a href="$k">
        <img src="$v" alt="tintin">
       </a>
    </section>

EOT;
};
echo '</main>';
include 'includes/footer.php';
?>
