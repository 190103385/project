ymaps.ready(function () {
    var myMap = new ymaps.Map('map', {
            center: [37.325, 237.970],
            zoom: 9
        }, {
            searchControlProvider: 'yandex#search'
        }),

        MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
            '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
        ),

        myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
            hintContent: 'Apple',
            balloonContent: 'This is where approximately Apple park located'
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'placemark.png',
            iconImageSize: [30, 42],
            iconImageOffset: [-5, -38]
        });

    myMap.geoObjects
        .add(myPlacemark)
        .add(myPlacemarkWithContent);
});