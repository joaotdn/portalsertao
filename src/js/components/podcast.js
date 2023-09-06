(function($) {
    if ($('.ps-podcast').length) {
        $('.ps-podcast--figure').on('click', function(e) {
            e.preventDefault();
            const code = $(this).attr('data-video-id');
            $('iframe', '#videoHomeModal').attr('src', 'https://www.youtube.com/embed/' + code);
        });
    }
})(jQuery);