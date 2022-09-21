<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<title>Google Maps Example</title>
<link rel = "icon" href ="ICON.png" 
        type = "image/x-icon"> 
<style type="text/css">
body { font: normal 14px Verdana; }
h1 { font-size: 24px; }
h2 { font-size: 18px; }
#sidebar { float: right; width: 30%; }
#main { padding-right: 15px; }
.infoWindow { width: 220px; }
</style>
      <style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 10px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  align:left;
  background-color: #f1f1f1;
  min-width: 150px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;

}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd; float: left;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>





<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">





var map;

var center = new google.maps.LatLng(20.7323134,76.5672769);

function init() {

var mapOptions = {
zoom: 13,
center: center,
mapTypeId: google.maps.MapTypeId.ROADMAP
}

map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);

var marker = new google.maps.Marker({
map: map,
position: center,
});
}
//]]>
</script>
</head>
<body onload="init();" style="background:grey;" >

<h1>Location of grabage</h1>

<section id="sidebar">
<div id="directions_panel"></div>
</section>

<section id="main">
<div id="map_canvas" align="center" style="width: 105%; height: 350px;"></div>
</section><h1><img src="arrow.png"></img><div class="text">
you can click on Google to see location in google map's app or website</div></h1>
</body>
</html>