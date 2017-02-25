<?php

$res = $_POST['res'];
// $img = $_FILES['imag_name']['name'];
$resized_img = "resized.jpg";

$dst_imagex = 200;
$dst_imagey = 200;
$dst_image =  imagecreatetruecolor($dst_imagex,$dst_imagey);

$src_image = imagecreatefromjpeg("card.jpg");
$src_image_size = getimagesize($src_image);
$src_imagex = imagesx($src_image);
$src_imagey = imagesy($src_image);

imagecopyresampled($dst_image, $src_image,
                    0, 0, 0, 0,
                    $res, $res, $src_imagex, $src_imagey
                  );
imagejpeg($dst_image, $resized_img);
 ?>
