(function($) {
    if($('.ps-audios').length) {
        const player = document.getElementById('ps-radios-online--player');
        const radioSertao = document.getElementById('ps-top-player');
        const radioFace = $('.radios-online-player');

        $('a', '.ps-audios--nav').on('click', function(e) {
            e.preventDefault();
            if ($(this).hasClass('active')) {
                $(this).removeClass('active');
                radioFace.removeClass('active');
                player.pause();    
            } else {
                $(this).addClass('active').siblings().removeClass('active');
                const text = $(this).text();
                const stream = $(this).data('audio');
                radioSertao.pause();
    
                radioFace.addClass('active');
                $('.ps-radios-online--name').text(text);
                player.setAttribute('src', stream);
                player.play();
            }
        });

        player.addEventListener('ended', function() {
            radioFace.removeClass('active');
            player.pause();
            $('a', '.ps-audios--nav').each(function() {
                $(this).removeClass('active');
            })
        });

        $('.ps-radios-online--close').on('click', function (e) {
            e.preventDefault();
            radioFace.removeClass('active');
            player.pause();
        });
    }
    // if ($('.ps-podcast').length) {
    //     $('.ps-podcast--figure').on('click', function(e) {
    //         e.preventDefault();
    //         const code = $(this).attr('data-video-id');
    //         $('iframe', '#videoHomeModal').attr('src', 'https://www.youtube.com/embed/' + code);
    //     });
    // }
})(jQuery);