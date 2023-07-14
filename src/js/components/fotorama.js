(function ($) {
    if ($('.fotorama').length) {
        $('.fotorama').fotorama({
            width: '100%',
            ratio: 16 / 9,
            allowfullscreen: true,
            nav: 'thumbs',
            spinner: {
                lines: 13,
                color: 'rgba(0, 0, 0, .75)'
            }
        });
    }
})(jQuery);