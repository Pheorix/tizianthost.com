$(document).ready(function(){
    
    $('body').append('<div class="fullscreentip" title="Klicke um das Fenster zu schließen" id="fullscreen_msg"><h2>Fullscreen Modus</h2><p>Um die Website in vollen Umfang zu genießen, schalte bitte den           Fullscreen-Modus deines Internetbrowsers an. Drücke F11</p></div>');
     
        $('#fullscreen_msg').css({
            'width':'250px',
            'height':'auto',
            'border':'1px solid #000',
            'backgroundColor':'rgba(0, 0, 0, 0.7)',
            'position':'absolute',
            'top':'0',
            'left':'0',
            'marginTop':'70px',
            'marginLeft':'30px',
            'color':'#fff',
            'padding':'20px',
            'overflow':'hidden',
            'borderRadius':'5px',
            'zIndex':'2000',
            'display':'none',
            'cursor':'pointer'
        });
        
        fullscreen = $.jStorage.get('fullscreen');
        
        if(fullscreen == 'yes' ){
            
        }else{
                $('#fullscreen_msg').slideDown(1000);

                    $('#fullscreen_msg').click(function(){
                        $.jStorage.set('fullscreen', 'yes')
                        $.jStorage.setTTL("fullscreen", 86400000)
                            $(this).fadeOut();
                    })            
        }
})