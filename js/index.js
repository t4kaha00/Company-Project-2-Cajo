$(document).ready(function (){
    var img_full_div_top = $(".image-full-div").position().top;
    var img_full_div_left = $(".image-full-div").position().left;

    $("#crop_tool").css("top", img_full_div_top + 20).css("left", img_full_div_left + 35);

    $("#crop_tool").resizable({containment: "parent"});
    $("#crop_tool").draggable({containment: "parent"});
    $("#crop_btn").click(
      function(){
        var img_full_div_top = $(".image-full-div").position().top;
        var img_full_div_left = $(".image-full-div").position().left;
        var crop_tool_top = parseInt($("#crop_tool").position().top);
        var crop_tool_left = parseInt($("#crop_tool").position().left);

        img_full_div_top.toFixed();
        img_full_div_left.toFixed();
        crop_tool_top.toFixed();
        crop_tool_left.toFixed();

        var crop_start_x = crop_tool_left - img_full_div_left;
        var crop_start_y = crop_tool_top - img_full_div_top;

        // alert(crop_tool_top + " | " + crop_tool_left);
        // alert(img_full_div_top+ " | " + img_full_div_left);
        // alert(crop_start_x + " | " + crop_start_y);

        var crop_tool_width = parseInt($("#crop_tool").width());
        var crop_tool_height = parseInt($("#crop_tool").height());
        crop_tool_width.toFixed();
        crop_tool_height.toFixed();

        $.post("crop.php",
                {crop_start_x: crop_start_x,
                crop_start_y: crop_start_y,
                crop_tool_width: crop_tool_width,
                crop_tool_height: crop_tool_height},
                function(data){
                  alert(data);
        });
      }
    );




// $(document).ready(function () {
//     $("#crop_btn").click();
//     $("#post").click(
//       function(){
//         alert("post clicked");
//       }
//     );
// });
});
function previewImage(event) {
  var reader = new FileReader();
  reader.onload = function() {
      var output = document.getElementById('img_name');
      output.src = reader.result;
  }

  reader.readAsDataURL(event.target.files[0]);
};
