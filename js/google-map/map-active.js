var map;
var latlng = new google.maps.LatLng(36.7710834, -1.3379261);
var stylez = [{
    featureType: "all",
    elementType: "all",
    stylers: [{
        saturation: -10
            }]
        }];
var mapOptions = {
    zoom: 15,
    center: latlng,
    scrollwheel: false,
    scaleControl: false,
    disableDefaultUI: true,
    mapTypeControlOptions: {
        mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'gMap']
    }
};
map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);
var geocoder_map = new google.maps.Geocoder();
var address = 'Wildlife Clubs of Kenya Headquarters Nairobi';
geocoder_map.geocode({
    'address': address
}, function (results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
        map.setCenter(results[0].geometry.location);
        var marker = new google.maps.Marker({
            map: map,
            position: map.getCenter()
        });
    } else {
        alert("Geocode was not successful for the following reason: " + status);
    }
});
var mapType = new google.maps.StyledMapType(stylez, {
    name: "Grayscale"
});
map.mapTypes.set('gMap', mapType);
map.setMapTypeId('gMap');