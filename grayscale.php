<?php
  $image = $_POST['image'];

  $img = imagecreatefromjpeg($image);
  imagefilter($img, IMG_FILTER_GRAYSCALE);
  imagejpeg($img, "grayscale.jpg");
 ?>
