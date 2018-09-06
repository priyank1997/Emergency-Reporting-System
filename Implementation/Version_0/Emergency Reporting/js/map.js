         var locations = [
            ['Fire Emerency', 23.1885469,72.62902940000001, 1],
            ['Heat Wave Emerency', 23.187436,72.627967, 2],
            ['Exam Emerency', 23.1871303,72.6268646, 3],
            ['Emerency X', 23.1875593,72.6268566, 4],
            ['Emegency Y', 23.1886515,72.6280636, 5],
            ['Food Emerency', 23.1884518,72.6270872, 6]
        ];
 
        function InitMap() {
 
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: new google.maps.LatLng(23.188546, 72.629029),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });
 
            var infowindow = new google.maps.InfoWindow();
 
            var marker, i;
 
            for (i = 0; i < locations.length; i++) {
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                    map: map
                });
 
                google.maps.event.addListener(marker, 'click', (function (marker, i) {
                    return function () {
                        infowindow.setContent(locations[i][0]);
                        infowindow.open(map, marker);
                    }
                })(marker, i));
            }
        }