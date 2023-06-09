(function ($) {
    $('a', '.ps-videos-home--nav').on('click', function (e) {
        e.preventDefault();
        const code = $(this).data('youtube-code');
        $(this).addClass('active');
        $(this).siblings().removeClass('active');

        $('.ps-videos-home--thumb').css('backgroundImage', 'url(https://img.youtube.com/vi/' + code + '/hqdefault.jpg)');
        $('.ps-videos-home--thumb').attr('data-youtube-code', code);
    });
    $('.ps-videos-home--thumb').on('click', function (e) {
        e.preventDefault();
        const code = $(this).attr('data-youtube-code');
        $('iframe', '#videoHomeModal').attr('src', 'https://www.youtube.com/embed/' + code);
    });
})(jQuery);