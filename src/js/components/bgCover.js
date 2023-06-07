(function($) {
    if ($('*[data-thumb-post]').length) {
        $('*[data-thumb-post]').each(function() {
            const th = $(this).data('thumb-post');
            $(this).css('backgroundImage', 'url('+ th +')');
        })
    }
})(jQuery);