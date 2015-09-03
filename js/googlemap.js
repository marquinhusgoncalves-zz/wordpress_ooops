	function initialize() {

		var myLatlng = new google.maps.LatLng(-23.630645, -46.547307,17);
		var mapOptions = {
			zoom: 18,
			center: myLatlng,
			disableDefaultUI: false,
			scrollwheel: false,
			draggable: false
		}
		var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

		var marker = new google.maps.Marker({
			position: myLatlng,
			map: map,
			title: 'OOOPS Buffet'
		});
		var styles = [{
				featureType: "road",
				elementType: "geometry",
				stylers: [
					{ lightness: 100 },
					{ visibility: "simplified" }
				]
			},{
				featureType: "road.local",
				elementType: "labels",
			}
		];
		map.setOptions({styles: styles});
	}
	google.maps.event.addDomListener(window, 'load', initialize);