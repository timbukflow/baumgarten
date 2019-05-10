$(document).ready(function () {
    
    $( ".eg1" ).hover(function() {
        $(".eg1").toggleClass("bl");
        $(".etage2, .etage3, .etage4").toggleClass("fade")
    });
    $( ".eg2").hover(function() {
        $(".eg2").toggleClass("bl");
        $(".etage2, .etage3, .etage4").toggleClass("fade")
    });
    $( ".eg3").hover(function() {
        $(".eg3").toggleClass("bl");
        $(".etage2, .etage3, .etage4").toggleClass("fade")
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