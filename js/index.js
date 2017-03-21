$(document).ready(function (){
    var img_full_div_top = $(".image-full-div").position().top;
    var img_full_div_left = $(".image-full-div").position().left;
    var img_full_div_width = $(".image-full-div").width();
    var img_full_div_height = $(".image-full-div").height();

    $("#crop_tool").css("top", img_full_div_top).css("left", img_full_div_left);
    $("#crop_tool").css("width", img_full_div_width/3).css("height", img_full_div_height/3);
    $("#crop_tool").resizable({containment: "parent"});
    $("#crop_tool").draggable({containment: "parent"});
    $("#crop_btn").click(
      function(){
        var img_full_div_top = parseInt($(".image-full-div").position().top);
        var img_full_div_left = parseInt($(".image-full-div").position().left);
        var crop_tool_top = parseInt($("#crop_tool").position().top);
        var crop_tool_left = parseInt($("#crop_tool").position().left);

        var crop_start_x = crop_tool_left - img_full_div_left;
        var crop_start_y = crop_tool_top - img_full_div_top;

        var crop_tool_width = parseInt($("#crop_tool").width());
        var crop_tool_height = parseInt($("#crop_tool").height());

        // alert("crop tool left: " + crop_tool_left+ "\n img full div left: " +img_full_div_left +
        // "\n crop tool width: " + crop_tool_width+ "\n crop tool height: " +crop_tool_height);
        $.post("crop.php",
                {crop_start_x: crop_start_x,
                crop_start_y: crop_start_y,
                crop_tool_width: crop_tool_width,
                crop_tool_height: crop_tool_height},
                function(data){
                  // alert(data);
        });
        $("#img_name1").attr("src", "cropped.jpg");
      });
      // $("#crop_btn").click();
    $("#button_resize").click(
        function(){
          var res = parseInt($("#option_resize").find(":selected").val());

          $.post("resize.php",
                  {res: res},
                  function(data){});
          $("#img_name").attr("src", "resized.jpg");
        }
    );
    $("#button_grayscale").click(
       function(){
         $.post("grayscale.php");
         $("#img_name").attr("src", "grayscale.jpg");
    });
    $("#button_3d").click(
      function () {

        var image = document.getElementById('img_name');
        document.getElementById('crop_tool').style.visibility = "hidden";
          document.getElementById('image-full-div').style.visibility = "hidden";
        var img = image.src;
        image.style.visibility = "hidden";
        // Set the scene size.
    		const WIDTH = window.innerWidth - 100;
    		const HEIGHT = window.innerHeight - 100;

    		// Set some camera attributes.
    		const VIEW_ANGLE = 45;
    		const ASPECT = WIDTH / HEIGHT;
    		const NEAR = 0.1;
    		const FAR = 10000;

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
    			camera.position.z = 1500;
    			// camera.lookAt(new THREE.Vector3(0,0,0));

    		const scene = new THREE.Scene();

    		// Add the camera to the scene.
    		scene.add(camera);

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
    		pointLight.position.y = 50;
    		pointLight.position.z = 130;

    		// add to the scene
    		scene.add(pointLight);

    		// Set up the sphere vars
    		const RADIUS = 50;
    		const SEGMENTS = 16;
    		const RINGS = 16;

    		// create the sphere's material
    		const sphereMaterial =
    			new THREE.MeshLambertMaterial({
    				map: THREE.ImageUtils.loadTexture(img)
    			});

    			sphereMaterial.wrapS = sphereMaterial.wrapT = THREE.RepeatWrapping;
    			// sphereMaterial.repeat.set(10,10);

    		// Create a new mesh with
    		// sphere geometry - we will cover
    		// the sphereMaterial next!
    		var sphere = new THREE.Mesh(
    			new THREE.PlaneGeometry(
    				1000,// RADIUS,
    				1000,
    				10, 10),// SEGMENTS,
    				// 300),// RINGS),
    			sphereMaterial);
    			sphere.rotation.y=-0.2
    			sphere.rotation.x=Math.PI/4;

    		// Move the Sphere back in Z so we
    		// can see it.
    		sphere.position.z = -300;

    		// Finally, add the sphere to the scene.
    		scene.add(sphere);

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
    		// // sphere geometry
    		// sphere.geometry
    		//
    		// // which contains the vertices and faces
    		// sphere.geometry.vertices // an array
    		// sphere.geometry.faces // also an array
    		//
    		// // its position
    		// sphere.position // contains x, y and z
    		// sphere.rotation // same
    		// sphere.scale // ... same
    		// // Changes to the vertices
    		// sphere.geometry.verticesNeedUpdate = true;
    		//
    		// // Changes to the normals
    		// sphere.geometry.normalsNeedUpdate = true;
    	// }
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
