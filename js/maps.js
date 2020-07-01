(function($) {
	/*
	 *  new_map
	 *
	 *  This function will render a Google Map onto the selected jQuery element
	 *
	 *  @type	function
	 *  @date	8/11/2013
	 *  @since	4.3.0
	 *
	 *  @param	$el (jQuery element)
	 *  @return	n/a
	 */
	function new_map($el) {
		// var
		var $markers = $el.find('.marker');

		function ZoomControl(controlDiv, map) {
			// Creating divs & styles for custom zoom control
			controlDiv.style.padding = '5px';
			// Set CSS for the control wrapper
			var controlWrapper = document.createElement('div');
			controlWrapper.style.backgroundColor = 'transparent';
			controlWrapper.style.borderWidth = '0px';
			controlWrapper.style.cursor = 'pointer';
			controlWrapper.style.textAlign = 'center';
			controlWrapper.style.width = '40px';
			controlWrapper.style.height = '100px';
			controlWrapper.style.padding = '20px';
			controlDiv.appendChild(controlWrapper);
			// Set CSS for the zoomIn
			var zoomInButton = document.createElement('div');
			zoomInButton.style.width = '40px';
			zoomInButton.style.height = '40px';
			zoomInButton.style.marginBottom = '10px';
			/* Change this to be the .png image you want to use */
			zoomInButton.style.backgroundImage = 'url("/wp-content/themes/right-step-2015/img/zoomin.png")';
			controlWrapper.appendChild(zoomInButton);
			// Set CSS for the zoomOut
			var zoomOutButton = document.createElement('div');
			zoomOutButton.style.width = '40px';
			zoomOutButton.style.height = '40px';
			/* Change this to be the .png image you want to use */
			zoomOutButton.style.backgroundImage = 'url("/wp-content/themes/right-step-2015/img/zoomout.png")';
			controlWrapper.appendChild(zoomOutButton);
			// Setup the click event listener - zoomIn
			google.maps.event.addDomListener(zoomInButton, 'click', function() {
				map.setZoom(map.getZoom() + 1);
			});
			// Setup the click event listener - zoomOut
			google.maps.event.addDomListener(zoomOutButton, 'click', function() {
				map.setZoom(map.getZoom() - 1);
			});
		}
		// vars
		var isDraggable = $(document).width() > 480 ? true : false;
		var args = {
			zoom: 16,
			center: new google.maps.LatLng(0, 0),
			panControl: false,
			draggable: isDraggable,
			disableDefaultUI: false,
			mapTypeControl: true,
			mapTypeControlOptions: {
				style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
				position: google.maps.ControlPosition.TOP_CENTER
			},
			zoomControl: true,
			zoomControlOptions: {
				position: google.maps.ControlPosition.LEFT_CENTER
			},
			scaleControl: true,
			streetViewControl: true,
			streetViewControlOptions: {
				position: google.maps.ControlPosition.LEFT_TOP
			},
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			styles: [
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e6e4e1"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#555048"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "administrative",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#c9b2a6"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#dcd7cf"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#ae9e90"
      }
    ]
  },
  {
    "featureType": "landscape.natural",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e6e4e1"
      },
      {
        "lightness": 15
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e6e4e1"
      },
      {
        "lightness": -20
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#93817c"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#c7c9b3"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#747757"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#fdfcf8"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#b4764d"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#b4764d"
      }
    ]
  },
  {
    "featureType": "road.highway.controlled_access",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#b69e67"
      }
    ]
  },
  {
    "featureType": "road.highway.controlled_access",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#b69e67"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#806b63"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e6e4e1"
      },
      {
        "lightness": -65
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#8f7d77"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e6e4e1"
      },
      {
        "lightness": -30
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#b5c6ce"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#92998d"
      }
    ]
  }
]
		};
		// create map	        	
		var map = new google.maps.Map($el[0], args);
		// add a markers reference
		map.markers = [];
		// add markers
		$markers.each(function() {
			add_marker($(this), map);
		});
		// center map
		center_map(map);
		// return
		return map;
	}
	/*
	 *  add_marker
	 *
	 *  This function will add a marker to the selected Google Map
	 *
	 *  @type	function
	 *  @date	8/11/2013
	 *  @since	4.3.0
	 *
	 *  @param	$marker (jQuery element)
	 *  @param	map (Google Map object)
	 *  @return	n/a
	 */
	function add_marker($marker, map) {
		// var
		var latlng = new google.maps.LatLng($marker.attr('data-lat'), $marker.attr('data-lng'));
		// create marker
		var marker = new google.maps.Marker({
			position: latlng,
			map: map,
			animation: google.maps.Animation.DROP,
			icon: '/wp-content/themes/the-ranch-2018/img/marker.svg'
		});
		// add to array
		map.markers.push(marker);
		// if marker contains HTML, add it to an infoWindow
		if ($marker.html()) {
			//create info window
			var infowindow = new google.maps.InfoWindow({
				content: '<div></div>'
			});
			// show info window when marker is clicked
			//google.maps.event.addListener(marker, 'click', function() {
			// infowindow.close();
			//infowindow.open( map, marker );
			//});
			liTag = $("body").find("[data-lat='" + $marker.attr('data-lat') + "']");
			// console.log(liTag);
			// show info window when marker is clicked
			$(liTag).click(function() {
				infowindow.setContent($marker.html());
				infowindow.open(map, marker);
			});
			google.maps.event.addListener(marker, 'click', function() {
				infowindow.setContent($marker.html());
				infowindow.open(map, marker);
			});
			// close info window when map is clicked
			google.maps.event.addListener(map, 'click', function(event) {
				if (infowindow) {
					infowindow.close();
				}
			});
		}
	}
	/*
	 *  center_map
	 *
	 *  This function will center the map, showing all markers attached to this map
	 *
	 *  @type	function
	 *  @date	8/11/2013
	 *  @since	4.3.0
	 *
	 *  @param	map (Google Map object)
	 *  @return	n/a
	 */
	function center_map(map) {
		// vars
		var bounds = new google.maps.LatLngBounds();
		// loop through all markers and create bounds
		$.each(map.markers, function(i, marker) {
			var latlng = new google.maps.LatLng(marker.position.lat(), marker.position.lng());
			bounds.extend(latlng);
		});
		// only 1 marker?
		if (map.markers.length == 1) {
			// set center of map
			map.setCenter(bounds.getCenter());
			map.setZoom(16);
		} else {
			// fit to bounds
			map.fitBounds(bounds);
		}
	}
	/*
	 *  document ready
	 *
	 *  This function will render each map when the document is ready (page has loaded)
	 *
	 *  @type	function
	 *  @date	8/11/2013
	 *  @since	5.0.0
	 *
	 *  @param	n/a
	 *  @return	n/a
	 */
	// global var
	var map = null;
	$(document).ready(function() {
		$('.acf-map').each(function() {
			// create map
			map = new_map($(this));
		});
	});
})(jQuery);