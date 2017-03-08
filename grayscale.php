<?php
  $img = imagecreatefromjpeg("card.jpg");
  imagefilter($img, IMG_FILTER_GRAYSCALE);
  imagejpeg($img, "grayscale.jpg");
 ?>
