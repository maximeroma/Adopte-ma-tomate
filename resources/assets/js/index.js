document.ready(function() {
	var map = L.map('mapid').setView([43.650000, 0.583333], 9);
	L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
	    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
	}).addTo(map);

	map.zoomControl.setPosition('topright');
	console.log('salut');
});