(function ($) {
    if ($('#ps-radios-online--player').length) {
        const player = document.getElementById('ps-radios-online--player');
        const radioSertao = document.getElementById('ps-top-player');
        const radioFace = $('.radios-online-player');

        $('#radios-online').on('change', function () {
            const val = $(this).find(':selected').val();
            const text = $(this).find(':selected').text();
            radioSertao.pause();

            radioFace.addClass('active');
            $('.ps-radios-online--name').text(text);
            player.setAttribute('src', val);
            player.play();
        });

        $('.ps-radios-online--close').on('click', function (e) {
            e.preventDefault();
            radioFace.removeClass('active');
            player.pause();
        });
    }
})(jQuery);