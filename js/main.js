$(document).ready(function () {
    
    // building A //
    
    $(".a").hover(function() {
        $("html, body").animate({scrollTop:$("#a").position().top - 125},200);
    });
    
    $(".ae1w1").hover(function() {
        $(".ae1w1").toggleClass("activ");
        $(".ae1").nextAll().toggleClass("up");});
    $(".ae1w2").hover(function() {
        $(".ae1w2").toggleClass("activ");
        $(".ae1").nextAll().toggleClass("up");});
    $(".ae1w3").hover(function() {
        $(".ae1w3").toggleClass("activ");
        $(".ae1").nextAll().toggleClass("up");}); 
    
    $(".ae2w1").hover(function() {
        $(".ae2w1").toggleClass("activ");
        $(".ae2").nextAll().toggleClass("up");});
    $(".ae2w2").hover(function() {
        $(".ae2w2").toggleClass("activ");
        $(".ae2").nextAll().toggleClass("up")});
    $(".ae2w3").hover(function() {
        $(".ae2w3").toggleClass("activ");
        $(".ae2").nextAll().toggleClass("up")});
    
    $(".ae3w1").hover(function() {
        $(".ae3w1").toggleClass("activ");
        $(".ae3").nextAll().toggleClass("up")});
    $(".ae3w2").hover(function() {
        $(".ae3w2").toggleClass("activ");
        $(".ae3").nextAll().toggleClass("up")});
    $(".ae3w3").hover(function() {
        $(".ae3w3").toggleClass("activ");
        $(".ae3").nextAll().toggleClass("up")});
    
    $(".ae4w1").hover(function() {
        $(".ae4w1").toggleClass("activ");});
    $(".ae4w2").hover(function() {
        $(".ae4w2").toggleClass("activ");});

    
    // building B //
    
    $(".b").hover(function() {
        $("html, body").animate({scrollTop:$("#b").position().top},500);
    });
    
    
    // plan hover //
    
    $(".planb").click(function(){
        $(this).children().fadeToggle("planhover")
    });
    
    
    // nav //
    
    $('#navburger').click(function(){
		$(this).toggleClass('open');
        $('.resp').toggleClass('navrespon')
        $('body').toggleClass('noscroll')
	});
    
    
    // nav scroll down fade in //
    
     $(window).scroll(function() { 
         if ($(this).scrollTop()> 300) { 
             $('.navc').addClass("navfade"); 
         } else { 
             $('.navc').removeClass("navfade");
             $('.resp').removeClass("navrespon");
         } 
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