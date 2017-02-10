<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<!-- <script type='text/javascript' >
function previewImage(event) {
  var reader = new FileReader();
  reader.onload = function() {
    var output = document.getElementById('output_image');
    output.src = reader.result;
  }

  reader.readAsDataURL(event.target.files[0]);
}

// function crop() {
//   var img_full_div_top = $[".image-full-div"].position().top;
//   var img_full_div_left = $[".image-fill-div"].position().left;
//   var crop_tool_top = parseInt($("#crop-tool").position().top);
//   var crop_tool_left = parseInt($("#crop-tool").position().left);
//
//   $("#crop-tool").css("top", img_full_div_top + 50).
//                   css("left",img_full_div_left + );
//   $("crop-tool").resizable({containment: "parent"});
//   $("crop-tool").draggable({containment: "parent"});
//
//   img_full_div_top.toFixed();
//   img_full_div_left.toFixed();
//   crop_tool_left.toFixed();
//   crop_tool_top.toFixed();
//
//
// }
</script> -->
<style>
.image-full-div {
  width: 70%;
}
.image-full-div img {
  width: 100%;
  height: 100%;
}
#crop_tool {
  background: rgba(255, 255, 255, 0.5);
  border: 1px dashed black;
  width: 100px;
  height: 100px;
  position: absolute;
  /*visibility: hidden;;*/
}
#crop_btn {
  margin-top: 20px;
  padding: 10px;
  width: 100%;
}
</style>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.Jcrop.js"></script>

<script type="text/javascript" src="js/index.js"></script>
<script type="text/javascript">
$( function() {
  // var img_full_div_top = $(".image-full-div").position().top;
  // var img_full_div_left = $(".image-full-div").position().left;
  // $("#crop_tool").css("top", img_full_div_top + 50).css("left", img_full_div_left + 50);
  //
  // $( "#crop_tool" ).resizable({containment: "parent"});
  // $( "#crop_tool" ).draggable({containment: "parent"});

  $("#crop_btn").click( function(){
  $("#img_name").Jcrop({
    onSelect: updateCoords
  });

  function updateCoords(c) {
    $('#x').val(c.x);
    $('#y').val(c.y);
    $('#w').val(c.w);
    $('#h').val(c.h);
  };
});
$("#post").click( function(){

    '<?php
    $targ_w = $targ_h = 150;
    $jpeg_quality = 90;

    $src = 'card.jpg'
    $img_r = imagecreatefromjpeg($src);
    $dst_r = ImageCreateTrueColor( $targ_w, $targ_h );

    imagecopyresampled($dst_r,$img_r,0,0,c.x,c.y,
    $targ_w,$targ_h,c.w,c.h);
    echo 'alert("posted")';

    header('Content-type: image/jpeg');
    $final_img = imagejpeg($dst_r,null,$jpeg_quality);
    ?>'

    $("#img_name").attr("src", "<?php echo $final_img; ?>");

});
$("#post").click();

  // $("#crop_btn").click(
  //   function(){
  //
  //     // $("#crop_tool").css("visibility", "visible");
  //
  //     var img_full_div_top = $(".image-full-div").position().top;
  //     var img_full_div_left = $(".image-full-div").position().left;
  //     var crop_tool_top = parseInt($("#crop_tool").position().top);
  //     var crop_tool_left = parseInt($("#crop_tool").position().left);
  //
  //     img_full_div_top.toFixed();
  //     img_full_div_left.toFixed();
  //     crop_tool_top.toFixed();
  //     crop_tool_left.toFixed();
  //
  //     var crop_start_x = crop_tool_left - img_full_div_left;
  //     var crop_start_y = crop_tool_top - img_full_div_top;
  //
  //     var crop_tool_width = parseInt($("#crop_tool").width());
  //     var crop_tool_height = parseInt($("#crop_tool").height());
  //     crop_tool_width.toFixed();
  //     crop_tool_height.toFixed();
  //
  //     $dst_image = imagecreatetruecolor($crop_tool_width, $crop_tool_height);
  //     $src_image = imagecreatefromjpeg("card.jpg");
  //
  //     imagecopyresampled($dst_image, $src_image,
  //                          0, 0,
  //                         $crop_start_x, $crop_start_y,
  //                         $crop_tool_width, $crop_tool_height,
  //                         $crop_start_x + $crop_tool_width, $crop_start_y + $crop_tool_height);
  //
  //     imagejpeg($dst_image, "images/cropped.jpg",90);
  //     alert("saved");
  //     // $("#img_name").attr("src", $dst_image);
  //
  //   }
  // );
  // $("#crop_btn").click();
}
);
</script>
</head>
<body>
   <!-- <div class="image-full-div"> -->
     <!-- <input type="file" accept="image/*" onchange="previewImage(event)">
     <br><br> -->
     <!-- <img src="card.jpg" id="img_name" name="img_name" />
     <div id="crop_tool"></div>
   </div>
   <br><br>
   <button id="crop_btn">Crop</button>
   <input type="button" value="Resize" id="button_resize"/>
   <input type="button" value="Convert to B&W" id="button_bw"/>
   <input type="button" value="Preview in 3D" id="button_3d"/> -->

   <img src="card.jpg" id="img_name" />
   <button id="crop_btn">Crop</button>
   <button id="post">Post</button>
		<!-- <form action="index.php" method="post" onsubmit="return checkCoords();">
			<input type="hidden" id="x" name="x" />
			<input type="hidden" id="y" name="y" />
			<input type="hidden" id="w" name="w" />
			<input type="hidden" id="h" name="h" />
			<input type="submit" value="Crop Image" class="btn btn-large btn-inverse" />
		</form> -->
</body>
</html>
