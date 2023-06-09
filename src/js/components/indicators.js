(function ($) {
    if ($('.ps-coins-indicators').length) {
        $.ajax({
            url: 'http://economia.awesomeapi.com.br/json/last/USD-BRL,EUR-BRL,BTC-BRL,ARS-BRL,GBP-BRL',
            success: function (data) {
                $('.cur-usd > .cur-min').html(parseFloat(data.USDBRL.low).toFixed(2));

                $('.cur-euro > .cur-min').html(parseFloat(data.EURBRL.low).toFixed(2));

                $('.cur-btc > .cur-min').html(parseFloat(data.BTCBRL.low).toFixed(3));

                $('.cur-ars > .cur-min').html(parseFloat(data.ARSBRL.low).toFixed(3));
                
                // $('.cur-gbp > .cur-min').html(parseFloat(data.GBPBRL.low).toFixed(3));
            }
        });
    }
})(jQuery);