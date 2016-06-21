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
		            <li><a href="output.php">Output Section</a></li>
		            <li><a href="about.html">About</a></li>
		            <li><a href="contacts.html">Contacts</a></li>
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
					 //echo "<h3><font color='Green'> NS3 Simulation Successful</font></h3>";
					?>
					<div class='alert alert-info' id='result_box' ><h4>NS3 Simulation Successful</h4> </strong></div>
					<h4>General Specifications</h4>
					
					<div class='row'>
					<ul>
					Slot Time (ms):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<label>
					<?php
					if(isset ($_POST['slot_time']))
					{
						echo $_POST['slot_time'];
					}


					// Write file for slot time

					$file = fopen("slot.txt","w");
					fwrite($file,$_POST['slot_time']);
					fclose($file);

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


					$file = fopen("guard.txt","w");
					fwrite($file,$_POST['guard_interval']);
					fclose($file);


					?>
					</label>
					</ul>
					</div>

					<div class='row'>
					<ul>
					Interframe Space (ns):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<label>
					<?php
					if(isset ($_POST['ifs']))
					{
						echo $_POST['ifs'];
					}

					$file = fopen("ifs.txt","w");
					fwrite($file,$_POST['ifs']);
					fclose($file);



					?>
					</label>
					</ul>
					</div>

					<div class='row'>
					<ul>
					Channel Width(MHz):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
					Central Frequency (MHz):
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
					Total BS Placed:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<label>
					<?php

					$message=shell_exec("cat csv/line_place_pop_lat_long_alt_bw_range_cap.csv|wc -l");
      				print_r($message);
					// $data=$_POST['total'];
					// $file = 'after_edit.txt';
					// file_put_contents($file, $data);
					// fclose($file1);

					// // this python file catch the edited node position and take only the unique places and put into after_edit_csv.csv"
					// shell_exec("python after_edit.py>after_edit_csv.csv");
					
					// Here I am calling ns3 for simulation. and write data to ns3_sim.csv
                    
					// run tdma.sh


					//////////////////this part is to copy local file to remote////////////
					
					// echo "<div id=\"loading\">";
					// echo "<img id=\"loading-image\" src=\"loader.gif\" alt=\"Loading...\" width=\"230\" height=\"280\" align=\"right\"/>";
				 //    echo "</div>"; 
				
/*  this part for webq server
					set_include_path(get_include_path() .
                     PATH_SEPARATOR .
                     '/var/www/html/GUI/phpseclib');
					require_once('Net/SSH2.php');
				    require_once('Net/SCP.php');

				    // $ssh = new Net_SSH2('10.129.2.155');
				    // if (!$ssh->login('mythiliserver7', 'mythili'))

				    $ssh = new Net_SSH2('10.129.2.55');
				    if (!$ssh->login('kanchan', 'kanchan'))
				    {
				        throw new Exception("Failed to login");
				    }

				    $scp = new Net_SCP($ssh);
				    if (!$scp->put('Kanchan/new_4/TDMA_Room/ns-3.21/line_place_pop_lat_long_alt_bw_range_cap.csv',
				                   'csv/line_place_pop_lat_long_alt_bw_range_cap.csv',
				                   NET_SCP_LOCAL_FILE))
				    {
				        throw new Exception("Failed to send file");
				    }




				    if (!$scp->put('Kanchan/new_4/TDMA_Room/ns-3.21/slot.txt',
				                   'slot.txt',
				                   NET_SCP_LOCAL_FILE))
				    {
				        throw new Exception("Failed to send file");
				    }


				    if (!$scp->put('Kanchan/new_4/TDMA_Room/ns-3.21/guard.txt',
				                   'guard.txt',
				                   NET_SCP_LOCAL_FILE))
				    {
				        throw new Exception("Failed to send file");
				    }


				    if (!$scp->put('Kanchan/new_4/TDMA_Room/ns-3.21/ifs.txt',
				                   'ifs.txt',
				                   NET_SCP_LOCAL_FILE))
				    {
				        throw new Exception("Failed to send file");
				    }


				    if (!$scp->put('Kanchan/new_4/TDMA_Room/ns-3.21/width.txt',
				                   'width.txt',
				                   NET_SCP_LOCAL_FILE))
				    {
				        throw new Exception("Failed to send file");
				    }

				    if (!$scp->put('Kanchan/new_4/TDMA_Room/ns-3.21/central_freq.txt',
				                   'central_freq.txt',
				                   NET_SCP_LOCAL_FILE))
				    {
				        throw new Exception("Failed to send file");
				    }

				    if (!$scp->put('Kanchan/new_4/TDMA_Room/ns-3.21/rx_sensitivity.txt',
				                   'rx_sensitivity.txt',
				                   NET_SCP_LOCAL_FILE))
				    {
				        throw new Exception("Failed to send file");
				    }

				    if (!$scp->put('Kanchan/new_4/TDMA_Room/ns-3.21/transmit_power.txt',
				                   'transmit_power.txt',
				                   NET_SCP_LOCAL_FILE))
				    {
				        throw new Exception("Failed to send file");
				    }


				    // $command1 = "export TMPDIR=~/tmp";
				    // echo $ssh->exec($command1);


				    $command = "bash a.sh &> /dev/null";
				    echo $ssh->exec($command);

				    // $command1 = "LC_ALL=C sort -t, -k1 a.csv>b.csv &> /dev/null";
				    // echo $ssh->exec($command1);
				    // $command2 = "cut -d, -f2,3,4,5,6,7,8,9,10,11,12,13,14,15,16 b.csv>final_ns3_res.csv &> /dev/null";
				    // echo $ssh->exec($command2);
				     

				    if (!$scp->get('Kanchan/new_4/TDMA_Room/ns-3.21/final_ns3_res.csv',
				                   'final_ns3_res.csv',
				                   NET_SCP_LOCAL_FILE))
				    {
				        throw new Exception("Failed to send file");
				    }
                    

				   
				 
                     shell_exec("bash tdma.sh");
*/



//this part for mythiliserver7 server  


					set_include_path(get_include_path() .
                     PATH_SEPARATOR .
                     '/var/www/html/GUI/phpseclib');
					require_once('Net/SSH2.php');
				    require_once('Net/SCP.php');

				    $ssh = new Net_SSH2('10.129.2.155');
				    if (!$ssh->login('mythiliserver7', 'mythili'))
					{
				        throw new Exception("Failed to login");
				    }

				    $scp = new Net_SCP($ssh);
				    if (!$scp->put('Desktop/Kanchan/new_4/TDMA_Room/ns-3.21/line_place_pop_lat_long_alt_bw_range_cap.csv',
				                   'csv/line_place_pop_lat_long_alt_bw_range_cap.csv',
				                   NET_SCP_LOCAL_FILE))
				    {
				        throw new Exception("Failed to send file");
				    }




				    if (!$scp->put('Desktop/Kanchan/new_4/TDMA_Room/ns-3.21/slot.txt',
				                   'slot.txt',
				                   NET_SCP_LOCAL_FILE))
				    {
				        throw new Exception("Failed to send file");
				    }


				    if (!$scp->put('Desktop/Kanchan/new_4/TDMA_Room/ns-3.21/guard.txt',
				                   'guard.txt',
				                   NET_SCP_LOCAL_FILE))
				    {
				        throw new Exception("Failed to send file");
				    }


				    if (!$scp->put('Desktop/Kanchan/new_4/TDMA_Room/ns-3.21/ifs.txt',
				                   'ifs.txt',
				                   NET_SCP_LOCAL_FILE))
				    {
				        throw new Exception("Failed to send file");
				    }


				    if (!$scp->put('Desktop/Kanchan/new_4/TDMA_Room/ns-3.21/width.txt',
				                   'channel_width.txt',
				                   NET_SCP_LOCAL_FILE))
				    {
				        throw new Exception("Failed to send file");
				    }

				    if (!$scp->put('Desktop/Kanchan/new_4/TDMA_Room/ns-3.21/central_freq.txt',
				                   'central_freq.txt',
				                   NET_SCP_LOCAL_FILE))
				    {
				        throw new Exception("Failed to send file");
				    }

				    if (!$scp->put('Desktop/Kanchan/new_4/TDMA_Room/ns-3.21/rx_sensitivity.txt',
				                   'rx_sensitivity.txt',
				                   NET_SCP_LOCAL_FILE))
				    {
				        throw new Exception("Failed to send file");
				    }

				    if (!$scp->put('Desktop/Kanchan/new_4/TDMA_Room/ns-3.21/transmit_power.txt',
				                   'transmit_power.txt',
				                   NET_SCP_LOCAL_FILE))
				    {
				        throw new Exception("Failed to send file");
				    }


				    // $command1 = "export TMPDIR=~/tmp";
				    // echo $ssh->exec($command1);
				    chmod("csv/*.*",0777);
////////////////////  for UDP ///////////////////////////////////
				    $command = "bash a.sh &> /dev/null";
				    echo $ssh->exec($command);
				    chmod("csv/*.*",0777);
				    // $command1 = "LC_ALL=C sort -t, -k1 a.csv>b.csv &> /dev/null";
				    // echo $ssh->exec($command1);
				    // $command2 = "cut -d, -f2,3,4,5,6,7,8,9,10,11,12,13,14,15,16 b.csv>final_ns3_res.csv &> /dev/null";
				    // echo $ssh->exec($command2);
				     
				    chmod("csv/*.*",0777);
				    if (!$scp->get('Desktop/Kanchan/new_4/TDMA_Room/ns-3.21/final_ns3_res.csv',
				                   'final_ns3_res.csv',
				                   NET_SCP_LOCAL_FILE))
				    {
				        throw new Exception("Failed to send file");
				    }
				    chmod("csv/*.*",0777);
                    //shell_exec("bash tdma.sh");
                    chmod("csv/*.*",0777);
////////////////////  for TCP ///////////////////////////////////
                     $command1 = "bash a_tcp.sh &> /dev/null";
				    echo $ssh->exec($command1);
					if (!$scp->get('Desktop/Kanchan/new_4/TDMA_Room/ns-3.21/final_ns3_res_tcp.csv',
				                   'final_ns3_res_tcp.csv',
				                   NET_SCP_LOCAL_FILE))
				    {
				        throw new Exception("Failed to send file");
				    }
				    chmod("csv/*.*",0777);
				    //shell_exec("bash tdma_tcp.sh");
				    chmod("final_ns3_res.csv",0777);
					chmod("final_ns3_res_tcp.csv",0777);
					//shell_exec("cat csv/ll2.csv csv/ll.csv >csv/final_ns3_res_merge_udp_tcp.csv");
					shell_exec("bash udp_tcp.sh");
					chmod("csv/final_ns3_res_merge_udp_tcp.csv",0777);
					?>

					<?php

					 

					// this python file catch the edited node position and take only the unique places and put into after_edit_csv.csv"
					//shell_exec("python after_edit.py>after_edit_csv.csv");
					?>
					</label>
					</ul>
					</div>

					<!-- <div class='row'>
					<ul>
					Area Covered(sq km):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<label>
					
					</label>
					</ul>
					</div> -->
					<hr>
					
					






					<div class='row'>
					<ul>
					<h4><a href="output.php" id="submit"><b><blink>Details Analysis of Simulation Results</blink> </b></a></h4>
					<label>
					
					</label>
					</ul>
					</div>
					<hr><br>

					<!--<div class='row'>
					<ul>
					Simulation Time (s):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<label>
					
					</label>
					</ul>
					</div>-->
					
					<!--<h4>MAC Protocol Specifications</h4>
					
					<div class='row'>
					<ul>
					<label>
					<?php
					// chmod("csv/final_ns3_res_merge.csv",0777);

					// shell_exec("awk 'NR > 1 { print }' csv/final_ns3_res_merge.csv >csv/temp1.csv");
					// chmod("csv/temp1.csv",0777);
					// shell_exec("cut -d, -f1-7,9-15 --complement csv/temp1.csv > csv/temp21.csv");
					// shell_exec("sort -k2 -n -r csv/temp21.csv > csv/temp2.csv"); 
					// shell_exec("cat csv/a.csv csv/temp2.csv>csv/temp3.csv");
					// shell_exec("bash bash/graph.sh>csv/temp4.csv");
					// chmod("csv/*",0777);
					// shell_exec("pr -mts, csv/temp4.csv csv/temp3.csv>csv/temp5.csv");
					// shell_exec("awk -F , -v OFS=, '$2/=1000000' <csv/temp5.csv > csv/temp6.csv");
					// shell_exec("cat csv/b.csv csv/temp6.csv >csv/dygraph.csv");
					// chmod("csv/dygraph.csv",0777);

					shell_exec("bash avg_th.sh");

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

function TDMA_Udp($csvFile)
{
	$file_handle = fopen($csvFile, 'r');
	while (!feof($file_handle))
	{
		$udp[] = fgetcsv($file_handle)[15];
	}
	fclose($file_handle);
	return $udp;
}
function TDMA_Tcp_Up($csvFile)
{
	$file_handle = fopen($csvFile, 'r');
	while (!feof($file_handle))
	{
		$tcp_up[] = fgetcsv($file_handle)[16];
	}
	fclose($file_handle);
	return $tcp_up;
}
function TDMA_Tcp_Down($csvFile)
{
	$file_handle = fopen($csvFile, 'r');
	while (!feof($file_handle))
	{
		$tcp_down[] = fgetcsv($file_handle)[17];
	}
	fclose($file_handle);
	return $tcp_down;
}


$csvFile = 'csv/final_ns3_res_merge_udp_tcp.csv';
$csvLat = readLatCSV($csvFile);
$csvLong = readLongCSV($csvFile);
$csvPlace = readPlaceCSV($csvFile);
$csvCoverage = readCoverageCSV($csvFile);
$csvThroughput = readThroughputCSV($csvFile);
$i1 = readi1($csvFile);
$i2 = readi2($csvFile);
$i3 = readi3($csvFile);
$i4 = readi4($csvFile);
$i5 = readi5($csvFile);
$i6 = readi6($csvFile);
$i7 = readi7($csvFile);
$udp=TDMA_Udp($csvFile);
$tcp_up=TDMA_Tcp_Up($csvFile);
$tcp_down=TDMA_Tcp_Down($csvFile);
$data = array($csvLat, $csvLong, $csvPlace, $csvCoverage,$i1,$i2,$i3,$i4,$i5,$i6,$i7,$udp,$tcp_up,$tcp_down,$csvThroughput);

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

$merged = merge_common_keys($csvLat, $csvLong, $csvPlace, $csvCoverage, $i1, $i2, $i3, $i4, $i5, $i6, $i7, $udp,$tcp_up,$tcp_down,$csvThroughput);

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
	$arr['udp'] = $arr[11];
	unset($arr[11]);
	$arr['tcp_up'] = $arr[12];
	unset($arr[12]);
	$arr['tcp_down'] = $arr[13];
	unset($arr[13]);
	$arr['throughput'] = $arr[14];
	unset($arr[14]);
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
			    strokeOpacity: 0.2,
				strokeWeight: 1,
				fillColor: color_code,
				fillOpacity: 0.3});





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
			google.maps.event.addListener(marker, "mouseover", function (e)
			{
				
				var contentString = '<div style="width: 100.2%; padding-left:10px; height: 25px;float: left;color: #FFF;background: #ed1e79;line-height: 25px;border-radius:5px 5px 0px 0px;"><strong><b>'+ 'Place:'+data.place+ '</b></strong></div><div style="clear:both;height:0px;"><div style="float:left;width:100%;padding:5px 10px;border:1px solid #ccc;border-top:none;border-radius:0px 0px 5px 5px;"><div style="float:left;color:#666;font-size:18px;font-weight:bold;margin:5px 0px;"> <div style="padding: 0px;"></div></div><div style="clear:both;height:0px;"></div><div style="float:left;line-height:18px;color:#666;font-size:13px;">'+ 'Theoretical Th(Mbps) :' + (data.throughput/1000000).toFixed(4)+ '<br>'+'TDMA Th(Mbps)'+'<br> UDP :'+data.udp+'<br>TCP Uplink:'+data.tcp_up+'<br>TCP Downlink:'+data.tcp_down+'</div><div style="clear:both;height:0px;"></div><form action=\"navigat:"You feild"\"><input type=\"submit\"/ style=\"background:#7e7e7e;float:right;color:#FFF;padding:5px 7px;font-size:10px;font-weight:bold;border:none;margin:5px 0px; border-radius:0px !important;\" value=\"More Info\" ></form></div></div>'; 


				if(data.place=="Centra Node(P2P Access)")
					infoWindow.setContent("<b><font color=blue>Centra Node(P2P Access)</b>"  );
				else
				//infoWindow.setContent("<h6>Place: " + data.place + "</h6><b>UDP(Mbps) :</b>" + data.udp+ "<br></h6><b>TCP Uplink(Mbps) :</b>"+ data.tcp_up+ "<br></h6><b>TCP Downlink(Mbps) :</b>"+ data.tcp_down );//+  "</h6><b>Coverage(Sq. Km) :</b>" data.coverage);
				infoWindow.setContent(contentString);
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
