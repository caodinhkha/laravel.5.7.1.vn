(function ($) {
    "use strict"
    // NAVIGATION
    var responsiveNav = $('#responsive-nav'),
        menuToggle    = $('#responsive-nav .menu-nav .menu-header'),
        menuList      = $('#responsive-nav .menu-nav .menu-list');

    menuToggle.on('click', function () {
        menuList.toggleClass('open');
    });

    $(document).click(function (event) {
        if (!$(event.target).closest(responsiveNav).length) {
            if (responsiveNav.hasClass('open')) {
                responsiveNav.removeClass('open');
                $('#navigation').removeClass('shadow');
            } else {
                if ($(event.target).closest('.nav-toggle > button').length) {
                    if (!menuList.hasClass('open')) {
                        menuList.addClass('open');
                    }
                    $('#navigation').addClass('shadow');
                    responsiveNav.addClass('open');
                }
            }
        }
    });
})(jQuery);