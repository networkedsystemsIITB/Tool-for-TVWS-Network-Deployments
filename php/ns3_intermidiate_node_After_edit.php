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
				<img src="images/logo.gif" alt="HTML5 Icon" width="50" height="50"> <a class='navbar-brand' 
				href='index_test.html'/><font color="black"><b></b></font></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					 <li class='active'><a href="index_test.html">Home</a></li>
			        <li><a href="readme.html">Readme</a></li>
			        <li><a href="output.php">Output Section</a></li>
			        <li><a href="about.html">About</a></li>
			        <li><a href="contracts.html">Contacts</a></li>
				</ul>
				<!-- <font color="Blue"> <center><h4>MAP with Iintermediate Node for Multi-Hop Network</h4></center></font> -->
			</div>
		</div>
	</div>
	
		<div class='container-fluid'>
		<div class='row'>
		<form action="ns3_simulation_run.php" method="post" >
			<div class='col-md-4'>
				<div class='well'>
				
				
				<div class='alert alert-info' id='result_box' ><h4>MAC Protocol Specifications</h4> </strong></div>
				
				<div class='row'>
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
				
				<input type="hidden" name="channel_select_value" id="channel_select_value_hidden">
				</label>
				</ul>
				</div>
				
				<div class='row'>
				<ul>
				<div id="tdma_area1" style="display: none;">Slot Time (ms):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<label>
				<input class="form-control" id="tdma_tb1" name="slot_time" placeholder="Slot Time (ms)" type="text" value="2000" style="width: 50px; height: 20px" /></div>
				</label>
				</ul>
				</div>
				
				<div class='row'>
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
				
				<!-- <div class='row'>
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
				</div> -->
				
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
				</div>



				<div class='row'>
				<ul>
				Central Frequency (MHz):&nbsp;&nbsp;&nbsp;&nbsp;
				<label>
				<?php
				$message=shell_exec("head -n 1 central_freq.txt");
      				print_r($message);
				?>
				</label>
				</ul>
				</div>


				<div class='row'>
				<ul>
				Channel Width(MHz):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<label>
				<?php
				$message=shell_exec("head -n 1 channel_width.txt");
      				print_r($message);
				?>
				</label>
				</ul>
				</div>

				<div class='row'>
				<ul>
				Channel Number:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<label>
				<?php
				$message=shell_exec("head -n 1 channel_number.txt");
      				print_r($message);
				?>
				</label>
				</ul>
				</div>

				


			    <div class='row'>
				<ul>
				Transmit Power(dBm):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<label>
				<?php
				$message=shell_exec("head -n 1 transmit_power.txt");
      				print_r($message);
				?>
				</label>
				</ul>
				</div>


				<div class='row'>
				<ul>
				Receiver Sensitivity(dBm):
				<label>
				<?php
				$message=shell_exec("head -n 1 rx_sensitivity.txt");
      				print_r($message);
				?>
				<br>

				</label>
				</ul>
				</div>
				
				<div class='row'>
				<ul>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<label>
				<input type="submit" name="Submit" value="Submit" id="submit">
				</label>
				</ul>
				</div> 

					<!-- </form> -->
				</h4>
				</div> <!--well-->
			</div> <!--class='col-md-4'-->
			</form>
				<noscript>
					<div class='alert alert-info'>
						<h4>Your JavaScript is disabled</h4>
							<p>Please enable JavaScript to view the map.</p>
					</div>
				</noscript>
		        
				<div id='map'></div>
					<p class='pull-right'></p>
			
		
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

  $data=$_POST['total'];
  $file = 'after_edit.txt';
  file_put_contents($file, $data);
  //fclose($file);

// this python file catch the edited node position and take only the unique places and put into after_edit_csv.csv"
shell_exec("python test.py>csv/place_pop_lat_long_alt_bw_range_cap.csv");

   // calculate the int node here

	//chmod("csv/*.*",0777);
	$filename = 'csv/place_pop_lat_long_alt_bw_range_cap.csv';
	if (file_exists($filename)) {
	    //chmod("csv/place_pop_lat_long_alt_bw_range_cap.csv",0777);
	}
	

	$filename1 = 'csv/inter_place_pop_lat_long_alt_bw.csv';
	if (file_exists($filename1)) {
	    //chmod("csv/inter_place_pop_lat_long_alt_bw.csv",0777);
	}


	//chmod("csv/place_pop_lat_long_alt_bw_range_cap.csv", 0777);
	//chmod("csv/inter_place_pop_lat_long_alt_bw.csv", 0777);

   shell_exec("python inter_node.py");

   $filename2 = 'csv/place_pop_lat_long_alt_bw.csv.csv';
	if (file_exists($filename2)) {
	    //chmod("csv/place_pop_lat_long_alt_bw.csv",0777);
	}


  //chmod("csv/place_pop_lat_long_alt_bw.csv",0777);

   shell_exec("bash matlab/run_range_tp_calculation_inter.sh");

   shell_exec("python inter_node.py");

   $filename3 = 'csv/place_pop_lat_long_alt_bw_range_cap.csv';
	if (file_exists($filename3)) {
	    //chmod("csv/place_pop_lat_long_alt_bw_range_cap.csv",0777);
	}

   //chmod("csv/place_pop_lat_long_alt_bw_range_cap.csv",0777);

   shell_exec("cat  csv/place_pop_lat_long_alt_bw_range_cap.csv > csv/temp.csv");

    $filename4 = 'csv/temp.csv';
	if (file_exists($filename4)) {
	   // chmod("csv/temp.csv",0777);
	}

	 $filename5 = 'csv/inter_place_pop_lat_long_alt_bw_range_cap.csv';
	if (file_exists($filename5)) {
	   // chmod("csv/inter_place_pop_lat_long_alt_bw_range_cap.csv",0777);
	}


   //chmod("csv/temp.csv",0777);
   //chmod("csv/inter_place_pop_lat_long_alt_bw_range_cap.csv",0777);

   shell_exec("cat csv/temp.csv csv/inter_place_pop_lat_long_alt_bw_range_cap.csv >csv/place_pop_lat_long_alt_bw_range_cap.csv");

    $filename6 = 'csv/place_pop_lat_long_alt_bw_range_cap.csv';
	if (file_exists($filename6)) {
	    //chmod("csv/place_pop_lat_long_alt_bw_range_cap.csv",0777);
	}
   
   //chmod("csv/place_pop_lat_long_alt_bw_range_cap.csv",0777);
   // call for intermediate node place ment

   // shell_exec("python within_dis_upload.py  $_POST[range] >csv/'csv/place_pop_lat_long_alt_bw_range_cap.csv'

   // here call for the line creation

   $filename_inter201 = 'csv/1.csv';  // no delete
	if (file_exists($filename_inter201)) {
	    //chmod("csv/1.csv",0777);
	}

	shell_exec("sort -k1 -n csv/place_pop_lat_long_alt_bw_range_cap.csv >csv/1.csv");
	shell_exec("cat csv/1.csv >csv/place_pop_lat_long_alt_bw_range_cap.csv");
	//chmod("csv/place_pop_lat_long_alt_bw_range_cap.csv",0777);

	$filename7 = 'csv/place_pop_lat_long_alt_bw_range_cap.csv';
	if (file_exists($filename7)) {
	    //chmod("csv/place_pop_lat_long_alt_bw_range_cap.csv",0777);
	}


    shell_exec("python int_node.py csv/place_pop_lat_long_alt_bw_range_cap.csv> csv/line_place_pop_lat_long_alt_bw_range_cap.csv");


    $filename8 = '"csv/line_place_pop_lat_long_alt_bw_range_cap.csv';
	if (file_exists($filename8)) {
	    //chmod("csv/line_place_pop_lat_long_alt_bw_range_cap.csv",0777);
	}

    //chmod("csv/line_place_pop_lat_long_alt_bw_range_cap.csv",0777);

?>

<?php

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

function readi1($csvFile)
{
	$file_handle = fopen($csvFile, 'r');
	while (!feof($file_handle))
	{
		$i1[] = fgetcsv($file_handle)[8];
	}
	fclose($file_handle);
	return $i1;
}



function readi2($csvFile)
{
	$file_handle = fopen($csvFile, 'r');
	while (!feof($file_handle))
	{
		$i2[] = fgetcsv($file_handle)[9];
	}
	fclose($file_handle);
	return $i2;
}


function readi3($csvFile)
{
	$file_handle = fopen($csvFile, 'r');
	while (!feof($file_handle))
	{
		$i3[] = fgetcsv($file_handle)[10];
	}
	fclose($file_handle);
	return $i3;
}


function readi4($csvFile)
{
	$file_handle = fopen($csvFile, 'r');
	while (!feof($file_handle))
	{
		$i4[] = fgetcsv($file_handle)[11];
	}
	fclose($file_handle);
	return $i4;
}


function readi5($csvFile)
{
	$file_handle = fopen($csvFile, 'r');
	while (!feof($file_handle))
	{
		$i5[] = fgetcsv($file_handle)[12];
	}
	fclose($file_handle);
	return $i5;
}

function readi6($csvFile)
{
	$file_handle = fopen($csvFile, 'r');
	while (!feof($file_handle))
	{
		$i6[] = fgetcsv($file_handle)[13];
	}
	fclose($file_handle);
	return $i6;
}

function readi7($csvFile)
{
	$file_handle = fopen($csvFile, 'r');
	while (!feof($file_handle))
	{
		$i7[] = fgetcsv($file_handle)[14];
	}
	fclose($file_handle);
	return $i7;
}


$csvFile = 'csv/line_place_pop_lat_long_alt_bw_range_cap.csv';
$csvLat = readLatCSV($csvFile);
$csvLong = readLongCSV($csvFile);
$csvPlace = readPlaceCSV($csvFile);
$csvCoverage = readCoverageCSV($csvFile);
$i1 = readi1($csvFile);
$i2 = readi2($csvFile);
$i3 = readi3($csvFile);
$i4 = readi4($csvFile);
$i5 = readi5($csvFile);
$i6 = readi6($csvFile);
$i7 = readi7($csvFile);
$data = array($csvLat, $csvLong, $csvPlace, $csvCoverage,$i1,$i2,$i3,$i4,$i5,$i6,$i7);

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

$merged = merge_common_keys($csvLat, $csvLong, $csvPlace, $csvCoverage, $i1, $i2, $i3, $i4, $i5, $i6, $i7);

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

	$arr['i1'] = $arr[4];
	unset($arr[4]);
	$arr['i2'] = $arr[5];
	unset($arr[5]);
	$arr['i3'] = $arr[6];
	unset($arr[6]);
	$arr['i4'] = $arr[7];
	unset($arr[7]);
	$arr['i5'] = $arr[8];
	unset($arr[8]);
	$arr['i6'] = $arr[9];
	unset($arr[9]);
	$arr['i7'] = $arr[10];
	unset($arr[10]);
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
	var pos = markers[1];
	var mapOptions = {center: new google.maps.LatLng(pos.lat,pos.long), zoom: 1, mapTypeId: google.maps.MapTypeId.HYBRID};	
	
	var map = new google.maps.Map(document.getElementById("map"), mapOptions);
	var infoWindow = new google.maps.InfoWindow();
	var lat_lng = new Array();
	var latlngbounds = new google.maps.LatLngBounds();
	
	A = [['Place', 'Latitude', 'Longitude']];
	
	for (i = 0; i < markers.length; i++)
	{
		var data = markers[i];
		var image='http://findicons.com/files/icons/977/rrze/48/wifi.png';
		var image1='http://www.fancyicons.com/free-icons/232/industry/png/48/radio_tower_48.png';
		var int_image='http://www.fancyicons.com/free-icons/123/onebit/png/48/tower_48.png';
		var myLatlng = new google.maps.LatLng(data.lat, data.long);
		lat_lng.push(myLatlng);
        
		var temp=data.place;
		
		//document.write(temp.charAt(0));
		if(i==0)
		{var marker = new google.maps.Marker({position: myLatlng, map: map, draggable: false, animation: google.maps.Animation.DROP,icon: image1});
			data.place="Centra Node(P2P Access)";
		}
		else if(temp.charAt(0)=="I")
		{
			var marker = new google.maps.Marker({position: myLatlng, map: map, draggable: false, animation: google.maps.Animation.DROP,icon: int_image});
		}
		else
		var marker = new google.maps.Marker({position: myLatlng, map: map, draggable: false, animation: google.maps.Animation.DROP,icon: image});
		latlngbounds.extend(marker.position);

		if(data.i1!=-1)
		{

				var data1=markers[data.i1];
		        var a=parseFloat(data.lat);
				var b=parseFloat(data.long);
				var c=parseFloat(data1.lat);
				var d=parseFloat(data1.long);
				var flightPlanCoordinates = [
				   {lat: a, lng: b},
				   {lat: c, lng: d}
				 ];
				 var flightPath = new google.maps.Polyline({
				   path: flightPlanCoordinates,
				   geodesic: true,
				   strokeColor: '#FF00FF',
				   strokeOpacity: 1.0,
				   editable: true,
				   strokeWeight: 2
				 });
				 flightPath.setMap(map);

		}

		if(data.i2!=-1)
		{
				var data1=markers[data.i2];
		        var a=parseFloat(data.lat);
				var b=parseFloat(data.long);
				var c=parseFloat(data1.lat);
				var d=parseFloat(data1.long);
				var flightPlanCoordinates = [
				   {lat: a, lng: b},
				   {lat: c, lng: d}
				 ];
				 var flightPath = new google.maps.Polyline({
				   path: flightPlanCoordinates,
				   geodesic: true,
				   strokeColor: '#FF00FF',
				   strokeOpacity: 1.0,
				   editable: true,
				   strokeWeight: 2
				 });
				 flightPath.setMap(map);

		}
		if(data.i3!=-1)
		{

			    var data1=markers[data.i3];
		        var a=parseFloat(data.lat);
				var b=parseFloat(data.long);
				var c=parseFloat(data1.lat);
				var d=parseFloat(data1.long);
				var flightPlanCoordinates = [
				   {lat: a, lng: b},
				   {lat: c, lng: d}
				 ];
				 var flightPath = new google.maps.Polyline({
				   path: flightPlanCoordinates,
				   geodesic: true,
				   strokeColor: '#FF00FF',
				   strokeOpacity: 1.0,
				   editable: true,
				   strokeWeight: 2
				 });
				 flightPath.setMap(map);

		}
		if(data.i4!=-1)
		{

				var data1=markers[data.i4];
		        var a=parseFloat(data.lat);
				var b=parseFloat(data.long);
				var c=parseFloat(data1.lat);
				var d=parseFloat(data1.long);
				var flightPlanCoordinates = [
				   {lat: a, lng: b},
				   {lat: c, lng: d}
				 ];
				 var flightPath = new google.maps.Polyline({
				   path: flightPlanCoordinates,
				   geodesic: true,
				   strokeColor: '#FF00FF',
				   strokeOpacity: 1.0,
				   editable: true,
				   strokeWeight: 2
				 });
				 flightPath.setMap(map);
		}
		if(data.i5!=-1)
		{
				var data1=markers[data.i5];
		        var a=parseFloat(data.lat);
				var b=parseFloat(data.long);
				var c=parseFloat(data1.lat);
				var d=parseFloat(data1.long);
				var flightPlanCoordinates = [
				   {lat: a, lng: b},
				   {lat: c, lng: d}
				 ];
				 var flightPath = new google.maps.Polyline({
				   path: flightPlanCoordinates,
				   geodesic: true,
				   strokeColor: '#FF00FF',
				   strokeOpacity: 1.0,
				   editable: true,
				   strokeWeight: 2
				 });
				 flightPath.setMap(map);
		}
		if(data.i6!=-1)
		{
				var data1=markers[data.i6];
		        var a=parseFloat(data.lat);
				var b=parseFloat(data.long);
				var c=parseFloat(data1.lat);
				var d=parseFloat(data1.long);
				var flightPlanCoordinates = [
				   {lat: a, lng: b},
				   {lat: c, lng: d}
				 ];
				 var flightPath = new google.maps.Polyline({
				   path: flightPlanCoordinates,
				   geodesic: true,
				   strokeColor: '#FF00FF',
				   strokeOpacity: 1.0,
				   editable: true,
				   strokeWeight: 2
				 });
				 flightPath.setMap(map);
		}
		if(data.i7!=-1)
		{
				var data1=markers[data.i7];
		        var a=parseFloat(data.lat);
				var b=parseFloat(data.long);
				var c=parseFloat(data1.lat);
				var d=parseFloat(data1.long);
				var flightPlanCoordinates = [
				   {lat: a, lng: b},
				   {lat: c, lng: d}
				 ];
				 var flightPath = new google.maps.Polyline({
				   path: flightPlanCoordinates,
				   geodesic: true,
				   strokeColor: '#FF00FF',
				   strokeOpacity: 1.0,
				   editable: true,
				   strokeWeight: 2
				 });
				 flightPath.setMap(map);
		}



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
		
		// (function (marker, data)
		// {
		// 	google.maps.event.addListener(marker, 'dragend', function (event) 
		// 	{
		// 		latitude = this.getPosition().lat();
		// 		longitude = this.getPosition().lng();
				
		// 		A.push([data.place, latitude, longitude]);
		// 	});
		// })(marker, data);
		
		// A.push([data.place, data.lat, data.long]);

		(function (marker, data)
		{
			var t=data.place;
			google.maps.event.addListener(marker, "mouseover", function (e)
			{
				
				if(data.place=="Centra Node(P2P Access)")
					{
						infoWindow.setContent("<b><font color=blue>Centra Node(P2P Access)</b>"  );
					}
			   else if(t.charAt(0)=="I" && t.charAt(1)=="N")
			   {
			   			var contentString = '<div style="width: 100.2%; padding-left:10px; height: 25px;float: left;color: #FFF;background: #ed1e79;line-height: 25px;border-radius:5px 5px 0px 0px;"><strong><b>'+'Place:'+data.place+ '</b></strong></div><div style="clear:both;height:0px;"><div style="float:left;width:100%;padding:5px 10px;border:1px solid #ccc;border-top:none;border-radius:0px 0px 5px 5px;"><div style="float:left;color:#666;font-size:18px;font-weight:bold;margin:5px 0px;"> <div style="padding: 0px;"></div></div><div style="clear:both;height:0px;"></div><div style="float:left;line-height:18px;color:#666;font-size:13px;">'+'Intermediate Node'+ '</div><div style="clear:both;height:0px;"></div><form action=\"navigat:"You feild"\"><input type=\"submit\"/ style=\"background:#7e7e7e;float:right;color:#FFF;padding:5px 7px;font-size:10px;font-weight:bold;border:none;margin:5px 0px; border-radius:0px !important;\" value=\"More Info\" ></form></div></div>';  
					    infoWindow.setContent(contentString);
			   }
				else
				{

					var contentString = '<div style="width: 100.2%; padding-left:10px; height: 25px;float: left;color: #FFF;background: #ed1e79;line-height: 25px;border-radius:5px 5px 0px 0px;"><strong><b>'+'Place:'+data.place+'.'+ '</b></strong></div><div style="clear:both;height:0px;"><div style="float:left;width:100%;padding:5px 10px;border:1px solid #ccc;border-top:none;border-radius:0px 0px 5px 5px;"><div style="float:left;color:#666;font-size:18px;font-weight:bold;margin:5px 0px;"> <div style="padding: 0px;"></div></div><div style="clear:both;height:0px;"></div><div style="float:left;line-height:18px;color:#666;font-size:13px;">'+'Base Station'+ '</div><div style="clear:both;height:0px;"></div><form action=\"navigat:"You feild"\"><input type=\"submit\"/ style=\"background:#7e7e7e;float:right;color:#FFF;padding:5px 7px;font-size:10px;font-weight:bold;border:none;margin:5px 0px; border-radius:0px !important;\" value=\"More Info\" ></form></div></div>';  
					    infoWindow.setContent(contentString);

				}
				
				infoWindow.open(map, marker);
			});
			google.maps.event.addListener(marker, "mouseout", function (e)
			{
				infoWindow.open(null);
			});
		})(marker, data);			
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
