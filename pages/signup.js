




/*$(".next").click(function(){
  /*current = $(this).parent();
  next = $(this).parent().next();

  /*gets the next li in progress bar and sets it to 'active'*/
  //$("#progressbar li").eq($("fieldset").index(next)).addClass("active")

  //next.show();
  //current.hide();
  //$(".f1").hide()
  //$(".f2").show();
  //window.location = "signup2.php";

//});
var int2 = false;
var int3 = false;
var int4 = false;
var int5 = false;

$(".previous1").click(function(){
  /*current = $(this).parent();
  previous = $(this).parent().prev();

  $("#progressbar li").eq($("fieldset").index(current)).removeClass("active")

  previous.show();
  current.hide();*/
  window.location = "signup.php";

});

$(".previous2").click(function(){
  /*current = $(this).parent();
  previous = $(this).parent().prev();

  $("#progressbar li").eq($("fieldset").index(current)).removeClass("active")

  previous.show();
  current.hide();*/
  window.location = "signup2.php";

});

$(document).ready(function() {
  $("#interest2").hide();
  $("#interest3").hide();
  $("#interest4").hide();
  $("#interest5").hide();


$(".add").click(function(){
  if(int2 == false){
    $("#interest2").show();
    int2 = true;
  }
  else if(int3 == false){
    $("#interest3").show();
    int3 = true;
  }
  else if(int4 == false){
    $("#interest4").show();
    int4 = true;
  }
  else if(int5 == false){
    $("#interest5").show();
    int5 = true;
    $(".add").css("opacity", "0.5");
  }
});

});
