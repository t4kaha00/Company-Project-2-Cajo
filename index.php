<!DOCTYPE html>
<html>
<head>
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
}
#crop-tool {
  background: rgba(255, 255, 255, 0.5);
  border: 1px dashed #fff;
  width: 100px;
  height: 100px;
  position: absolute;
}
</style>
</head>
<body>
<div id="wrapper">
  <!-- <?php
    // $img = $_GET['img'];
   ?> -->
   <div class="image-full-div">
     <!-- <input type="file" accept="image/*" onchange="previewImage(event)">
     <br><br> -->
     <img id="output_image" src="card.jpg" />
     <div id="crop-tool"></div>
   </div>
   <br><br>
   <input type="button" value="Crop" id="crop_btn" name="card.jpg"/>
   <input type="button" value="Resize" id="button_resize"/>
   <input type="button" value="Convert to B&W" id="button_bw"/>
   <input type="button" value="Preview in 3D" id="button_3d"/>
</div>
</body>
</html>
