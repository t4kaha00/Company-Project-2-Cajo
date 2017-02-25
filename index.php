<!DOCTYPE html>
<html>
<head>
  <style>
  .image-full-div {
    width: 40%;
    background: red;
  }
  .image-full-div img {
    width: 100%;
    height: 100%;
  }
  #crop_tool {
    background: rgba(255, 255, 255, 0.5);
    border: 1px dashed black;
    position: absolute;
    /*visibility: hidden;;*/
  }
  /*#img_name {
    width: 100%;
  }*/
</style>
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/index.js"></script>
</head>
<body>
<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<div class="image-full-div" >
  <img id="img_name" src="card.jpg" name="img_name" />
  <img id="img_name1" name="img_name" />
  <div id="crop_tool"></div>
</div>
<input type="file" name="file" accept="image/*" onchange="previewImage(event)"/>
<br><br>
<button id="crop_btn">Crop</button>
<br><br>
<select id="option_resize">
  <<option value="200">200 X 200</option>
  <<option value="300">300 X 300</option>
  <<option value="400">400 X 400</option>
</select>
<button id="button_resize">Resize</button>
<br><br>
<input type="button" value="Convert to B&W" id="button_bw"/>
<input type="button" value="Preview in 3D" id="button_3d"/>
</body>
