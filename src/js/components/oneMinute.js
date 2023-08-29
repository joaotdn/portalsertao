(function ($) {
    if ($('.ps-one-minute').length) {
        $('.ps-one-minute--nav-item').on('click', function(e) {
            e.stopImmediatePropagation();
            e.preventDefault();
            const code = $(this).data('video-id');
    
            $(this)
                .addClass('active')
                .siblings()
                .removeClass('active');
    
            $('.ps-one-minute--figure')
                .attr('title', $(this).attr('title'))
                .attr('data-video-id', code)
                .find('img').attr({
                    src: `https://img.youtube.com/vi/${code}/hqdefault.jpg`,
                    alt: $(this).attr('title')
                });
        });

        $('.ps-one-minute--figure').on('click', function(e) {
            e.preventDefault();
            const code = $(this).attr('data-video-id');
            $('iframe', '#videoHomeModal').attr('src', 'https://www.youtube.com/embed/' + code);
        });

        $('#videoHomeModal').on('hidden.bs.modal', function(e) {
            $(this).find('iframe').attr('src', '');
        });
    }
})(jQuery);