<?php

$res = $_POST['res'];
$resized_img = "resized.jpg";

// width and height of destination image and it is
// going to be a square
$dst_imagex = $res;
$dst_imagey = $res;
$dst_image =  imagecreatetruecolor($dst_imagex,$dst_imagey);

$src_image = imagecreatefromjpeg("card.jpg");
$src_image_size = getimagesize($src_image);
$src_imagex = imagesx($src_image);
$src_imagey = imagesy($src_image);

imagecopyresampled($dst_image, $src_image,
                    0, 0, 0, 0,
                    $dst_imagex, $dst_imagey, $src_imagex, $src_imagey
                  );
imagejpeg($dst_image, $resized_img);
 ?>
