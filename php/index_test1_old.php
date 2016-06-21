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
	<!--<div id="loading">
		<img id="loading-image" src="loader.gif" alt="Loading..." />
	</div>-->

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
			        <li><a href="output.html">Output Section</a></li>
			        <li><a href="about.html">About</a></li>
			        <li><a href="contracts.html">Contacts</a></li>
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
	                 <div class='alert alert-info' id='result_box' ><h4>Theoretical Model Simulation Successful</h4> </strong></div>
					<?php
					if (isset ($_POST['run']))
					{
						//echo "<h3><font color='Green'> Model simulation successful</font></h3>";
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
					Transmit Power (dBm):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
					TVWS Frequency (MHz):&nbsp;&nbsp;&nbsp;&nbsp;
					<label>
					<?php
					if(isset ($_POST['frequency']))
					{
						echo $_POST['frequency'];
					}
					?>
					</label>
					</ul>
					</div>

					<div class='row'>
					<ul>
					Total Antenna Placed:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<label>
					<?php
					shell_exec("python within_dis.py 19.218331 72.978090 $_POST[range] >sim_res_range.csv");
					// shell_exec('sudo su ');
					// shell_exec('schmod 777 demo.txt ');
					$message=shell_exec("cat sim_res_range.csv|wc -l");
      				print_r($message);
					?>
					</label>
					</ul>
					</div>

					<div class='row'>
					<ul>
					Area Covered(sq km):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<label>
					<?php
					if(isset ($_POST['range']))
					{
						echo $_POST['range'];
					}
					?>					
					</label>
					</ul>
					</div>

					<div class='row'>
					<ul>
					Avg Throughput(Mbps):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<label>
					<?php
					$message=shell_exec("cat sim_res_range.csv | awk -F',' '{sum+=$7} END {print sum/NR}'");
      				print_r($message);
					?>
					</label>
					</ul>
					</div>
					
					<!--<div class='row'>
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
					</div>-->
					
					<!--<h4>MAC Protocol Specifications</h4>
					
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
							
							echo "</label>";
							echo "</ul>";
							echo "</div>";	
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
					
					<form action="edit_test.php" method="post"> 
						<div class='row'>
						<ul>
						<input type="submit" name="edit" value="Edit"/>
						<label>
						</label>
						</ul>
						</div> 
					</form>
					
					</label>
					</ul>
					</div>-->
					
					<form action="edit_test.php" method="post"> 
						<div class='row'>
						<ul>
						<label>
						If Want to Edit BS Position<a href="Readme" >(readme) </a><img src="images/arrow.png" height="32" width="42">
						</label>
						<input type="submit" name="edit" value="Click Me"/>
						</ul>
						</div> 
					</form>

					<form action="ns3_intermidiate_node.php" method="post"> 
						<div class='row'>
						<ul>
						<label>
						Else to Continue NS3 Simulation <img src="images/arrow.png" height="32" width="56">
						</label>
						<input type="submit" name="edit" value="Click Here"/>
						</ul>
						</div> 
					</form>

				
				</div> <!--well-->

			</div> <!--class='col-md-4'-->
			
			<div class='col-md-8'>
				<noscript>
					<div class='alert alert-info'>
						<h4>Your JavaScript is disabled</h4>
							<p>Please enable JavaScript to view the map.</p>
					</div>
				</noscript>
				
				<div id="loading">
					<img id="loading-image" src="loader.gif" alt="Loading..." width="230" height="280" align="right"/>
				</div>
				
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


$csvFile = 'matlab/Thane_lat_long_pop_alt_bw_range_cap.csv';
$csvLat = readLatCSV($csvFile);
$csvLong = readLongCSV($csvFile);
$csvPlace = readPlaceCSV($csvFile);
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
$merged = merge_common_keys($csvLat, $csvLong, $csvPlace, $csvCoverage, $csvThroughput);
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
	$arr['throughput'] = $arr[4];
	unset($arr[4]);
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

$(window).resize(function () {
	var h = $(window).height(),
		offsetTop = 105; // Calculate the top offset

	$('#map').css('height', (h - offsetTop));
}).resize();



$(function() {
	var markers = <?php echo json_encode($merged);?>;
	//var mapOptions = {center: new google.maps.LatLng(markers[0].lat, markers[0].long), zoom: 1, mapTypeId: google.maps.MapTypeId.ROADMAP};
	var pos = markers[1];
	var mapOptions = {center: new google.maps.LatLng(pos.lat,pos.long), zoom: 1, mapTypeId: google.maps.MapTypeId.ROADMAP};	
	var map = new google.maps.Map(document.getElementById("map"), mapOptions);
	
	

	var infoWindow = new google.maps.InfoWindow();
	var lat_lng = new Array();
	var latlngbounds = new google.maps.LatLngBounds();
	    
	   /* var data2=markers[1];
        var data1=markers[0];
  //       var a=data2.lat;
		// var b=data2.long;
		// var c=data1.lat;
		// var d=data1.long;
		//var a=19.266621,b= 72.963368,c= 19.228370 ,d=72.946593;
        //document.write(a,b,c,d);
		var flightPlanCoordinates = [
		   {lat: a, lng: b},
		   {lat: c, lng: d}
		 ];
		 var flightPath = new google.maps.Polyline({
		   path: flightPlanCoordinates,
		   geodesic: true,
		   strokeColor: '#FF0000',
		   strokeOpacity: 1.0,
		   strokeWeight: 2
		 });
		 flightPath.setMap(map);*/

	for (i = 1; i < markers.length; i++)
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
		if(i==2)
			var marker = new google.maps.Marker({position: myLatlng, map: map, draggable: false, animation: google.maps.Animation.DROP, icon: image1});
		else
			var marker = new google.maps.Marker({position: myLatlng, map: map, draggable: false, animation: google.maps.Animation.DROP, icon: image});

	// This part is for drawing a line between two points
  //       var data1=markers[i-1];
  //       var a=parseFloat(data.lat);
		// var b=parseFloat(data.long);
		// var c=parseFloat(data1.lat);
		// var d=parseFloat(data1.long);
		// var flightPlanCoordinates = [
		//    {lat: a, lng: b},
		//    {lat: c, lng: d}
		//  ];
		//  var flightPath = new google.maps.Polyline({
		//    path: flightPlanCoordinates,
		//    geodesic: true,
		//    strokeColor: '#FF00FF',
		//    strokeOpacity: 1.0,
		//    editable: true,
		//    strokeWeight: 2
		//  });
		//  flightPath.setMap(map);

//this part for making color intensity
		//var temp = '#AA00';
		//var throughput_temp = round(data.throughput);
		//var throughput_final = throughput_temp.toString();
		//var color_code = temp.concat(throughput_final);
		//document.write(color_code);
		var hex='#000F00';
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
		if (data.throughput > 75)
			var circle = new google.maps.Circle({
			  map: map, 
			  center: myLatlng, 
			  radius: Math.sqrt(data.coverage/3.141)*300,
			  strokeColor: 
			  '#AF0000',
		      strokeOpacity: 0.8,
		      strokeWeight: 1,
		      fillColor: color_code,
		      fillOpacity: 0.2});
		else 
		var circle = new google.maps.Circle({
				map: map, center: myLatlng, 
				radius: Math.sqrt(data.coverage/3.141)*300, 
				strokeColor: '#FF0000',
			    strokeOpacity: 0.2,
				strokeWeight: 1,
				fillColor: '#FFF111',
				fillOpacity: 0.10});
			
		//var circle = new google.maps.Circle({map: map, center: myLatlng, radius: Math.sqrt(data.coverage/3.141)*300, fillColor: color_code});

// 		latlngbounds.extend(marker.position);
// 		//circle.bindTo('center', marker, 'position');
		(function (marker, data)
		{
			google.maps.event.addListener(marker, "mouseover", function (e)
			{
				// var contentString = '<div style="width: 94.2%; padding-left:10px; height: 25px;float: left;color: #FFF;background: #ed1e79;line-height: 25px;border-radius:5px 5px 0px 0px;"><strong><b>"Place"</b></strong></div><div style="clear:both;height:0px;"><div style="float:left;width:90%;padding:5px 10px;border:1px solid #ccc;border-top:none;border-radius:0px 0px 5px 5px;"><div style="float:left;color:#666;font-size:18px;font-weight:bold;margin:5px 0px;"> <div style="padding: 0px;">]]..data.coverage..[[</div></div><div style="clear:both;height:0px;"></div><div style="float:left;line-height:18px;color:#666;font-size:13px;">"You feild"</div><div style="clear:both;height:0px;"></div><form action=\"navigat:"You feild"\"><input type=\"submit\"/ style=\"background:#7e7e7e;float:right;color:#FFF;padding:5px 7px;font-size:10px;font-weight:bold;border:none;margin:5px 0px; border-radius:0px !important;</div></div>';
				//infoWindow.setContent(contentString);  

				//infoWindow.setContent("<h6>Place: " + data.place + "</h6><b>range(sq km) : </b>" +  Math.round(data.coverage) + " | <b>Th(Mbps) :</b>" + data.throughput);

				infoWindow.setContent("<h6>Place: " + data.place + "</h6><b>Th(Mbps) :</b>" + data.throughput);
				
				infoWindow.open(map, marker);
			});
			google.maps.event.addListener(marker, "mouseout", function (e)
			{
				infoWindow.open(null);
			});
		})(marker, data);
	}	

	//map.setCenter(latlngbounds.getCenter());
	map.setZoom(10);
	//map.panTo(marker.position);
	//map.setCenter(new google.maps.LatLng(lat, long));
	//map.fitBounds(latlngbounds);
});

$(window).load(function()
{
	$('#loading').hide();
});

</script>

</body>
</html>
