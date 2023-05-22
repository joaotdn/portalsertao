(function($) {
    if ($('[class^="single-fz"]').length) {
        let singleFz = parseInt($('p', '.epb-single__content').css('fontSize'));
        $('.single-fz-plus').on('click', function(e) {
            e.preventDefault();
            if (singleFz < 32) {
                $('p', '.epb-single__content').css('fontSize', `${singleFz++}px`);
            }
        });

        $('.single-fz-minor').on('click', function(e) {
            e.preventDefault();
            if (singleFz > 16) {
                $('p', '.epb-single__content').css('fontSize', `${singleFz--}px`);
            }
        });
    }
})(jQuery);