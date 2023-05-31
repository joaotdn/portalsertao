(function ($) {
    $('a', '.ps-top-radio, .ps-top-mobile-radio').on('click', function (e) {
        e.preventDefault();
        let player = document.getElementById('ps-top-player');
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
            $('> i', this).removeClass('fa-circle-pause').addClass('fa-circle-play');
            player.pause();
        } else {
            $(this).addClass('active');
            $('> i', this).removeClass('fa-circle-play').addClass('fa-circle-pause');
            player.play();
        }
    });

    $.ajax({
        url: 'https://player.jnbhost.com.br/proxy/7126/currentsong',
        type: 'GET',
        success: function(data) {
            $('span', '.ps-top-playlist').html('Tocando agora: ' + data);
        },
        error: function() {
            $('span', '.ps-top-playlist').html('Estamos fora do ar');
        }
    });
})(jQuery);