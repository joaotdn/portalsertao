(function($) {
    if ($('[class^="single-fz"]').length) {
        let singleFz = parseInt($('p', '.ps-post-content').css('fontSize'));
        $('.single-fz-plus').on('click', function(e) {
            e.preventDefault();
            if (singleFz < 32) {
                $('p', '.ps-post-content').css('fontSize', `${singleFz++}px`);
            }
        });

        $('.single-fz-minor').on('click', function(e) {
            e.preventDefault();
            if (singleFz > 16) {
                $('p', '.ps-post-content').css('fontSize', `${singleFz--}px`);
            }
        });
    }
})(jQuery);