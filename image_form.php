<?php

include 'includes/head.php';
include 'includes/nav.php';


echo <<<ETO
<main>
<div class="imageform">
<form action="image_display.php" method="post" enctype="multipart/form-data">
<label>Pls upload the image: </label><br>
<label>(Max size for uploading is 100KB)</label>
<br><br>
<input type="file" name="images">
<br><br>
<input type="submit" value="UPLOAD">
</form>
</div>
</main>

ETO;

include 'includes/footer.php';
 ?>
