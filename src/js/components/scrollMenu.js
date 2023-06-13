(function ($) {
    let lastScrollTop = 0;
    $(window).on('scroll', function () {
        let st = $(this).scrollTop();
        if (st > lastScrollTop) {
            $('.ps-scroll-menu').removeClass('active');
        } else if (st <= 200) {
            $('.ps-scroll-menu').removeClass('active');
        } else {
            $('.ps-scroll-menu').addClass('active');
        }
        lastScrollTop = st;
    });
})(jQuery);