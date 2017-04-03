<?php
  // posted image source
  $image = $_POST['image'];
  $grayscale_img = "images/grayscale.jpg";

  $img = imagecreatefromjpeg($image);
  imagefilter($img, IMG_FILTER_GRAYSCALE);
  imagejpeg($img, $grayscale_img);
  // time() for refreshing the page after completion
  echo $grayscale_img."?".time();
  exit;
 ?>
