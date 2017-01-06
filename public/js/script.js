$(document).ready(function(){

    var map;
    var srl = new google.maps.LatLng(7.8731,80.7718);
    var srl_uor = new google.maps.LatLng(5.9408,80.5765);
    var srl_cmb = new google.maps.LatLng(6.9247,79.8756);
    var srl_kandy = new google.maps.LatLng(7.2897,80.6480);


    //create map
    function createMap(srl) {

        map = new google.maps.Map(document.getElementById('map'), {
            center: srl,
            scrollwheel: true,
            zoom: 7
        });
    }



    //create markers
    function createMarker(latlang,icn,name) {

        var marker = new google.maps.Marker({
            position: latlang,
            map: map,
            icon: icn,
            title: name
        });

    }



    //nearby search

    function nearbySearch(mylng, type) {

        var request = {
            location: mylng,
            radius: '1500',
            types: [type]
        };

        service = new google.maps.places.PlacesService(map);
        service.nearbySearch(request, callback);

        function callback(results, status) {

            // console.log(results);

            if (status == google.maps.places.PlacesServiceStatus.OK) {
                for (var i = 0; i < results.length; i++) {
                    var place = results[i];

                    latlng= place.geometry.location;
                    icn= 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
                    name = place.name;

                    createMarker(latlng,icn, name);
                }
            }
        }
    }


    createMap(srl);



    var marker1 = new google.maps.Marker({
        position: {lat: 5.9408, lng: 80.5765},
        map: map,
        title: 'University of Ruhuna (DCEU Head Office)'
    });

    var marker2 = new google.maps.Marker({
        position: {lat: 6.9247, lng: 79.8756},
        map: map,
        title: 'Examination Center (Nalanda College)'
    });

    var marker3 = new google.maps.Marker({
        position: {lat: 7.2897, lng: 80.6480},
        map: map,
        title: 'Examination Center (Dharmaraja College)'
    });
    nearbySearch(mylng = srl_uor,"school");
    nearbySearch(mylng = srl_cmb, "school");
    nearbySearch(mylng = srl_kandy, "school");
});