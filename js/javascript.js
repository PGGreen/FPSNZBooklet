$(".accordion").accordion({
    collapsible: true,
    active: false


});

$("input[type='radio']").checkboxradio();

$('[data-toggle="popover"]').popover();

$(document).ready(function()
{
  document.getElementsByTagName("html")[0].style.visibility = "visible";
});

$( "#tabs" ).tabs();

$('.listitem').click(function(e) {
  e.stopPropagation();
    $(this).children().slideToggle();
});

$('.dir').click(function(e) {
  e.stopPropagation();
    $(this).children().slideToggle();
});

var t = document.getElementsByClassName('textarea');

for (i = 0; i < t.length; i++)
{

      //t[i].style.backgroundColor = "lightgreen";
	   //t.css("background-color","red");
}


/*
$("#submitbutton").click(function(){
  $("#alertenterinfo").attr('class', 'alert alert-danger col-md-3 mb-3');

  return false;
});
*/
