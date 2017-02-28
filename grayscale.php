<?php
  $img = imagecreatefrompng("test.png");
  imagefilter($img, IMG_FILTER_GRAYSCALE);
  imagepng($img, "grayscale.png ");
 ?>
