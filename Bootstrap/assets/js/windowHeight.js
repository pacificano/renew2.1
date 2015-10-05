$(function () {

    var $windowHeight = $(window).height();
    var $windowWidth = $(window).width();

    if ($windowWidth > 1000) {

    	$(".splashDiv").css("min-height", $windowHeight);
    	$(".newsletterDiv").css("min-height", $windowHeight);
    	$(".blogExtras").css("min-height", $(".blogDetails").height()); 

    } else {

        $(".newsletterDiv").css("margin-bottom", "30px");
        $(".newsletterDiv").css("margin-top", "30px");
        $(".newsletterDiv").css("padding-bottom", "30px");
        $(".newsletterDiv").css("padding-top", "30px");

    };

});