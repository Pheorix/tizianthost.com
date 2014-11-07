//Function Start
$(document).ready(function(){

    function slogan_flip(){
      $(".slogan").flipping_text({
            tickerTime: 10,
            customRandomChar: false,
            tickerCount: 10,
            opacityEffect: true,
            resetOnChange: false
          }).delay(3000);      
    };       
          

    slogan_flip();
    
});//Function End

