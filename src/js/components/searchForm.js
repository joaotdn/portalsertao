(function($) {
    $('.ps-toggle-search').on('click', function() {
        if ($('.ps-search-content').hasClass('active')) {
            $('.ps-search-content').removeClass('active');
            $('> i', this).removeClass('fa-xmark').addClass('fa-magnifying-glass');
        } else {
            $('.ps-search-content').addClass('active');
            $('input', '.ps-search-content').eq(0).trigger('focus');
            $('> i', this).removeClass('fa-magnifying-glass').addClass('fa-xmark');
        }
    });
})(jQuery);