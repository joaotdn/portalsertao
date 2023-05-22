(function($) {
    $('a' ,'.epb-videos__galery--list').on('click', function(e) {
        e.preventDefault();
        let media = $(this).data('youtubeid');
        let link  = $(this).data('video-link');
        let txt   = $(this).attr('title');
        $('iframe', '.epb-videos__galery--media')
            .attr('src', 'https://www.youtube.com/embed/' + media);
        $('.video-title-player')
            .attr('src', link)
            .html(txt);
    });

    $('.video-th', '.epb-videos__galery--list').on('click',function() {
        $(this).addClass('active')
            .siblings('div')
            .removeClass('active');
    });

    // $('> div > a', '.epb-videos__galery--pager').on('click', function(e) {
    //     e.preventDefault();
    //     $(this)
    //         .addClass('active')
    //         .parent()
    //         .siblings()
    //         .removeClass('active');
    // });
})(jQuery);