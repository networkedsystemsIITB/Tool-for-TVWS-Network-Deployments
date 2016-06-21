<html>
<head>
<title>TV Whitespace Demo</title>
</head>
<body>
<h1><center>TV Whitespace Demo</center></h1>
<?php

/*<?php
if ($_POST['run'] == true)
{
  //CODE TO UPDATE THE DATABASE.
  //Use PDO or MySqli functions. Or you will be vulnerable to SQL Injection.
  echo "php success"; 
}
else
{
  echo "php failure";
}*/


function readLatCSV($csvFile)
{
	$file_handle = fopen($csvFile, 'r');
	while (!feof($file_handle))
	{
		$latPoint[] = fgetcsv($file_handle)[1];
	}
	fclose($file_handle);
	return $latPoint;
}
function readLongCSV($csvFile)
{
	$file_handle = fopen($csvFile, 'r');
	while (!feof($file_handle))
	{
		$longPoint[] = fgetcsv($file_handle)[2];
	}
	fclose($file_handle);
	return $longPoint;
}
function readPlaceCSV($csvFile)
{
	$file_handle = fopen($csvFile, 'r');
	while (!feof($file_handle))
	{
		$Place[] = fgetcsv($file_handle)[0];
	}
	fclose($file_handle);
	return $Place;
}
function readCoverageCSV($csvFile)
{
	$file_handle = fopen($csvFile, 'r');
	while (!feof($file_handle))
	{
		$Coverage[] = fgetcsv($file_handle)[4];
	}
	fclose($file_handle);
	return $Coverage;
}
$csvFile = 'Plot_Lat_Long.csv';
$csvLat = readLatCSV($csvFile);
$csvLong = readLongCSV($csvFile);
$csvPlace = readPlaceCSV($csvFile);
$csvCoverage = readCoverageCSV($csvFile);
$data = array($csvLat, $csvLong, $csvPlace, $csvCoverage);
function merge_common_keys()
{
	$arr = func_get_args();
	$num = func_num_args();
	$keys = array();
	$i = 0;
	for ($i=0; $i<$num; ++$i)
	{
		$keys = array_merge($keys, array_keys($arr[$i]));
	}
	$keys = array_unique($keys);
	$merged = array();
	foreach ($keys as $key)
	{
		$merged[$key] = array();
		for($i=0; $i<$num; ++$i)
		{
			$merged[$key][] = isset($arr[$i][$key]) ? $arr[$i][$key] : null;
		}
	}
	return $merged;
}
$merged = merge_common_keys($csvLat, $csvLong, $csvPlace, $csvCoverage);
foreach ($merged as &$arr)
{
	$arr['lat'] = $arr[0];
	unset($arr[0]);
	$arr['long'] = $arr[1];
	unset($arr[1]);
	$arr['place'] = $arr[2];
	unset($arr[2]);
	$arr['coverage'] = $arr[3];
	unset($arr[3]);
}
unset ($merged[count($merged)-1]);

$result = json_encode($merged);

$file = fopen('result.json','w+');
fwrite($file, $result);
fclose($file);

/*$anyData = $_POST['anyData'];
function getAnswer ($inp){
	//logic goes here
	return "a string of some sort";
}
echo getAnswer($anyData);*/

?>

<script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script type="text/javascript">
var markers = <?php echo json_encode($merged);?>;
window.onload = function ()
{
	var mapOptions = {center: new google.maps.LatLng(markers[0].lat, markers[0].long), zoom: 10, mapTypeId: google.maps.MapTypeId.ROADMAP};
	var map = new google.maps.Map(document.getElementById("map"), mapOptions);
	var infoWindow = new google.maps.InfoWindow();
	var lat_lng = new Array();
	var latlngbounds = new google.maps.LatLngBounds();
	for (i = 0; i < markers.length; i++)
	{
		var data = markers[i]
		var myLatlng = new google.maps.LatLng(data.lat, data.long);
		lat_lng.push(myLatlng);
		var marker = new google.maps.Marker({position: myLatlng, map: map});
		var circle = new google.maps.Circle({map: map, center: myLatlng, radius: data.coverage * 1000, fillColor: '#AA0000'});
		latlngbounds.extend(marker.position);
		circle.bindTo('center', marker, 'position');
		(function (marker, data)
		{
			google.maps.event.addListener(marker, "click", function (e)
			{
				infoWindow.setContent(data.place);
				infoWindow.open(map, marker);
			});
		})(marker, data);		
	}
	map.setCenter(latlngbounds.getCenter());
	//map.setCenter(new google.maps.LatLng(lat, long));
	map.fitBounds(latlngbounds);
}
</script>
<div id="map" align="center" style="width: 1000px; height: 1000px;"></div>
</body>
</html>
