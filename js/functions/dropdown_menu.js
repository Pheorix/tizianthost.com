//Function Start
$(document).ready(function(){
            //Slide Down Submenus
        	$("#menu li.toggle_menu").mouseenter(function() {
        		$(this).find("ul.submenu").slideDown(500);//Drop down the subnav on clic
        	});
            
        	//Slide Up Submenus
        	$("#menu ul.submenu").on('mouseleave',function() {
        		$(this).fadeOut(300);//Drop down the subnav on click
        	});

        	$("#menu li.toggle_menu").on('mouseleave',function() {
        		$('#menu ul.submenu').fadeOut(300);//Drop down the subnav on click 
        	});
});//Function End