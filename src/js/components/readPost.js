(function($) {
    if ($('.ps-post-title').length && $('.ps-post-content').length) {
        function speak(message, language='pt-br'){
            const msg = new SpeechSynthesisUtterance(message);
            msg.lang = language;
            speechSynthesis.speak(msg);
        }
    
        $('.single-read-post').on('click', function(e) {
            e.preventDefault();
            const title = $('.ps-post-title--text').text();
            const content = $('.ps-post-content--text').text();
            const msg = new SpeechSynthesisUtterance(title + ' ' + content);
            msg.lang = 'pt-br';

            if ($(this).hasClass('active')) {
                $(this).removeClass('active')
                    .find('> i')
                    .removeClass('fa-volume-xmark')
                    .addClass('fa-volume-off');
                speechSynthesis.cancel(msg);
            } else {
                $(this).addClass('active')
                    .find('> i')
                    .removeClass('fa-volume-off')
                    .addClass('fa-volume-xmark');
                speechSynthesis.speak(msg);
            }
        });
    }
})(jQuery);