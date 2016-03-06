$(function(){

	console.log("It's working");

	$(window).scroll(function() {
        var distanceFromTop = $(this).scrollTop();

        if (distanceFromTop >= $('#hero-container').height()) {
            $('.sticky').addClass('fixed');
        } else {
            $('.sticky').removeClass('fixed');
        }
        if (distanceFromTop >= $('header').height()){
        	$('header').addClass('header-up');
        } else {
        	$('header').removeClass('header-up');
        }
    });
    $(".featureImagecontainer").fadeIn();
    
});
