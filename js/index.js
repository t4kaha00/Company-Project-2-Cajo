$(document).ready(function (){
    var img_full_div_top = $(".image-full-div").position().top;
    var img_full_div_left = $(".image-full-div").position().left;
    var img_full_div_width = $(".image-full-div").width();
    var img_full_div_height = $(".image-full-div").height();

    $("#crop_tool").css("top", img_full_div_top + window.innerHeight*3/10 ).css("left", img_full_div_left + window.innerWidth/10);
    $("#crop_tool").css("width", img_full_div_width).css("height", img_full_div_height);

    $("#crop_tool").resizable({containment: "parent"});
    $("#crop_tool").draggable({containment: "parent"});

    var visible = function(){

      //image to be cropped_img
      var imageToCrop = $('#img_name').attr('src');
      $('#img_modal').attr('src', imageToCrop);

      // Get the modal
      var modal = document.getElementById('myModal');

      // // Get the button that opens the modal
      // var btn = document.getElementById("crop_btn");

      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];

      modal.style.display = "block";

      // When the user clicks on <span> (x), close the modal
      span.onclick = function() {
          modal.style.display = "none";
      }

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
          if (event.target == modal) {
              modal.style.display = "none";
          }
      }
    }
    var crop = function(){

        var img_full_div_top = parseInt($(".image-full-div").position().top);
        var img_full_div_left = parseInt($(".image-full-div").position().left);
        var crop_tool_top = parseInt($("#crop_tool").position().top);
        var crop_tool_left = parseInt($("#crop_tool").position().left);

        var crop_start_x = crop_tool_left - img_full_div_left;
        var crop_start_y = crop_tool_top - img_full_div_top;

        var crop_tool_width = parseInt($("#crop_tool").width());
        var crop_tool_height = parseInt($("#crop_tool").height());
        var image = $("#img_name").attr('src');

        $.post("crop.php",
                {crop_start_x: crop_start_x,
                crop_start_y: crop_start_y,
                crop_tool_width: crop_tool_width,
                crop_tool_height: crop_tool_height,
                image: image},
                function(data){
                  // alert(data);
        });
        $("#img_name").attr("src", "cropped.jpg");
        // Get the modal
        var modal = document.getElementById('myModal');
        modal.style.display = "none";
      }

    $("#crop_btn").click(
      function(){
        if(checkFile()) {
          visible();
        } else {
          alert("Please choose a picture! ");
        }
    });
    $("#crop_btn_modal").click(
      function() {
        crop();
      }
    )

    $("#button_resize").click(
        function(){
          if(checkFile()) {
            var res = parseInt($("#option_resize").find(":selected").val());

            $.post("resize.php",
                    {res: res},
                    function(data){});
            $("#img_name").attr("src", "resized.jpg");
           } else {
            alert("Please choose a picture! ");
          }
        });
    $("#button_grayscale").click(
       function(){
         if(checkFile()) {
           var image = $("#img_name").attr('src');
           $.post("grayscale.php",
                 {image: image});
           $("#img_name").attr("src", "grayscale.jpg");
         } else {
           alert("Please choose a picture! ");
         }
    });
    $("#button_3d").click(
      function () {
        if(checkFile()) {

                  var image = document.getElementById('img_name');

                  var img = image.src;
                  var img_width = image.width * 3;
                  var img_height = image.height * 3;

                  // Set the scene size.
              		const WIDTH = window.innerWidth * 2/5;
              		const HEIGHT = window.innerHeight * 1/2;

              		// Set some camera attributes.
              		const VIEW_ANGLE = 45;
              		const ASPECT = WIDTH / HEIGHT;
              		const NEAR = 0.1;
              		const FAR = 20000;

              		// Get the DOM element to attach to
              		const container =
              		document.querySelector('#container');

              		// Create a WebGL renderer, camera
              		// and a scene
              		const renderer = new THREE.WebGLRenderer({antialias: true});
              		const camera =
              			new THREE.PerspectiveCamera(
              				VIEW_ANGLE,
              				ASPECT,
              				NEAR,
              				FAR
              			);

              		const scene = new THREE.Scene();

              		// Add the camera to the scene.
              		scene.add(camera);
                  camera.position.set(0, 150, 1500);
                  camera.lookAt(scene.position);

              		// Start the renderer.
              		renderer.setSize(WIDTH, HEIGHT);

              		// Check if there is already an element
              		// Attach the renderer-supplied
              		// DOM element.
              		if (container.innerHTML != '') {
              			container.replaceChild(renderer.domElement, container.childNodes[0]);
              		} else {
              			container.appendChild(renderer.domElement);
              		}

              		// create a point light
              		const pointLight =
              			new THREE.PointLight(0xFFFFFF);

              		// set its position
              		pointLight.position.x = 10;
              		pointLight.position.y = 150;
              		pointLight.position.z = 400;

              		// add to the scene
              		scene.add(pointLight);

                  //create plane texture
                  var planeTexture = new THREE.ImageUtils.loadTexture(img);
                  planeTexture.wrapS = planeTexture.wrapT = THREE.RepeatWrapping;
                  // planeTexture.repeat.set(4,4);

                  // create the plane's material
              		var planeMaterial =
              			new THREE.MeshLambertMaterial({
              				map: planeTexture,
                      side: THREE.DoubleSide
              			});

              		// Create a new mesh with
              		// plane geometry - we will cover
              		// the planeMaterial next!
                  var planeGeometry = new THREE.PlaneGeometry(img_width, img_height, 10, 10);
              		var plane = new THREE.Mesh(planeGeometry, planeMaterial);
              		plane.rotation.y = -0.5
              		plane.rotation.x = Math.PI;

              		// Move the plane back in Z so we
              		// can see it.
              		// plane.position.z = -300;

              		// Finally, add the sphere to the scene.
              		scene.add(plane);

              		// Draw!
              		renderer.render(scene, camera);

              		var controls = new THREE.OrbitControls( camera, renderer.domElement);
              		controls.addEventListener('change', function() {
              			renderer.render(scene, camera);
              		});

              		function update () {
              		// Draw!
              		renderer.render(scene, camera);

              		// Schedule the next frame.
              		requestAnimationFrame(update);
              		}

              		// Schedule the first frame.
              		requestAnimationFrame(update);

                document.getElementById('img_name').style.display = 'none';
        } else {
          alert("Please choose a picture! ");
        }

    });
});

function previewImage(event) {
  var reader = new FileReader();
  reader.onload = function() {
      var output = document.getElementById('img_name');
      output.src = reader.result;
  };

  reader.readAsDataURL(event.target.files[0]);
};

function checkFile(){
  return $("#img_input").val()!= '';
}
