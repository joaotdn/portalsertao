(function($) {
    $('.ps-toggle-offcanvas').on('click', function(e) {
        e.preventDefault();
        $('.ps-offcanvas-menu, .ps-offcanvas-over').toggleClass('active');
    });
})(jQuery);