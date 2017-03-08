<?php
//
// $res = $_POST['res'];
// $resized_img = "resized.jpg";
//
// // width and height of destination image and it is
// // going to be a square
// $dst_imagex = $res;
// $dst_imagey = $res;
// $dst_image =  imagecreatetruecolor($dst_imagex, $dst_imagey);
//
// $src_image = imagecreatefromjpeg("card.jpg");
// $src_image_size = getimagesize($src_image);
// $src_imagex = imagesx($src_image);
// $src_imagey = imagesy($src_image);
//
// imagecopyresized($dst_image, $src_image,
//                     0, 0, 0, 0,
//                     $dst_imagex, $dst_imagey, $src_imagex, $src_imagey
//                   );
// imagejpeg($dst_image, $resized_img, 100);

function imageresize($src, $dest, $size=75){
  list($width, $height) = getimagesize($src);

  if ($width > $height) {
    exec("convert ".$src." -resize x".$size." -quality 100 ".$dest);
  } else {
    exec("convert ".$src." -resize ".$size." -quality 100 ".$dest);
  }

  exec("convert ".$dest." -gravity Center -crop ".$size."x".$size."+0+0 ".$dest);
}
 ?>

 <?php

// Set paraters
$imageurl = 'http://blog.hillaryfox.com/wp-content/uploads/2012/08/ArchesPano.jpg'; // Original Image
$imagename = 'image.jpg'; // final image filename
$thumbdir = 'thumbs/'; // where to save the thumbnails

// Checks if there is a $thumbdir if not it creates it
if(!is_dir($thumbdir)){
        mkdir($thumbdir);
        }

// Activating the function
imageresize($imageurl,$thumbdir.$imagename,300);
// Print result
   print "
   <p>Here is your squared image.</p>
   <p><img src='$thumbdir$imagename' border='0'></p>
   ";
?>
