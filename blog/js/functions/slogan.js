//Function Start
$(document).ready(function(){

    function slogan_flip(){
      $(".slogan").flipping_text({
            tickerTime: 2,
            customRandomChar: false,
            tickerCount: 10,
            opacityEffect: true,
            resetOnChange: false
          }).delay(3000);      
    };       
          
    function slogan_shake(){
        $('.slogan').mouseenter(function(){
            $(this).effect("bounce", { times:1 }, 800);
        });        
    }; 
    
    slogan_flip();
    
});//Function End

