<!DOCTYPE html>
<html>
<head>
<script type='text/javascript' >
function previewImage(event) {
  var reader = new FileReader();
  reader.onload = function() {
    var output = document.getElementById('output_image');
    output.src = reader.result;
  }

  reader.readAsDataURL(event.target.files[0]);
}
</script>
<style>
#wrapper {
  background-color: #009999;
  margin-left: 10%;
  margin-right: 10%;
}
#output_image
{
 max-width:300px;
}
</style>
</head>
<
<div id="wrapper">
 <input type="file" accept="image/*" onchange="previewImage(event)">
 <br><br>
 <img id="output_image" src="insert_img.jpg"/>
 <br><br>
 <input type="button" value="Crop" id="button_crop"/>
 <input type="button" value="Resize" id="button_resize"/>
 <input type="button" value="Convert to B&W" id="button_bw"/>
 <input type="button" value="Preview in 3D" id="button_3d"/>
</div>
</body>
</html>
