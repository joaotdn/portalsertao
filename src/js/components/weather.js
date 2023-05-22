(function ($) {
    // TODO check city and evite repeat
    const API_WEATHER_KEY = '97e4a06894a76c6c2eaa91f28272752d';
    const reverseGeocoder = new BDCReverseGeocode();
    let lat, lon;

    reverseGeocoder.getClientCoordinates(function(result) {
        localStorage.setItem('epb_location_lat', result.coords.latitude);
        localStorage.setItem('epb_location_lon', result.coords.longitude);

        lat = localStorage.getItem('epb_location_lat');
        lon = localStorage.getItem('epb_location_lon');

        $.ajax({
            url: `https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lon}&units=metric&appid=${API_WEATHER_KEY}`
        })
            .done(function (html) {
                $('.temp-max').html(`<i class="fa-solid fa-temperature-arrow-up"></i> ${parseInt(html.main.temp_max)}°`);
                $('.temp-min').html(`<i class="fa-solid fa-temperature-arrow-down"></i> ${parseInt(html.main.temp_min)}°`);
            });
    });
})(jQuery);

