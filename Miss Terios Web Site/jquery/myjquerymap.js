 function initialize() {
    var myOptions = {
      zoom: 18,
      center: new google.maps.LatLng(	8.990821, -79.521131),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(document.getElementById("map_canvas"),
                                  myOptions);

    var image = 'images/map_icon.png';
   
   /*FOR LOCATION IN missterios*/
    var missteriosLatLng = new google.maps.LatLng(8.990821, -79.521131);
    var missteriosMarker = new google.maps.Marker({
        position: missteriosLatLng,
        map: map,
        icon: image,
		title: ' Local #7, Galerías Obarrio a lado de EPago y MOVICELL'
    });
	
	 var missteriosString = '<div id="content">'+
        '<div id="siteNotice">'+
        '</div>'+
        '<h1 id="firstHeading" class="firstHeading">Miss Terios</h1>'+
        '<div id="bodyContent">'+
        '<p>Tel. 214-3686/85</b>,  ' +
        'missterios@gmail.com '
         '</div>'+
        '</div>';
        
    var missterioswindow = new google.maps.InfoWindow({
        content: missteriosString
    });

 
	google.maps.event.addListener(missteriosMarker, 'click', function() {
      missterioswindow.open(map,missteriosMarker);
	  seawindow.close(map,seaMarker);
	  sfrawindow.close(map,sfraMarker);
    });
	

  }