<?php

include 'includes/head.php';
include 'includes/nav.php';

if(isset($_GET['painting'])){
  $painting = $_GET['painting'];
  switch ($painting){
    case "congo":
      echo <<<ETO
      <div class="searchdisplay">
      <p>TINTIN IN THE CONGO</p>
      <p>Tintin in the Congo is the sequel to Tintin in the Land of the Soviets and the second Tintin book in the Tintin. The book is 62 pages long, and was released in 1931.</p>
      <image src="img/1.jpg" alt="Congo">
      </div>
ETO;
       break;
    case "moon":
    echo <<<ETO
      <div class="searchdisplay">
      <p>EXPLORERS ON THE MOON</p>
      <p>Explorers on the Moon, published in 1954, is the seventeenth of The Adventures of Tintin.</p>
      <img src="img/4.jpg" alt="moon">
      </div>
ETO;
       break;
    case "ball":
    echo <<<ETO
      <div class="searchdisplay">
      <p>THE 7 CRYSTAL BALLS</p>
      <p>The Seven Crystal Balls is the thirteenth adventure of Tintin, written and illustrated by Hergé. It was first published in 1948.</p>
      <img src="img/2.jpg" alt="balls">
      </div>
ETO;
       break;
    default:
    echo <<<ETO
      <div class="searchNone">
      <div class="searchNoneinside">
      Sorry,There is no infomation of TINTIN IN AUSTRALIA by now
      </div>
      <a href="search_form.php">return to search</a>
      </div>
ETO;
  }
}else{
  echo 'Unauthorised access';
}

include 'includes/footer.php';
?>
