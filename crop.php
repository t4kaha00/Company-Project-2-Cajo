<?php

  $img_name = $_POST['img_name'];
  $crop_start_x = $_POST['crop_start_x'];
  $crop_start_y = $_POST['crop_start_y'];
  $crop_tool_width = $_POST['crop_tool_width'];
  $crop_tool_height = $_POST['crop_tool_height'];

  $dst_x = 0;
  $dst_y= 0;
  $src_x = $crop_start_x;
  $src_y = $crop_start_y;
  $dst_w = $crop_tool_width;
  $dst_h = $crop_tool_height;
  $src_w = $src_x + $dst_w;
  $src_h = $src_y + $dst_h;

  $dst_image = imagecreatetruecolor($dst_w,$dst_h);
  $src_image = imagecreatefromjpeg("images/img_name");
  imagecopyresampled($dst_image, $src_image,
                      $dst_x, $dst_y,
                      $src_x, $src_y,
                      $dst_w, $dst_h,
                      $src_w, $src_h);
  imagejpeg($dst_image, "images/cropped.jpg");
 ?>
