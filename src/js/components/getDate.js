(function ($) {
    const monthNames = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho",
        "Julho", "Agosto", "Setemrbro", "Outubro", "Novembro", "Dezembro"
    ];
    let d = new Date();
    let dd = String(d.getDate()).padStart(2, '0');
    let MM =  monthNames[d.getMonth()];
    // let yyyy = d.getFullYear();
    $('.current-date').html(dd + ' de ' + MM);
})(jQuery);