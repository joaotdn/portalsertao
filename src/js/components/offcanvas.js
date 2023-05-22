(function($) {
    $('.toggle-offcanvas').on('click', function(e) {
        e.preventDefault();
        $('.epb-offcanvas,.epb-offcanvas-overlay').toggleClass('active');
    });
})(jQuery);