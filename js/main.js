$(document).ready(function () {
    
    $( ".Ae1w1" ).hover(function() {
        $(".Ae1w1").toggleClass("bl");
        $(".Ae1").siblings().toggleClass("fade")
        $(".Ae1w1g").fadeToggle("gfade")
    });
    $( ".Ae1w2" ).hover(function() {
        $(".Ae1w2").toggleClass("bl");
        $(".Ae1").siblings().toggleClass("fade")
    });
    $( ".Ae1w3" ).hover(function() {
        $(".Ae1w3").toggleClass("bl");
        $(".Ae1").siblings().toggleClass("fade")
    });
    
    $( ".Ae2w1" ).hover(function() {
        $(".Ae2w1").toggleClass("bl");
        $(".Ae2").nextAll().toggleClass("fade")
    });
    
    
    
    $(window).scroll(function() {
        $('.inview').each(function(i) {
            var bottom_of_object = $(this).offset().top;
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            if( bottom_of_window > bottom_of_object ) {
                $(this).addClass('inview-fade');
            } else {
                $(this).removeClass('inview-fade');
            }
        }); 
    }).scroll();
    
    $(window).scroll(function() {
        $('.inviewtop').each(function(i) {
            var bottom_of_object = $(this).offset().top;
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            if( bottom_of_window > bottom_of_object ) {
                $(this).addClass('inview-fade-top');
            } else {
                $(this).removeClass('inview-fade-top');
            }
        }); 
    }).scroll();
    
});