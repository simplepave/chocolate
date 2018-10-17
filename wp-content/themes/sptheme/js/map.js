function initMap() {
    var centerLatLng = new google.maps.LatLng(55.716488, 37.695192);
    var mapOptions = {
        center: centerLatLng,
        zoom: 16
		
    };
 
    var map = new google.maps.Map(document.getElementById("map"), mapOptions);
 
    var marker = new google.maps.Marker({
        position: centerLatLng,               
        map: map,                            
        title: " ООО «СкетчПринт», Москва, ул. Угрешская, д. 31, офис 310 ", 
        icon: "images/marker.png"   
		          
    });
	
}
google.maps.event.addDomListener(window, "load", initMap);
