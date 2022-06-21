$(function(){
    

    // alert("helllllllo");
    'use strict';
    $('.username').blur(function(){
        
        if($(this).val().length <4){
    // alert("less");
        
         $(this).parent().find('.custome-alert').show();
         $(this).css('border','2px solid #f00');
        //  $('.custome-alert').show(200);
// $('.star').fadeIn(200);
            
        }
        else
        {
    // alert("more");

            $(this).css('border', '2px solid #080');
            $(this).parent().find('.custome-alert').hide(200);
            // $('.custome-alert').fadeOut(200);
$('.fa-asterisk').css('color',  'green');


            
                }
    });


    $(".email").blur(function(){
        if($('.email').val()===''){
            $(this).css('border','2px solid #f00');
            $(this).parent().find('.custome-alert').show();
         

        
        // alert("helllllllllllllo");
    }
    else {
        // alert("filled");
        $(this).css('border','2px solid #080');
        // $('.custome-alert').hide( "slow" );

        $(this).parent().find('.custome-alert').hide(200);


    }
    
});


$(".message").blur(function(){
    if($(this).val().length <10){
        $(this).css('border','2px solid #f00');
        $(this).parent().find('.custome-alert').show();
        

        // alert("helllllllllllllo");

    
}
else {
    // alert("filled");
    $(this).css('border','2px solid #080');
    $(this).parent().find('.custome-alert').hide(200);


    // $(this).parent().find('.custome-alert').fadeOut(200);


}

});
});