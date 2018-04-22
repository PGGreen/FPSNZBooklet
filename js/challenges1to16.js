$('.textarea').on('keyup', function()
{
  var wordsLength = $(this).val().length;
  var textname = $(this).attr('id');

  $('#' + textname + 'text').html(wordsLength + "/1000");

  //$(".accordion .ui-accordion-header").css("background", "red");
  $(this).parents().find("#accordionheader1 .ui-accordion-header").css({"background": "green"});
  $(this).parents().find(".testcolor").css({"color": "white"});

});

$('#textareastep2').on('keyup', function()
{
  var wordsLength = $(this).val().length;

  $('#textareastep2text').html(wordsLength + "/5,000");
});

$('#textarea1').bind('input propertychange', function(){

  $.ajax({
    method: "POST",
    url: "../../connection/updatedatabase.php",
    data: { content: $('#textarea1').val() }
  });


});
