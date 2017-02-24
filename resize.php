<?php

$img = $_FILES['file']['name'];
$resized_img = "resized.jpg";
$dst_image = imagecreatetruecolor(50,50);
$src_image = imagecreatefromjpeg("card.jpg");
$photoX = imagesx($src_image);
$photoY = imagesy($src_image);
imagecopyresampled($dst_image, $src_image,
                    0,0,0,0,
                    50, 50, photoX, photoY
                  );
imagejpeg($dst_image, $resized_img);
 ?>
