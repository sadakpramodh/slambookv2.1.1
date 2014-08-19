  <script language="javascript">
	 var geo;
function getLocation()
  {
  if (navigator.geolocation)
    {
    navigator.geolocation.watchPosition(showPosition);
    }
  else{alert("Geolocation is not supported by this browser.");}
  }
function showPosition(position)
  {
  document.write("<n1>please copy and paste coordinates in Earth Coordinates(Longitude,Latitude): filed <br> Latitude: </h1>" + position.coords.latitude +  "  Longitude: " + position.coords.longitude); 
  }
</script>
	
<html>
<body onLoad="getLocation()">

</body>
</html>
