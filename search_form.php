<?php

include 'includes/head.php';
include 'includes/nav.php';
echo <<<ETO
<main>
<div class="searchform">
<form action="search_display.php" method="get">
<label>Pls search the painting: </label>
<br><br>
<select name="painting">
<option value="nothing">TINTIN IN AUSTRALIA</option>
<option value="congo">TINTIN IN THE CONGO</option>
<option value="moon">EXPLORERS ON THE MOON</option>
<option value="ball">THE 7 CRYSTAL BALLS</option>
</select>
<br><br>
<input type="submit" value="SEARCH">
</form>
</div>
</main>

ETO;

include 'includes/footer.php';
 ?>
