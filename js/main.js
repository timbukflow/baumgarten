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