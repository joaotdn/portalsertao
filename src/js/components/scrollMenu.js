(function ($) {
    let lastScrollTop = 0;
    $(window).on('scroll', function () {
        let st = $(this).scrollTop();
        if (st > lastScrollTop) {
            $('.epb-scroll-menu').removeClass('active');
        } else if (st <= 200) {
            $('.epb-scroll-menu').removeClass('active');
        } else {
            $('.epb-scroll-menu').addClass('active');
        }
        lastScrollTop = st;
    });
})(jQuery);