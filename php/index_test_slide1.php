<!DOCTYPE html>
<html lang='en'>
<head>
<title>TV White Space Simulation</title>
<meta charset='utf-8' />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content='' name='description' />
<meta content='' name='author' />
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/custom.css"/>
</head>

<body>
	<div class='navbar navbar-default navbar-static-top'>
		<div class='container-fluid'>
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<img src="images/1.png" alt="HTML5 Icon" width="330" height="38"> <a class='navbar-brand' href='index_test.html'/><font color="black"><b></b></font></a>
				<img src="images/logo.gif" alt="HTML5 Icon" width="50" height="50"> <a class='navbar-brand' href='index_test.html'/><font color="black"><b></b></font></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class='active'><a href="index_test.html">Map</a></li>
					<li><a href="about.html">Output Section</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="about.html">Contacts</a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<div class='container-fluid'>
		<div class='row'>
			<div class='col-md-4'>
				<div class='well'>
					<h4>
						<!--Select Location <small>(<a id='find_me' href='#'>find me</a>)</small>-->
					</h4>
	
					<?php
					if (isset ($_POST['run']))
					{
						echo "php success";
					}
					?>
					
					<h4>General Specifications</h4>
					
					<div class='row'>
					<ul>
					Receiver Sensitivity (dBm):
					<label>
					<?php
					if(isset ($_POST['rx_sensitivity']))
					{
						echo $_POST['rx_sensitivity'];
					}
					?>					
					</label>
					</ul>
					</div>
					
					<div class='row'>
					<ul>
					Transmit Power (dBm):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<label>
					<?php
					if(isset ($_POST['transmit_power']))
					{
						echo $_POST['transmit_power'];
					}
					?>
					</label>
					</ul>
					</div>
					
					<div class='row'>
					<ul>
					Simulation Time (s):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<label>
					<?php
					if(isset ($_POST['simulation_time']))
					{
						echo $_POST['simulation_time'];
					}
					?>
					</label>
					</ul>
					</div>
					
					<h4>MAC Protocol Specifications</h4>
					
					<div class='row'>
					<ul>
					<label>
					<?php
					if (isset ($_POST['compare']))
					{
						if ($_POST['compare'] == "tdma")
							echo "You have selected : TDMA";
							
						else if ($_POST['compare'] == "csma")
							echo "You have selected : CSMA";
						
						if ($_POST['compare'] == "tdma")
						{
							?>
							</label>
							</ul>
							</div>
					
							<div class='row'>
							<ul>
							<label>
							<?php
							if (isset ($_POST['channel_options']))
							{
								if ($_POST['channel_options'] == "1")
									echo "Channel selected: 1";
							
								else if ($_POST['channel_options'] == "2")
									echo "Channel selected: 2";
							
								else if ($_POST['channel_options'] == "3")
									echo "Channel selected: 3";
						
								else if ($_POST['channel_options'] == "4")
									echo "Channel selected: 4";
						
								else if ($_POST['channel_options'] == "5")
									echo "Channel selected: 5";
						
								else if ($_POST['channel_options'] == "6")
									echo "Channel selected: 6";
						
								else if ($_POST['channel_options'] == "7")
									echo "Channel selected: 7";
						
								else if ($_POST['channel_options'] == "8")
									echo "Channel selected: 8";
						
								else if ($_POST['channel_options'] == "9")
									echo "Channel selected: 9";
						
								else if ($_POST['channel_options'] == "10")
									echo "Channel selected: 10";
						
								else if ($_POST['channel_options'] == "11")
									echo "Channel selected: 11";
							}
							?>
							</label>
							</ul>
							</div>
					
							<div class='row'>
							<ul>
							Slot Time (ms):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<label>
							<?php
							if(isset ($_POST['slot_time']))
							{
								echo $_POST['slot_time'];
							}
							?>
							</label>
							</ul>
							</div>
					
							<div class='row'>
							<ul>
							Guard Interval (us):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<label>
							<?php
							if(isset ($_POST['guard_interval']))
							{
								echo $_POST['guard_interval'];
							}
							?>
							</label>
							</ul>
							</div>
					
							<div class='row'>
							<ul>
							Interframe Space (ns):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<label>
							<?php
							if(isset ($_POST['ifs']))
							{
								echo $_POST['ifs'];
							}
							?>
							</label>
							</ul>
							</div>
					
							<div class='row'>
							<ul>
							Channel Width (MHz):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<label>
							<?php
							if(isset ($_POST['width']))
							{
								echo $_POST['width'];
							}
							?>
							</label>
							</ul>
							</div>
					
							<div class='row'>
							<ul>
							Central Frequency (MHz):
							<label>
							<?php
							if(isset ($_POST['central_freq']))
							{
								echo $_POST['central_freq'];
							}					
						}
					
						else if ($_POST['compare'] == "csma")
						{
							if (isset ($_POST['csma_options']))
							{
								echo "<div class='row'>";
								echo "<ul>";
								echo "<br>You have selected :";
								echo "<label>";
							
								if ($_POST['csma_options'] == "whitespace")
									echo "White Space";
							
								else if ($_POST['csma_options'] == "2.4ghz")
									echo "2.4 GHz";
								
								else if ($_POST['csma_options'] == "5ghz")
									echo "5 GHz";
							
								echo "</label>";
								echo "</ul>";
								echo "</div>";
							}
						}
					}
					
					/*<form action="upload_test.php" method="post" enctype="multipart/form-data"> 
						<div>
							<label id="upload">Select file to upload: 
							<input type="file" id="upload" name="upload"/>
							</label>
						</div> 
						
						<div> 
							<input type="hidden" name="action" value="upload"/> 
							<input type="submit" value="Submit"/> 
						</div> 
					</form>*/
					
					?>
					
					<form action="upload_test.php" method="post" enctype="multipart/form-data"> 
						<div>
							<label id="upload">Select file to upload: 
							<input type="file" id="upload" name="upload"/>
							</label>
						</div> 
						
						<div> 
							<input type="hidden" name="action" value="upload"/> 
							<input type="submit" value="Submit"/> 
						</div> 
					</form>
					
					</label>
					</ul>
					</div>
					
				</div> <!--well-->
			</div> <!--class='col-md-4'-->
			
			<div class='col-md-8'>
				<noscript>
					<div class='alert alert-info'>
						<h4>Your JavaScript is disabled</h4>
							<p>Please enable JavaScript to view the map.</p>
					</div>
				</noscript>
			
				<div id='map'></div>
					<p class='pull-right'></p>
			</div>

		</div> <!--div class='row'-->
	</div> <!--div class='container-fluid'-->
	

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

	//error handler function
	function customError($errno, $errstr) {
		echo "<b>Error:</b> [$errno] $errstr";
	}
	
	//set error handler
	set_error_handler("customError");
?>

<?php
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
?>

<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/jquery.address.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false&libraries=places"></script>
<script type="text/javascript" src="js/maps_lib.js"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/marker-animate-unobtrusive/0.2.8/vendor/markerAnimate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/marker-animate-unobtrusive/0.2.8/SlidingMarker.min.js"></script>-->
<script type='text/javascript'>

//SlidingMarker.initializeGlobally();

$(window).resize(function () {
	var h = $(window).height(),
		offsetTop = 105; // Calculate the top offset

	$('#map').css('height', (h - offsetTop));
}).resize();


$(function() {
	var markers = <?php echo json_encode($merged);?>;
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
		
		//var marker = new google.maps.Marker({draggable: true, animation: google.maps.Animation.DROP});
		var marker = new google.maps.Marker();
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
		
	map.setCenter(latlngbounds.getCenter());
		//map.setCenter(new google.maps.LatLng(lat, long));
	map.fitBounds(latlngbounds);
});


/*var marker;
function initMap() {
	var map = new google.maps.Map(document.getElementById("map"), {zoom: 13, center: {lat: 59.325, lng: 18.070}});
	marker = new google.maps.Marker({map: map, draggable: true, animation: google.maps.Animation.DROP, position: {lat: 59.327, lng: 18.067}});
	marker.addListener('click', toggleBounce);
}

function toggleBounce() {
	if (marker.getAnimation() !== null) {
		marker.setAnimation(null);
	} else {
		marker.setAnimation(google.maps.Animation.BOUNCE);
	}
}

<script async defer
src="https://maps.googleapis.com/maps/api/js?callback=initMap">*/

</script>
</body>
</html>
