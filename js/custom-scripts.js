$(document).ready(function(){

	resizeElements();
	
	skrollr.init({
		smoothScrolling: true,
		mobileDeceleration: 0.004,
		forceHeight: false
	});
	
	$('.my-slider').unslider({
		animation: 'fade',
		autoplay: true,
		speed: 1000,
		delay: 5000 
	});

	//sets height of slider, can be used to control other elements based on screensize
	$(window).resize(function() {
		resizeElements();
    });

    function resizeElements(){
    	var windowWidth = $(window).width();
    	var sliderHeight = Math.round(windowWidth*0.333);
    	$(".my-slider").css( "height", sliderHeight);
    }


    $(window).scroll(function() {                
            var myTop = $(window).scrollTop();
            console.log(myTop);

            //HOME LOGO
            if(myTop<=400){
                $('.nav-box').removeClass( "fixed-nav" );
            } else if( myTop > 200){
                $('.nav-box').addClass( "fixed-nav" );
            }
    });
    
});