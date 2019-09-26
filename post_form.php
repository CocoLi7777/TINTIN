<?php

include 'includes/head.php';
include 'includes/nav.php';
echo <<<ETO
<main>
<div class="postform">
<form action="post_display.php" method="post">
<label>Welcome to post your painting of TINTIN!</label>
<br><br>
<label>The name of your painting</label>
<br>
<input type="text" name="painting_name">
<br><br>
<label>The Story after your painting</label>
<br>
<textarea rows="6" cols="30" name="painting_story">
</textarea>
<br><br>
<input type="submit" value="SUBMIT" class="submit_button">
</form>
</div>
</main>

ETO;

include 'includes/footer.php';
 ?>
