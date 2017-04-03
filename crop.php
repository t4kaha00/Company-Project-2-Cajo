<?php

  // Target siz
  $targ_w = $_POST['targ_w'];
  $targ_h = $_POST['targ_h'];

  $crop_start_x = $_POST['crop_start_x'];
  $crop_start_y = $_POST['crop_start_y'];
  $crop_tool_width = $_POST['crop_tool_width'];
  $crop_tool_height = $_POST['crop_tool_height'];
  $image = $_POST['image'];

  $dst_x = 0;
  $dst_y= 0;
  $src_x = $crop_start_x;
  $src_y = $crop_start_y;
  $dst_w = $crop_tool_width;
  $dst_h = $crop_tool_height;

  $cropped_img = "cropped.jpg";
  $src_image = imagecreatefromjpeg($image);
  $dst_image = imagecreatetruecolor( $targ_w, $targ_h );

  imagecopyresampled($dst_image, $src_image,
                      $dst_x, $dst_y,
                      $src_x, $src_y,
                      $targ_w,$targ_h,
                      $dst_w, $dst_h);

  imagejpeg($dst_image, $cropped_img);
  imagejpeg($dst_image, $image, 90);

  echo $image;
  // echo '<img src="'.$cropped_img.'?'.time().'">';
  exit;
  ?>
