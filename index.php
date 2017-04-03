<!DOCTYPE html>
<html>
<head>
  <style>
  /* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 99; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    text-align: center;
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.7); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
    display: inline-block;
    /*background: #ffffff;*/
    color: #666666;
    margin: 30px auto; /* 5% from the top and centered */
    padding: 15px;
    border: 1px solid #888;
    width: auto; /* Could be more or less, depending on screen size */
    height: auto;
    text-align: center;
    position: relative;

    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    -o-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}
.close:hover,
.close:focus {
    color: black;
    font-size: 35px;
    text-decoration: none;
    cursor: pointer;
}

  #container {
    width: 30%;
  }
  #crop_btn_modal{
    background: #cccccc;
  	color: #333333;
  	border: 1px solid #999999;
  	border-radius: 10px;
  	float: inherit;
  	line-height: 30px;
  	font-size: 14px;
  	font-weight: bold;
  	font-family: arial;
  	display: block;
  	padding: 5px;
  	margin: 10px 0 0 0;
  	cursor: pointer;
  }

  #crop_btn_modal:hover {
    background: #eaeaea;
  }
</style>
<link rel="stylesheet" href="css/jquery.Jcrop.min.css" type="text/css" />
<script src="js/jquery.min.js"></script>
<script src="js/jquery.Jcrop.js"></script>
<script src="js/jquery.Jcrop.min.js"></script>
<script src="js/three.min.js"></script>
<script src="js/three.WindowResize.js"></script>
<script src="js/OrbitControls.js"></script>
<script src="js/TrackballControls.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
</head>
<body>
  <!-- The Popup Modal -->
  <div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content" id="modal-content">
      <!-- closing button -->
      <span class="close">&times;</span>
      <br><br>
      <!-- image inside the popup to be cropped -->
      <img id="img_modal"/>
      <input type="button" value="Crop Image" id="crop_btn_modal" />

      <!-- hidden values to send to crop.php -->
      <form>
          <input type="hidden" id="x" name="x" />
          <input type="hidden" id="y" name="y" />
          <input type="hidden" id="w" name="w" />
          <input type="hidden" id="h" name="h" />
          <input type="hidden" id="photo_url" name="photo_url" />
      </form>
    </div>
  </div>

  <!-- initial file upload -->
  <input id="img_input" type="file" name="file" accept="image/*" onchange="previewImage(event)"/>
  <br><br>
  <!-- button to get the popup -->
  <button id="crop_btn">Crop</button>
  <br><br>
  <!-- given options for resizing -->
  <select id="option_resize">
    <option value="200">200 X 200</option>
    <option value="300">300 X 300</option>
    <option value="400">400 X 400</option>
  </select>
  <!-- button to resize -->
  <button id="button_resize">Resize</button>
  <br><br>
  <!-- button for grayscale (black & white) -->
  <button id="button_grayscale">Convert to B&W</button>
  <!-- finally for the 3D -->
  <input type="button" value="Preview in 3D" id="button_3d"/>
  <br><br>

  <!-- the main container for the image output -->
  <div id="img_container">
    <img id="img_name" src="images/insert_img.jpg" name="img_name" />
  </div>

  <!-- For 3D canvas view -->
  <div id="container"></div>
  </body>
