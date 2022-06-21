$(function(){
    

  
  'use strict';
  $('.username').blur(function(){
      
      if($(this).val().length <4){
  alert("faaaaaaaaaaalse");
      
          // $(this).parent().find('.custome-alert').fadeIn(200);
          $(this).css('border','2px solid #f00');
          $('.custome-alert').fadeIn(200);
$('.star').fadeIn(200);

          
          
      }
      else
      {
  alert("true");
$('.star').fadeOut(200);
          // $(this).css('border', '2px solid #080');
          $(this).css('border','2px solid #080');

          // $(this).parent().find('.custome-alert').fadeOut(200);
          $('.custome-alert').fadeOut(200);

          
              }
  });


  // $(".cellphone").blur(function(){
  //     $(this).css("background-color", "green");
  //     alert("helllllllllllllo");
  // });

});