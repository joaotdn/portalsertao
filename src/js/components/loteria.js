(function ($) {
    if ($('.ps-loterica-results').length) {
        const loteriasCaixa = [];
        const loteriasResults = [
            "mega-sena",
            "lotofacil",
            "quina",
            "lotomania"
            // "dupla-sena"
        ];

        $.ajax("https://loteriascaixa-api.herokuapp.com/api")
            .done(function (data) {
                data.forEach((loteria) => {
                    if (!!loteriasResults.find((l) => l === loteria)) {
                        loteriasCaixa.push(loteria)
                    }
                })

                if (loteriasCaixa.length) {
                    $('*[data-loterica]').each(function () {
                        const loteria = $(this).data('loterica');
                        const _ = $(this);

                        if (!!loteriasCaixa.find((l) => l === loteria)) {
                            $.ajax("https://loteriascaixa-api.herokuapp.com/api/" + loteria + "/latest")
                                .done(function (data) {
                                    data.dezenas.forEach((value) => {
                                        _.find('.accordion-body').append('<span>' + value + '</span>');
                                    })
                                })
                        }
                    })
                }
            });
    }
})(jQuery);