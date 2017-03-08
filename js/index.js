$(document.ready(function (){
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
});

function previewImage(event) {
  var reader = new FileReader();
  reader.onload = function() {
      var output = document.getElementById('img_name');
      output.src = reader.result;
  }

  reader.readAsDataURL(event.target.files[0]);
};
