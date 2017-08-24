var gMap = {
  params: {
    map: "",
    styled_map: ""
  },
  initGMap: function() {
    var that = this;

    var mapOptions = {
      center: new google.maps.LatLng(11.555195, 104.894626),
      styles: [
  {
    "featureType": "administrative",
    "elementType": "labels.text.fill",
    "stylers": [
        {
            "color": "#322d2a"
        }
    ]
  },
  {
    "featureType": "administrative",
    "elementType": "labels.text.stroke",
    "stylers": [
        {
            "color": "#ffffff"
        },
        {
            "weight": "3"
        }
    ]
  },
  {
    "featureType": "landscape",
    "elementType": "geometry",
    "stylers": [
        {
            "color": "#fafafa"
        }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "all",
    "stylers": [
        {
            "visibility": "simplified"
        }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels",
    "stylers": [
        {
            "visibility": "off"
        }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "all",
    "stylers": [
        {
            "visibility": "on"
        }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry.fill",
    "stylers": [
        {
            "saturation": "0"
        },
        {
            "lightness": "50"
        },
        {
            "gamma": "1.00"
        }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
        {
            "color": "#322d2a"
        },
        {
            "lightness": "50"
        },
        {
            "gamma": "1"
        }
    ]
  },
  {
    "featureType": "road",
    "elementType": "labels.text.fill",
    "stylers": [
        {
            "color": "#322d2a"
        }
    ]
  },
  {
    "featureType": "road",
    "elementType": "labels.text.stroke",
    "stylers": [
        {
            "visibility": "on"
        },
        {
            "color": "#ffffff"
        },
        {
            "weight": "3"
        }
    ]
  },
  {
    "featureType": "road",
    "elementType": "labels.icon",
    "stylers": [
        {
            "visibility": "on"
        },
        {
            "saturation": "-100"
        }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry.fill",
    "stylers": [
        {
            "color": "#f58220"
        }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.fill",
    "stylers": [
        {
            "color": "#322d2a"
        }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.stroke",
    "stylers": [
        {
            "visibility": "on"
        },
        {
            "color": "#ffffff"
        },
        {
            "weight": "3"
        }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "geometry.fill",
    "stylers": [
        {
            "color": "#322d2a"
        },
        {
            "lightness": "40"
        },
        {
            "gamma": "1.00"
        }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "geometry.fill",
    "stylers": [
        {
            "color": "#ece5e3"
        },
        {
            "lightness": "-10"
        },
        {
            "gamma": "1"
        }
    ]
  },
  {
    "featureType": "transit",
    "elementType": "all",
    "stylers": [
        {
            "visibility": "off"
        }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "labels.icon",
    "stylers": [
        {
            "visibility": "off"
        }
    ]
  },
  {
    "featureType": "transit.station.airport",
    "elementType": "geometry.fill",
    "stylers": [
        {
            "visibility": "simplified"
        }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry.fill",
    "stylers": [
        {
            "color": "#ece5e3"
        },
        {
            "visibility": "on"
        }
    ]
  }
  ],
      zoom: 14,
      gestureHandling: 'cooperative'
    };

    var $inner = $('<div style="width: 100%; height: 100%"></div>').appendTo('#map-canvas');

    var map = new google.maps.Map($inner[0], mapOptions);

    var image = "wp-content/themes/gk-engineering/assets/img/marker-gmap.png";

    var marker = new google.maps.Marker({
      position: new google.maps.LatLng(11.555195, 104.894626),
      map: map,
      title: "GK Engineering",
      icon: image
    });
  },
  destroy: function() {
    $("#map-canvas div").remove();
  },
  init: function() {
    var that = this;
    that.initGMap();
    //google.maps.event.addDomListener(window, "load", that.initGMap);
  }
}
