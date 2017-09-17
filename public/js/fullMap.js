$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
var map;
var lieuxList;

$(document).ready(function() {

	map = L.map('mapid').setView([43.650000, 0.583333], 9);
	L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
	    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
	}).addTo(map);

	map.zoomControl.setPosition('topright');
	var marker = new L.Marker([46.947, 7.4448]).on('mouseover', markerOnClick);
	marker.idlieu = 4;
	marker.addTo(map);
	
	console.log('coucou');




	$.ajax({
      type: 'GET',
      url:'lieux',
      dataType: 'json',
      success: function(data){
            lieuxList = data;
            drawMarker();
            // addAvatarToLieu();

      },

      error: function(ajaxRequest, textStatus, errorThrown) {
            console.warn("ajax error: status: "+textStatus+", error: "+errorThrown, ajaxRequest, this);
      }
	});

});



function markerOnClick () {

}

function drawMarker(){
    if(lieuxList.length > 0){

    for (var i = 0; i < lieuxList.length; i++) {

        var marker = L.marker( [lieuxList[i].latitude, lieuxList[i].longitude]).on('click', markerOnClick);
        marker.idlieuMarker = lieuxList[i].id;

        marker.addTo(map);

        // marker.bindPopup('<div class="card4" style="width:15em;"><header class="container1"><h3>'+lieuxList[i].name+'</h3><i class="'+typesLieux[lieuxList[i].typeLieu-1].icon+' fa-2x" title="'+typesLieux[lieuxList[i].typeLieu-1].name+'" aria-hidden="true"></i></header><div class="kopcontrol container2"><i title="m\'ajouter a ce lieu" data-idlieu="'+lieuxList[i].id+'"  class="fa fa-plus-circle fa-2x kopPointeur lieuuser " aria-hidden="true"></i><img src="'+lieuxList[i].photo+'"></div><footer class="container3"><p>'+lieuxList[i].descriptif+'</p><div class="extra content" ><div class="insertUserDiv right floated author" data-idlieuToUser="'+lieuxList[i].id+'" ></div></div></footer></div>');
        marker.bindPopup('<div class="card"><div class="card-block"><h3 class="card-title">Un jardin</h3><img src="res/defaultJardin.jpg"></img><p class="card-text"><strong>superficie:</strong> 400m² </p><p><strong>info: </strong><a href="/brigade"><i class="fa fa-lg fa-plus-circle" aria-hidden="true"></i></a></p><p class="card-text"><strong>besoins: </strong>desherbage, elagage</p><p class="card-text">un jardin au calme avec de la salade</p></div></div>');

    }

  }

}