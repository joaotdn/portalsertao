(function ($) {
    if ($('.ps-coins-indicators').length) {
        $.ajax({
            url: 'http://economia.awesomeapi.com.br/json/last/USD-BRL,EUR-BRL,BTC-BRL',
            success: function (data) {
                $('.cur-usd > .cur-min').html(parseFloat(data.USDBRL.low).toFixed(2));

                $('.cur-euro > .cur-min').html(parseFloat(data.EURBRL.low).toFixed(2));

                $('.cur-btc > .cur-min').html(parseFloat(data.BTCBRL.low).toFixed(3));
            }
        });
    }
})(jQuery);