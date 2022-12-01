/* Set the width of the side navigation to 250px */
$(document).ready(function(){
  $("#toggleVisibility").click(function(){
    $("#mySidenav").css("width", "250px");
  });
});


  
  /* Set the width of the side navigation to 0 */
  $(document).ready(function(){
    $(".closebtn").click(function(){
      $("#mySidenav").css("width", "0px");
    });
  });