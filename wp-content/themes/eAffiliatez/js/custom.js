jQuery(document).ready(function($) {
	$(".toggle_menu").click(function(e) {
		$(this).animate("active");
        $(".header_menu").slideToggle('slow');
    });
	
$(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

	
});



