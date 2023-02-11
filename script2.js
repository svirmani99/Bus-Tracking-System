var x = document.getElementById("demo");
var y = document.getElementById("demo2");
function getLocation() {
if (navigator.geolocation) {
navigator.geolocation.getCurrentPosition(showPosition);
} else {
x.innerHTML = "Geolocation is not supported by this browser.";
}
}
function showPosition(position) {
x.innerHTML = "Latitude: " + position.coords.latitude +
"<br>Longitude: " + position.coords.longitude;

var latlong = position.coords.latitude + "," + position.coords.longitude;
        
        // Set Google map source url
        var mapLink = "https://maps.googleapis.com/maps/api/staticmap?center="+latlong+"&zoom=16&size=400x300&output=embed";
        
        // Create and insert Google map
        document.getElementById("embedMap").innerHTML = "<img alt='Map Holder' src='"+ mapLink +"'>";












var latitudeTo = position.coords.latitude ; 
var longitudeTo = position.coords.longitude;

var latitudeFrom = 28.7041; 
var longitudeFrom = 77.1025;

		   var long1 = (longitudeFrom*Math.PI)/180; 
           var long2 = (longitudeTo*Math.PI)/180; 
           var lat1 = (latitudeFrom*Math.PI)/180; 
           var lat2 = (latitudeTo*Math.PI)/180; 

          
               
           var dlong = long2 - long1; 
           var dlati = lat2 - lat1; 
              
           var val = Math.pow(Math.sin(dlati/2.0),2.0)+Math.cos(lat1)*Math.cos(lat2)*Math.pow(Math.sin(dlong/2.0),2.0); 

           
              
           var res = 2 * Math.asin(Math.sqrt(val)); 

         
           var radius = 3958.756; 
           var t=res*radius*1.609;



y.innerHTML="Distance: "+t;
}

