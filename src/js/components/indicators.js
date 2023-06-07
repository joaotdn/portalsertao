(function ($) {
    if ($('.ps-coins-indicators').length) {
        $.ajax({
            url: 'http://economia.awesomeapi.com.br/json/last/USD-BRL,EUR-BRL,BTC-BRL',
            success: function (data) {
                $('.cur-usd > .cur-min').html(parseFloat(data.USDBRL.low).toFixed(2));
                $('.cur-usd > .cur-max').html(parseFloat(data.USDBRL.high).toFixed(2));

                $('.cur-euro > .cur-min').html(parseFloat(data.EURBRL.low).toFixed(2));
                $('.cur-euro > .cur-max').html(parseFloat(data.EURBRL.high).toFixed(2));

                $('.cur-btc > .cur-min').html(parseFloat(data.BTCBRL.low).toFixed(3));
                $('.cur-btc > .cur-max').html(parseFloat(data.BTCBRL.high).toFixed(3));
            }
        });
    }
})(jQuery);