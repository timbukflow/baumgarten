$(document).ready(function () {
    
    // building A //
    
    $(".a").hover(function() {
        $("html, body").animate({scrollTop:$("#a").position().top - 100},500);
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
        $("html, body").animate({scrollTop:$("#b").position().top - 100},500);
    });
    
    $(".be1w1").hover(function() {
        $(".be1w1").toggleClass("activ");
        $(".be1").nextAll().toggleClass("up");});
    $(".be1w2").hover(function() {
        $(".be1w2").toggleClass("activ");
        $(".be1").nextAll().toggleClass("up");});
    $(".be1w3").hover(function() {
        $(".be1w3").toggleClass("activ");
        $(".be1").nextAll().toggleClass("up");}); 
    
    $(".be2w1").hover(function() {
        $(".be2w1").toggleClass("activ");
        $(".be2").nextAll().toggleClass("up");});
    $(".be2w2").hover(function() {
        $(".be2w2").toggleClass("activ");
        $(".be2").nextAll().toggleClass("up")});
    $(".be2w3").hover(function() {
        $(".be2w3").toggleClass("activ");
        $(".be2").nextAll().toggleClass("up")});
    
    $(".be3w1").hover(function() {
        $(".be3w1").toggleClass("activ");
        $(".be3").nextAll().toggleClass("up")});
    $(".be3w2").hover(function() {
        $(".be3w2").toggleClass("activ");
        $(".be3").nextAll().toggleClass("up")});
    $(".be3w3").hover(function() {
        $(".be3w3").toggleClass("activ");
        $(".be3").nextAll().toggleClass("up")});
    
    $(".be4w1").hover(function() {
        $(".be4w1").toggleClass("activ");});
    $(".be4w2").hover(function() {
        $(".be4w2").toggleClass("activ");});
    
    // building C //
    
    $(".c").hover(function() {
        $("html, body").animate({scrollTop:$("#c").position().top - 100},500);
    });
    
    $(".ce1w1").hover(function() {
        $(".ce1w1").toggleClass("activ");
        $(".ce1").nextAll().toggleClass("up");});
    $(".ce1w2").hover(function() {
        $(".ce1w2").toggleClass("activ");
        $(".ce1").nextAll().toggleClass("up");});
    $(".ce1w3").hover(function() {
        $(".ce1w3").toggleClass("activ");
        $(".ce1").nextAll().toggleClass("up");}); 
    
    $(".ce2w1").hover(function() {
        $(".ce2w1").toggleClass("activ");
        $(".ce2").nextAll().toggleClass("up");});
    $(".ce2w2").hover(function() {
        $(".ce2w2").toggleClass("activ");
        $(".ce2").nextAll().toggleClass("up")});
    $(".ce2w3").hover(function() {
        $(".ce2w3").toggleClass("activ");
        $(".ce2").nextAll().toggleClass("up")});
    
    $(".ce3w1").hover(function() {
        $(".ce3w1").toggleClass("activ");
        $(".ce3").nextAll().toggleClass("up")});
    $(".ce3w2").hover(function() {
        $(".ce3w2").toggleClass("activ");
        $(".ce3").nextAll().toggleClass("up")});
    $(".ce3w3").hover(function() {
        $(".ce3w3").toggleClass("activ");
        $(".ce3").nextAll().toggleClass("up")});
    
    $(".ce4w1").hover(function() {
        $(".ce4w1").toggleClass("activ");});
    $(".ce4w2").hover(function() {
        $(".ce4w2").toggleClass("activ");});
    
    // plan hover //
    
    $(".planb").click(function(){
        $(this).children().fadeToggle("planhover")
    });
    
    // nav by scroll small //
    
    $(document).on('scroll', function () {
        if ($(document).scrollTop() > 10) {
            $('#navburger').fadeIn(500);
            $('.navfade').css('width', '0px').fadeOut(300);
            
        }   
        else {
            $('#navburger').fadeOut(500);
            $('.navfade').fadeIn(500);
        }
    });
    
    // nav //
    
    $('#navburger').click(function(){
		$(this).toggleClass('open');
        $('.nav').toggleClass('navfade')
	});

    // impressum //

    $('.impressum').click(function() {
        var totoggle = $(this).attr("data-toggle");
        $(totoggle).slideToggle(500);
        
        if ($(totoggle).is(":visible")) {
            $('html,body').animate({scrollTop:$(totoggle).offset().top}, 1000);
        }     
    });
    
});