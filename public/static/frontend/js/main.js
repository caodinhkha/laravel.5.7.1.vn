(function($) {
    "use strict"
    // HOME SLICK
    $('#home-slick').slick({
        autoplay: true,
        infinite: true,
        speed: 300,
        arrows: true,
    });
    $("#to_top").click(function () {
        $("body,html").animate({scrollTop: 0}, "normal")
    });
})(jQuery);