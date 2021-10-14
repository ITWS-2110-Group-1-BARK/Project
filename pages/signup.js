var current, next, previous;


$(".next").click(function(){

  current =$(this).parent();
  next = $(this).parent().next();

  /*gets the next li in progress bar and sets it to 'active'*/
  $("#progressbar li").eq($("fieldset").index(next)).addClass("active")

  next.show();
  current.hide();

});

$(".previous").click(function(){
  current = $(this).parent();
  previous = $(this).parent().prev();

  $("#progressbar li").eq($("fieldset").index(current)).removeClass("active")

  previous.show();
  current.hide();

});

$(".submit").click(function(){
    window.location.href = "../homepage.html";
});

$(function(){

  $("#repeater").createRepeater();

});