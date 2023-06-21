(function ($) {
    const monthNames = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho",
        "Julho", "Agosto", "Setemrbro", "Outubro", "Novembro", "Dezembro"
    ];
    let d = new Date();
    let dd = String(d.getDate()).padStart(2, '0');
    let MM = monthNames[d.getMonth()];
    const currentHour = d.getHours().toString().padStart(2, "0");
    const currentMinute = d.getMinutes().toString().padStart(2, "0");
    // let yyyy = d.getFullYear();
    $('.current-date').html(dd + ' de ' + MM);
    $('.current-hour').html(`${currentHour}:${currentMinute}`);;
})(jQuery);