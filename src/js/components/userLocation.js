
(function ($) {
    // TODO check city
    if (!localStorage.getItem('epb_location_city')) {
        let reverseGeocoder = new BDCReverseGeocode();
        reverseGeocoder.getClientLocation(function (result) {
            localStorage.setItem('epb_location_city', result.city);
            $('.current-city').html(localStorage.getItem('epb_location_city') + ', ');
        });
    } else {
        $('.current-city').html(localStorage.getItem('epb_location_city') + ', ');
    }
})(jQuery);