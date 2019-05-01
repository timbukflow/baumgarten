$(document).ready(function () {

    
    $( ".h1" ).hover(function() {
        $( ".trh1" ).toggleClass("trhover")
        $( ".st1" ).toggleClass("hoo");
        $( ".hovertext-1" ).toggleClass("fonton");
    });
    
    $( ".h2" ).hover(function() {
        $( ".trh2" ).toggleClass("trhover")
        $( ".st2" ).toggleClass("hoo");
        $( ".hovertext-2" ).toggleClass("fonton");
    });
    
    $( ".h3" ).hover(function() {
        $( ".trh3" ).toggleClass("trhover")
        $( ".st3" ).toggleClass("hoo");
        $( ".hovertext-3" ).toggleClass("fonton");
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
    
});