<?php
/*
Block Name: Map Block
Block Description: Text Title (Left) with introduction text to the right
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: wellington
*/

if( !empty(get_field('telephone_number','options'))) {
	$telephone_number = '<a href="telto:'.str_replace(' ','',str_replace('(0)','',get_field('telephone_number','options'))).'" title="Call Wellington Riding">'.get_field('telephone_number','options').'</a>'; } else { $telephone_number = '';};

if( !empty(get_field('email_address','options'))) { $email = '<a href="mailto:'.get_field('email_address','options').'" title="Email the team">'.get_field('email_address','options').'</a>'; } else { $email = ''; };

if( !empty(get_field('address','options'))) { $address = get_field('address','options'); } else { $address = ''; };
if( !empty(get_field('opening_hours','options'))) { $opening_hours = '<p>'.get_field('opening_hours','options').'</p>'; } else { $opening_hours = ''; };

?>

<script src="https://api.mapbox.com/mapbox.js/v2.4.0/mapbox.js" ></script>


<section id="htb-map-block">
<!--	<div class="map-info"><p><?php echo $address;?></p><p><?php echo $telephone_number;?><?php echo $email;?><?php echo $opening_hours;?></p></div> -->
<div id='map' class='panel contact-map custom-popup'></div>
</section>
<script>

var draggingValue = true;

	//touch specific
	if (Modernizr.touch) {
		draggingValue = false;
	}

	L.mapbox.accessToken = 'pk.eyJ1IjoiYm9uZ29qdWxlcyIsImEiOiJjaXJvZ28ycHUwYzdzdDFua3JqeGdyOTV6In0.PQOfUjkxgEw5L5VHkFWCKQ';
	var map = L.mapbox.map('map', 'bongojules.135fnfh0', {
		scrollWheelZoom: false,
		dragging: draggingValue
	}).setView([51.351,-0.980], 13);

	var styleLayer = L.mapbox.styleLayer('mapbox://styles/bongojules/citcnfg6r004z2ip6aione12c').addTo(map);

	map.on('zoomend', function(e) {
		// console.log(e.target._zoom);
		if (e.target._zoom < 13) {
			$("body").addClass('hide-markers');
		} else {
			$("body").removeClass('hide-markers');
		}
	});


	//touch specific
	if (Modernizr.touch) {
		if (map.tap) map.tap.disable();
	}

		//Farm Shop
		L.mapbox.featureLayer({
				type: 'Feature',
				geometry: {
						type: 'Point',
						coordinates: [-0.9743709999999908, 51.358691]
				},
				properties: {
						'marker-size': 'medium',
						'marker-color': '#004a33',
						'marker-symbol': 'circle'
				}
		}).addTo(map);

		//Country Park
		L.mapbox.featureLayer({
				type: 'Feature',
				geometry: {
						type: 'Point',
						coordinates: [-0.9592849999999942, 51.359321]
				},
				properties: {
						'marker-size': 'medium',
						'marker-color': '#004a33',
						'marker-symbol': 'circle'
				}
		}).addTo(map);

		//Riding
		L.mapbox.featureLayer({
				type: 'Feature',
				geometry: {
						type: 'Point',
						coordinates: [-0.9719, 51.3540]
				},
				properties: {
						'marker-size': 'medium',
						'marker-color': '#004a33',
						'marker-symbol': 'circle'
				}
		}).addTo(map);

		//Stratfield Saye House
		L.mapbox.featureLayer({
				type: 'Feature',
				geometry: {
						type: 'Point',
						coordinates: [-0.995883, 51.349707]
				},
				properties: {
						'marker-size': 'medium',
						'marker-color': '#004a33',
						'marker-symbol': 'circle'
				}
		}).addTo(map);

		//Estate Office
		L.mapbox.featureLayer({
				type: 'Feature',
				geometry: {
						type: 'Point',
						coordinates: [-1.004482, 51.358800]
				},
				properties: {
						'marker-size': 'medium',
						'marker-color': '#C49A6C',
						'marker-symbol': 'circle'
				}
		}).addTo(map);

		//School
		L.mapbox.featureLayer({
				type: 'Feature',
				geometry: {
						type: 'Point',
						coordinates: [-0.987825, 51.331486]
				},
				properties: {
						'marker-size': 'medium',
						'marker-color': '#004a33',
						'marker-symbol': 'circle'
				}
		}).addTo(map);

		//wellington arms
		L.mapbox.featureLayer({
				type: 'Feature',
				geometry: {
						type: 'Point',
						coordinates: [-0.999647, 51.337221]
				},
				properties: {
						'marker-size': 'medium',
						'marker-color': '#004a33',
						'marker-symbol': 'circle'
				}
		}).addTo(map);

	var markerLabel = L.popup({
			offset: (0, 0),
			closeButton: false,
			closeOnClick: false
		})
		.setLatLng([51.368,-0.9743709999999908])
		.setContent('<p class="marker-label pp_farmshop">WELLINGTON<br />FARM SHOP</p>')
		.addTo(map);
		

		

	var markerLabel = L.popup({
			offset: (0, 0),
			closeButton: false,
			closeOnClick: false
		})
		.setLatLng([51.360, -0.9583438207461457])
		.setContent('<p class="marker-label alt">WELLINGTON<br />COUNTRY<br />PARK</p>')
		.addTo(map);

	var markerLabel = L.popup({
			offset: (0, 0),
			closeButton: false,
			closeOnClick: false
		})
		.setLatLng([51.3545,-0.9719])
		.setContent('<p class="marker-label">WELLINGTON<br />RIDING</p>')
		.addTo(map);

	var markerLabel = L.popup({
			offset: (0, 0),
			closeButton: false,
			closeOnClick: false
		})
		.setLatLng([51.349707,-0.995883])
		.setContent('<p class="marker-label pp_house">STRATFIELD SAYE<br>HOUSE</p>')
		.addTo(map);

	var markerLabel = L.popup({
			offset: (0, 0),
			closeButton: false,
			closeOnClick: false
		})
		.setLatLng([51.358800,-1.004482])
		.setContent('<p class="marker-label pp_wes">WELLINGTON ESTATE OFFICE<br>& WELLBEING</p>')
		.addTo(map);

	var markerLabel = L.popup({
			offset: (0, 0),
			closeButton: false,
			closeOnClick: false
		})
		.setLatLng([51.331886,-0.987825])
		.setContent('<p class="marker-label pp_danes">DANESHILL SCHOOL</p>')
		.addTo(map);

	var markerLabel = L.popup({
			offset: (0, 0),
			closeButton: false,
			closeOnClick: false
		})
		.setLatLng([51.337921, -0.999647])
		.setContent('<p class="marker-label pp_warms">THE WELLINGTON<br>ARMS</p>')
		.addTo(map);
	</script>
