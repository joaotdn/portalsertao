(function ($) {
    const radioPlayer = $('.epb-radio-player');
    const RADIO_DELAY = 1200;

    const playRadio = function (url) {
        let player = document.getElementById('radio-audio');
        player.setAttribute('src', url);
        player.play();
    };

    const setRadio = function () {
        return new Promise(resolve => {
            $('.epb-radio-player__name').text('Aguarde...');
            let obj = JSON.parse(localStorage.getItem('activeRadio'));
            if (obj) {
                setTimeout(function () {
                    $('.epb-radio-player__name').text(obj.name);
                    playRadio(obj.url);
                }, RADIO_DELAY);
            }
        });
    };

    if (radioPlayer.length) {
        !!localStorage.getItem('activeRadio') && radioPlayer.addClass('active') && setRadio();

        $('.epb-radios__select').on('change', function () {
            let obj = {
                url: $(this).val(),
                name: $('option:selected', this).text()
            };
            localStorage.setItem('activeRadio', JSON.stringify(obj));
            !radioPlayer.hasClass('active') && radioPlayer.addClass('active');
            setRadio();
        });

        $('.epb-radio-player__close').on('click', function (e) {
            e.preventDefault();
            localStorage.removeItem('activeRadio');
            radioPlayer.removeClass('active');
            document.getElementById('radio-audio').pause();
        });
    }
})(jQuery);