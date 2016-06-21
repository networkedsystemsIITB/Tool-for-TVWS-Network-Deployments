<!DOCTYPE html>
<html lang='en'>
<head>
<title>TVWS</title>
<meta charset='utf-8' />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content='' name='description' />
<meta content='' name='author' />
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/custom.css"/>
<link rel="icon" href="2.png">
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
					<li class='active'><a href="index_test.html">Home</a></li>
            <li><a href="readme.html">Readme</a></li>
            <li><a href="output.php">Output Section</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contacts.html">Contacts</a></li>
				</ul>
			</div>
		</div>
	</div>
	
		<div class='container-fluid'>
		<div class='row'>
		<form action="ns3_intermidiate_node_After_edit.php" method="post" onsubmit="return doStuff()">
			<div class='col-md-4'>
				<div class='well'>
				<h4>
				
				<h4>Editing BS Position:</h4>

				<li>As simple as like drag and drop of a BS</li>
				<li>User can move a BS at their convenient position</li>
				<li>While moving BS it is user responsibility not to select a position where hills, rivers, roads, buildings are located</li>
				<li>Based on the Position seleted by user tool adjusts the intermediate nodes</li>

				
				<!-- <div class='row'>
				<ul>
				<label>
				TDMA&nbsp;&nbsp;<input type="radio" name="compare" value="tdma" onclick="show_tdma();">&nbsp; &nbsp; &nbsp; &nbsp;
				CSMA&nbsp;&nbsp;<input type="radio" name="compare" value="csma" onclick="show_csma();">
				</label>
				</ul>
				</div>
								<div class='row'>
				<ul>
				<div id="channel_area" style="display: none;"> 
				<label>
				<select id="channel_options" name="channel_options">
				<option value=''>Channel Number</option>
				<option value='1'>1</option>
				<option value='2'>2</option>
				<option value='3'>3</option>
				<option value='4'>4</option>
				<option value='5'>5</option>
				<option value='6'>6</option>
				<option value='7'>7</option>
				<option value='8'>8</option>
				<option value='9'>9</option>
				<option value='10'>10</option>
				<option value='11'>11</option>
				<option value='12'>12</option>
				</select>
				<input type="hidden" name="channel_select_value" id="channel_select_value_hidden">
				</label>
				</ul>
				</div> -->
				
				<!-- <div class='row'>
				<ul>
				<div id="tdma_area1" style="display: none;">Slot Time (ms):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<label>
				<input class="form-control" id="tdma_tb1" name="slot_time" placeholder="Slot Time (ms)" type="text" value="20000" style="width: 50px; height: 20px" /></div>
				</label>
				</ul>
				</div> -->
				
				<!-- <div class='row'>
				<ul>
				<div id="tdma_area2" style="display: none;">Guard Interval (us):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<label>
				<input class="form-control" id="tdma_tb2" name="guard_interval" placeholder="Guard Interval (us)" type="text" value="100" style="width: 50px; height: 20px" /></div>
				</label>
				</ul>
				</div>
				
				<div class='row'>
				<ul>
				<div id="tdma_area3" style="display: none;">Interframe Space (ns):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<label>
				<input class="form-control" id="tdma_tb3" name="ifs" placeholder="Interframe Space (ns)" type="text" value="0" style="width: 50px; height: 20px" /></div>
				</label>
				</ul>
				</div>
				
				<div class='row'>
				<ul>
				<div id="tdma_area4" style="display: none;">Channel Width (MHz):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<label>
				<input class="form-control" id="tdma_tb4" name="width" placeholder="Channel Width (MHz)" type="text" value="8" style="width: 50px; height: 20px" /></div>
				</label>
				</ul>
				</div> -->
				
				<!-- <div class='row'>
				<ul>
				<div id="tdma_area5" style="display: none;">Central Frequency (MHz):
				<label>
				<input class="form-control" id="tdma_tb5" name="central_freq" placeholder="Central Frequency (MHz)" type="text" value="475" style="width: 50px; height: 20px" /></div>
				</label>
				</ul>
				</div>
									
				<div class='row'>
				<ul>
					<div id="csma_area" style="display: none;"> 
					<label>
					<select id="csma_options" name="csma_options">
					<option id="csma_dl1" value="whitespace" />White Space</option></div>
					<option id="csma_dl2" value="2.4ghz" />2.4 GHz</option></div>
					<option id="csma_dl3" value="5ghz" />5 GHz</option></div>	
				</select>
				<input type="hidden" name="csma_select_value" id="csma_select_value_hidden">
					</label>
					</ul>
					</div> -->
								<!--<input type="submit" name="run" value="Run">
				</div> <!--well
								</div> <!--class='col-md-4'-->
				
				
				
					<!-- <form action="ns3_simulation_run.php" method="post" onsubmit="return doStuff()"> -->
						<div class='row'>
						<ul>
						<label>
						<input type="hidden" name="total" id="total" value="" />
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<input type="submit" id="submit">
						
						</label>
						</ul>
						</div> 
					<!-- </form> -->
				</h4>
				</div> <!--well-->
			</div> <!--class='col-md-4'-->
			</form>
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

function readPopCSV($csvFile)
{
	$file_handle = fopen($csvFile, 'r');
	while (!feof($file_handle))
	{
		$Pop[] = fgetcsv($file_handle)[1];
	}
	fclose($file_handle);
	return $Pop;
}

function readLatCSV($csvFile)
{
	$file_handle = fopen($csvFile, 'r');
	while (!feof($file_handle))
	{
		$latPoint[] = fgetcsv($file_handle)[2];
	}
	fclose($file_handle);
	return $latPoint;
}
function readLongCSV($csvFile)
{
	$file_handle = fopen($csvFile, 'r');
	while (!feof($file_handle))
	{
		$longPoint[] = fgetcsv($file_handle)[3];
	}
	fclose($file_handle);
	return $longPoint;
}


function readAltCSV($csvFile)
{
	$file_handle = fopen($csvFile, 'r');
	while (!feof($file_handle))
	{
		$AltPoint[] = fgetcsv($file_handle)[4];
	}
	fclose($file_handle);
	return $AltPoint;
}
function readThCSV($csvFile)
{
	$file_handle = fopen($csvFile, 'r');
	while (!feof($file_handle))
	{
		$Th[] = fgetcsv($file_handle)[5];
	}
	fclose($file_handle);
	return $Th;
}
function readCoverageCSV($csvFile)
{
	$file_handle = fopen($csvFile, 'r');
	while (!feof($file_handle))
	{
		$Coverage[] = fgetcsv($file_handle)[6];
	}
	fclose($file_handle);
	return $Coverage;
}
function readThroughputCSV($csvFile)
{
	$file_handle = fopen($csvFile, 'r');
	while (!feof($file_handle))
	{
		$Throughput[] = fgetcsv($file_handle)[7];
	}
	fclose($file_handle);
	return $Throughput;
}


//if (isset($_POST["choice1"]))
    $filename = 'csv/index_test.csv';
	if (file_exists($filename)) {
	    chmod("csv/index_test.csv",0777);
	}

	$csvFile = 'csv/index_test.csv';

// if (isset($_POST["choice2"]))
// 	$csvFile = 'csv/auto_place_pop_lat_long_alt_bw.csv';
$csvPlace = readPlaceCSV($csvFile);
$csvPop = readPopCSV($csvFile);
$csvLat = readLatCSV($csvFile);
$csvLong = readLongCSV($csvFile);
$csvAlt = readAltCSV($csvFile);
$csvTh = readThCSV($csvFile);
$csvCoverage = readCoverageCSV($csvFile);
$csvThroughput = readThroughputCSV($csvFile);
$data = array($csvLat, $csvLong, $csvPlace, $csvCoverage, $csvThroughput);
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
$merged = merge_common_keys($csvPlace,$csvPop, $csvLat, $csvLong,$csvAlt , $csvTh ,$csvCoverage, $csvThroughput);
foreach ($merged as &$arr)
{
	$arr['place'] = $arr[0];
	unset($arr[0]);
	$arr['pop'] = $arr[1];
	unset($arr[1]);
	$arr['lat'] = $arr[2];
	unset($arr[2]);
	$arr['long'] = $arr[3];
	unset($arr[3]);
	$arr['alt'] = $arr[4];
	unset($arr[4]);
	$arr['th'] = $arr[5];
	unset($arr[5]);
	$arr['coverage'] = $arr[6];
	unset($arr[6]);
	$arr['throughput'] = $arr[7];
	unset($arr[7]);
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
<script type='text/javascript'>

var A = document.getElementById("total");
var latitude, longitude;

$(window).resize(function () {
	var h = $(window).height(),
		offsetTop = 105; // Calculate the top offset
			$('#map').css('height', (h - offsetTop));
	}).resize();

$(function() {
	var markers = <?php echo json_encode($merged);?>;
	//var mapOptions = {center: new google.maps.LatLng(markers[0].lat, markers[0].long), zoom: 1, mapTypeId: google.maps.MapTypeId.ROADMAP};
	var pos = markers[1];
	var mapOptions = {center: new google.maps.LatLng(pos.lat,pos.long), zoom: 1, mapTypeId: google.maps.MapTypeId.HYBRID};	
	var map = new google.maps.Map(document.getElementById("map"), mapOptions);
	
	

	var infoWindow = new google.maps.InfoWindow();
	var lat_lng = new Array();
	var latlngbounds = new google.maps.LatLngBounds();
	
	A = [['Place', 'Pop' ,'Latitude', 'Longitude','Alt', 'Th','Coverage', 'Throughput']];
	
	for (i = 0; i < markers.length; i++)
	{
		var image='http://findicons.com/files/icons/977/rrze/48/wifi.png'
		var image1='http://www.fancyicons.com/free-icons/232/industry/png/48/radio_tower_48.png'
		var int_image='http://www.fancyicons.com/free-icons/123/onebit/png/48/tower_48.png'
		//var image='http://findicons.com/files/icons/1035/human_o2/128/network_wireless.png'
		//var image='http://findicons.com/files/icons/1786/oxygen_refit/128/wireless_tower_4.png'
		//var image = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
		var data = markers[i];
		var myLatlng = new google.maps.LatLng(data.lat, data.long);
		lat_lng.push(myLatlng);
		//var marker = new google.maps.Marker({position: myLatlng, map: map});
		if(i==0)
			var marker = new google.maps.Marker({position: myLatlng, map: map, draggable: true, animation: google.maps.Animation.DROP, icon: image1});
		else
			var marker = new google.maps.Marker({position: myLatlng, map: map, draggable: true, animation: google.maps.Animation.DROP, icon: image});

		var hex='#b3ffb3';
		if (data.throughput > 60 && data.throughput <65)
		    var percent=10;//data.throughput/data.population;
		else if (data.throughput > 65 && data.throughput <70)
			var percent=30;
		else if (data.throughput >= 70 && data.throughput <75)
			var percent=50;
		else if (data.throughput >= 75 && data.throughput <80)
			var percent=80;
		else
		 	var percent=90;
		hex = hex.replace(/^\s*#|\s*$/g, '');
		// convert 3 char codes --> 6, e.g. `E0F` --> `EE00FF`
		if(hex.length == 3){
		    hex = hex.replace(/(.)/g, '$1$1');
		}
        var r = parseInt(hex.substr(0, 2), 16),g = parseInt(hex.substr(2, 2), 16), b = parseInt(hex.substr(4, 2), 16);

       var color_code= '#' +
       ((0|(1<<8) + r + (256 - r) * percent / 100).toString(16)).substr(1) +
       ((0|(1<<8) + g + (256 - g) * percent / 100).toString(16)).substr(1) +
       ((0|(1<<8) + b + (256 - b) * percent / 100).toString(16)).substr(1);
// making the color based on intensity		
		// if (data.throughput > 75)
		// 	var circle = new google.maps.Circle({
		// 	  map: map, 
		// 	  center: myLatlng, 
		// 	  radius: Math.sqrt(data.coverage/3.141)*1000,
		// 	  strokeColor: 
		// 	  '#AF0000',
		//       strokeOpacity: 0.8,
		//       strokeWeight: 1,
		//       fillColor: color_code,
		//       fillOpacity: 0.2});
		// else 
		var circle = new google.maps.Circle({
				map: map, center: myLatlng, 
				radius: Math.sqrt(data.coverage/3.141)*1000, 
				strokeColor: '#ff0000',
			    strokeOpacity: 0.8,
				strokeWeight: 1,
				 draggable: true,
				fillColor: color_code,
				fillOpacity: 0.3});
			

		marker.bindTo("position",circle,"center");
		/*(function (marker, data)
		{
			google.maps.event.addListener(marker, "click", function (e)
			{
				latitude = this.position.lat();
				longitude = this.position.lng();
			});
			
			//A.push([data.place, latitude, longitude]);		
			
		})(marker, data);				*/
		
		
		/*(function (marker, data)
		{
			google.maps.event.addListener(marker, 'dragend', function (marker)
			{
				var latLng = marker.myLatlng;
				latitude = latLng.lat();
				longitude = latLng.lng();
			
				document.alert(latitude, longitude);
				//A.push([data.place, latitude, longitude]);		
			});
		})(marker, data);*/
		
		(function (marker, data)
		{
			google.maps.event.addListener(marker, 'dragend', function (event) 
			{
				latitude = this.getPosition().lat();
				longitude = this.getPosition().lng();


				var contentString = '<div style="width: 100.2%; padding-left:10px; height: 25px;float: left;color: #FFF;background: #ed1e79;line-height: 25px;border-radius:5px 5px 0px 0px;"><strong><b>'+'New Position'+ '</b></strong></div><div style="clear:both;height:0px;"><div style="float:left;width:100%;padding:5px 10px;border:1px solid #ccc;border-top:none;border-radius:0px 0px 5px 5px;"><div style="float:left;color:#666;font-size:18px;font-weight:bold;margin:5px 0px;"> <div style="padding: 0px;"></div></div><div style="clear:both;height:0px;"></div><div style="float:left;line-height:18px;color:#666;font-size:13px;">'+ 'lat:' + latitude.toFixed(6)+ '<br>lon:' + longitude.toFixed(6)+'</div><div style="clear:both;height:0px;"></div><form action=\"navigat:"You feild"\"><input type=\"submit\"/ style=\"background:#7e7e7e;float:right;color:#FFF;padding:5px 7px;font-size:10px;font-weight:bold;border:none;margin:5px 0px; border-radius:0px !important;\" value=\"More Info\" ></form></div></div>';  


				//infoWindow.setContent("New Position<br>-----------------------<br><b>lat:</b> " + latitude.toFixed(6)+"<br><b>lon:</b> " + longitude.toFixed(6) );
				infoWindow.setContent(contentString );
				infoWindow.open(map, marker);
				
				A.push([data.place, data.pop, latitude, longitude, data.alt, data.th, data.coverage, data.throughput]);
			});
			   
			google.maps.event.addListener(marker, "mouseout", function (e)
			{
				infoWindow.open(null);
			});	

			

		})(marker, data);



		
		
		A.push([data.place, data.pop, data.lat, data.long , data.alt, data.th ,data.coverage,data.throughput]);	



			
	}
	
	//document.write(A);
	
	/*function downloadCSVFunction()
	{	
		var csvRows = [];
		for (var i=0, l=A.length; i<l; ++i)
		{
			csvRows.push(A[i].join(','));
		}
		var csvString = csvRows.join("%0A");
		var a         = document.createElement('a');
		a.href        = 'data:attachment/csv,' + csvString;
		a.target      = '_blank';
		a.download    = 'myFile.csv';
		document.body.appendChild(a);
		a.click();
	}*/
	
	
	//A.form.submit();
	
	//map.setCenter(latlngbounds.getCenter());
		//map.setCenter(new google.maps.LatLng(lat, long));
	//map.fitBounds(latlngbounds);
	map.setZoom(10);
});

function doStuff()
	{
		document.getElementById("total").value = A;
		//var element = document.getElementById("total");
		//element.value = 10;
		//element.form.submit();
		document.getElementById("total").form.submit();
		
		$txt = A;
		$myfile = file_put_contents('/var/www/html/GUI/log.txt', $txt.PHP_EOL , FILE_APPEND);
	}

function show_simulation() { document.getElementById("simulation_area").style.display = 'block'; }
function show_tdma() { document.getElementById("channel_area").style.display = 'block';
document.getElementById("tdma_area1").style.display = 'block';
document.getElementById("tdma_area2").style.display = 'block';
document.getElementById("tdma_area3").style.display = 'block';
document.getElementById("tdma_area4").style.display = 'block';
document.getElementById("tdma_area5").style.display = 'block';
document.getElementById("csma_area").style.display = 'none'; }
function show_csma() { document.getElementById("csma_area").style.display = 'block';
							  document.getElementById("tdma_area1").style.display = 'none';
							  document.getElementById("tdma_area2").style.display = 'none';
							  document.getElementById("tdma_area3").style.display = 'none';
							  document.getElementById("tdma_area4").style.display = 'none';
							  document.getElementById("tdma_area5").style.display = 'none';
							  document.getElementById("channel_area").style.display = 'none'; }
function show_format()
{
if (document.getElementById('file_upload').checked)
{
document.getElementById('ifYes').style.display = 'block';
document.getElementById("upload_area").style.display = 'block';
}
else document.getElementById('ifYes').style.display = 'none';  
}
function hide_format()
{
if (document.getElementById('simulation').checked)
{
document.getElementById('ifYes').style.display = 'none';
document.getElementById("upload_area").style.display = 'none';
}
else document.getElementById('ifYes').style.display = 'none';
}

</script>
</body>
</html>
