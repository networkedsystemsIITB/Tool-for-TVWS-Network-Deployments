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
	                 <div class='alert alert-info' id='result_box' ><h4>Theoretical Model Simulation Successful</h4> </strong></div>




	                 <?php
					/*$info = pathinfo($_FILES['upload']['name']);
					$ext = $info['extension']; // get the extension of the file
					$newname = "Thane_uploaded.".$ext; 
					$target = 'uploaded/'.$newname;
					move_uploaded_file( $_FILES['upload']['tmp_name'], $target);*/
					
					
					chmod("csv/*.*",0777);
					shell_exec("bash to_delete1.sh");


					////////////////////////////////////////////////////////////
					
					if (isset($_POST["submit"]))
					{
						
						if (isset($_FILES["upload"]))
						{
							
							//if there was an error uploading the file
							if ($_FILES["upload"]["error"] > 0)
							{
								// echo "Return Code: " . $_FILES["upload"]["error"] . "<br />";
								// echo "<button onclick=\"history.go(-1);\">Back </button>";
							}
					
							else 
							{
								//Print file details
								echo "Run Theoretical Model On: " . $_FILES["upload"]["name"] . "<br />";
								//echo "Type: " . $_FILES["upload"]["type"] . "<br />";
								//echo "Size: " . ($_FILES["upload"]["size"] / 1024) . " Kb<br />";
								//echo "Temp file: " . $_FILES["Upload"]["tmp_name"] . "<br />";
								
								//if file already exists
								if (file_exists("/var/www/html/GUI/csv/" . $_FILES["upload"]["name"]))
								{
									echo $_FILES["upload"]["name"] . " already exists. ";
								}
					
								else
								{
									//Store file in directory "upload" with the name of "uploaded_file.txt"
									$storagename = "upload_place_pop_lat_long_alt_bw.csv";
									move_uploaded_file($_FILES["upload"]["tmp_name"], "/var/www/html/GUI/csv/" . $storagename);
									//echo "Stored in: " . "csv/" . $_FILES["upload"]["name"] ;
								}
							}
						}	
						else
						{
							echo "No file selected <br />";
							echo "<button onclick=\"history.go(-1);\">Back </button>";
						}
					}
					
					function validatePlaceCSV($csvFile)
					{
						$file_handle = fopen($csvFile, 'r');
						while (!feof($file_handle))
						{
							$Place[] = fgetcsv($file_handle)[0];
						}	
							for ($i = 0; $i < count($Place); ++$i) 
							{
								if (!preg_match('/^[A-Za-z0-9_- ]*$/', $Place[$i])) 
								{
									// echo "<br>Place entry invalid in row ".$i."<br>";
									// echo "<button onclick=\"history.go(-1);\">Back </button>";
									// break;
								}
							}
						fclose($file_handle);
						return $Place;
					}
					
					function validatePopulationCSV($csvFile)
					{
						$file_handle = fopen($csvFile, 'r');
						while (!feof($file_handle))
						{
							$Population[] = fgetcsv($file_handle)[1];
						}	
							for ($i = 0; $i < count($Population); ++$i) 
							{
								if (!is_int($Population[$i])) 
								{
									echo "<br>Population entry invalid in row ".$i."<br>";
									echo "<button onclick=\"history.go(-1);\">Back </button>";
									break;
								}
							}
						fclose($file_handle);
						return $Population;
					}
					
					function validateLatCSV($csvFile)
					{
						$file_handle = fopen($csvFile, 'r');
						while (!feof($file_handle))
						{
							$Latitude[] = fgetcsv($file_handle)[2];
						}	
							for ($i = 0; $i < count($Latitude); ++$i) 
							{
								if (!preg_match("/^-?([1-8]?[1-9]|[1-9]0)\.{1}\d{1,6}$/", $Latitude[$i])) 
								{
									echo "<br>Latitude entry invalid in row ".$i."<br>";
									echo "<button onclick=\"history.go(-1);\">Back </button>";
									break;
								}
							}
						fclose($file_handle);
						return $Latitude;
					}
					
					function validateLongCSV($csvFile)
					{
						$file_handle = fopen($csvFile, 'r');
						while (!feof($file_handle))
						{
							$Longitude[] = fgetcsv($file_handle)[3];
						}	
							for ($i = 0; $i < count($Longitude); ++$i) 
							{
								if (!preg_match("/^-?([1-8]?[1-9]|[1-9]0)\.{1}\d{1,6}$/", $Longitude[$i])) 
								{
									echo "<br>Longitude entry invalid in row ".$i. "<br>";
									echo "<button onclick=\"history.go(-1);\">Back </button>";
									break;
								}
							}
						fclose($file_handle);
						return $Longitude;
					}
					
					function validateAltCSV($csvFile)
					{
						$file_handle = fopen($csvFile, 'r');
						while (!feof($file_handle))
						{
							$Altitude[] = fgetcsv($file_handle)[4];
						}	
							for ($i = 0; $i < count($Altitude); ++$i) 
							{
								if (!($Altitude[$i] >= 20 && $Altitude[$i] <= 200))
								{
									echo "<br>Altitude entries invalid in row ".$i."<br>";
									echo "<button onclick=\"history.go(-1);\">Back </button>";
									break;
								}
							}
						fclose($file_handle);
						return $Altitude;
					}
					
					function validateBwCSV($csvFile)
					{
						$file_handle = fopen($csvFile, 'r');
						while (!feof($file_handle))
						{
							$Bw[] = fgetcsv($file_handle)[5];
						}	
							for ($i = 0; $i < count($Bw); ++$i) 
							{
								if (!($Bw[$i] <= 50))
								{
									echo "<br>Bandwidth Requirement entries invalid in row ".$i."<br>";
									echo "<button onclick=\"history.go(-1);\">Back </button>";
									break;
								}
							}
						fclose($file_handle);
						return $Bw;
					}
					
					if (($handle = fopen("/var/www/html/GUI/csv/upload_place_pop_lat_long_alt_bw.csv", "r")) !== FALSE)
					{
						while (($line = fgetcsv($handle, 1000, ",")) !== FALSE) 
						{
							$numcols = count($line);
							if ($numcols != 6)
							{
								echo "Invalid number of columns in the file uploaded !";
								//echo "<button onclick=\"history.go(-1);\">Back </button>";
								break;
							}
						}	
						
						
								$csvFile = "/var/www/html/GUI/csv/upload_place_pop_lat_long_alt_bw.csv";
								// $csvPlace = validatePlaceCSV($csvFile);
								// $csvPopulation = validatePopulationCSV($csvFile);
								// $csvLat = validateLatCSV($csvFile);
								// $csvLong = validateLongCSV($csvFile);
								// $csvAlt = validateAltCSV($csvFile);
								// $csvBw = validateBwCSV($csvFile);
						
						
					}
					
					/*$old_path = getcwd();
					echo "<br>old path is ".$old_path."<br><br>";
					chdir('/home/mahesh/Desktop/RA_Progress/thane_matlab_files');
					$new_path = getcwd();
					echo "<br>new path is ".$new_path."<br><br>";
					$output = exec('./run_range_tp_calculation.sh');
					echo $output;*/
					echo "<hr>"
					
					?>




					<?php
					if (isset ($_POST['submit']))
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

					$file = fopen("rx_sensitivity.txt","w");
					fwrite($file,$_POST['rx_sensitivity']);
					fclose($file);
					chmod("rx_sensitivity.txt",0777);

					$file1 = fopen("matlab/rx_sensitivity.txt","w");
					fwrite($file1,$_POST['rx_sensitivity']);
					fclose($file1);
					chmod("matlab/rx_sensitivity.txt",0777);
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
						if((float)$_POST['transmit_power'] >36)
							echo "36";
						else
							echo $_POST['transmit_power'];
					}
					$tx_p=36;
					if((float)$_POST['transmit_power'] >36)
						$tx_p=36;
					else
						$tx_p=(float)$_POST['transmit_power'];
					$file = fopen("transmit_power.txt","w");
					fwrite($file,$tx_p);
					fclose($file);
					chmod("transmit_power.txt",0777);

					$file1 = fopen("matlab/transmit_power.txt","w");
					fwrite($file1,$tx_p);
					fclose($file1);
					chmod("matlab/transmit_power.txt",0777);

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

					$file = fopen("central_freq.txt","w");
					fwrite($file,$_POST['frequency']);
					fclose($file);
					chmod("channel_width.txt",0777);

					$file1 = fopen("matlab/central_freq.txt","w");
					fwrite($file1,$_POST['frequency']);
					fclose($file1);
					chmod("matlab/channel_width.txt",0777);

					?>


					</label>
					</ul>
					</div>

					<div class='row'>
					<ul>
					Channel Width(MHz):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<label>
					<?php
					if(isset ($_POST['width']))
					{
						echo $_POST['width'];
					}

					$file = fopen("channel_width.txt","w");
					fwrite($file,$_POST['width']);
					fclose($file);
					chmod("channel_width.txt",0777);

					$file1 = fopen("matlab/channel_width.txt","w");
					fwrite($file1,$_POST['width']);
					fclose($file1);
					chmod("matlab/channel_width.txt",0777);

					?>					
					</label>
					</ul>
					</div>

					<div class='row'>
					<ul>
					Channel Number:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<label>
					<?php
					if(isset ($_POST['channel_options']))
					{
						echo $_POST['channel_options'];
					}

					$file = fopen("channel_number.txt","w");
					fwrite($file,$_POST['channel_options']);
					fclose($file);
					chmod("channel_number.txt",0777);

					$file1 = fopen("matlab/channel_number.txt","w");
					fwrite($file1,$_POST['channel_options']);
					fclose($file1);
					chmod("matlab/channel_number.txt",0777);

					?>					
					</label>
					</ul>
					</div>

					<div class='row'>
					<ul>
					Total Antenna Placed:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<label>
					<?php




							





					if (isset($_POST["choice"]) && $_POST["choice"]=="file_upload")
						{
							


							shell_exec("python within_dis_upload.py  $_POST[range] >csv/place_pop_lat_long_alt_bw.csv");

						// shell_exec("python within_dis_upload.py  2000000 >csv/place_pop_lat_long_alt_bw.csv");
						}

					if (isset($_POST["choice"]) && $_POST["choice"]=="simulation")
						{
							
							
							shell_exec("python within_dis_auto.py  $_POST[range] >csv/auto1.csv");
							
							shell_exec("bash matlab/run_range_tp_calculation_auto.sh");
							
							chmod('csv/Thane_place_pop_lat_long_alt_bw_range_cap.csv',0777);

							shell_exec("sudo rm /var/lib/mysql/Thane/Thane_place_pop_lat_long_alt_bw_range_cap.csv");

							shell_exec("sudo rm /var/lib/mysql/Thane/Thane_place_pop_lat_long_alt_bw.csv");

							shell_exec("sudo cp csv/Thane_place_pop_lat_long_alt_bw_range_cap.csv /var/lib/mysql/Thane/Thane_place_pop_lat_long_alt_bw_range_cap.csv");

							shell_exec("sudo cp csv/auto1.csv /var/lib/mysql/Thane/Thane_place_pop_lat_long_alt_bw.csv");


							$servername = "localhost";
							$username = "root";
							$password = "kanchan12";
							$dbname = "Thane";

							// Create connection
							$conn = new mysqli($servername, $username, $password, $dbname);
							// Check connection
							if ($conn->connect_error) {
							    die("Connection failed: " . $conn->connect_error);
							} 

							// sql to create table


	


							$sql = "alter table Places_Within_Range drop Aggregate_People_In_Range;";
							$conn->query($sql);


							$sql = "alter table Places_Within_Range drop Utility_Value;";
							$conn->query($sql);

							$sql = "delete from Sorted_Range_Cap_Data;";
							$conn->query($sql);

							$sql = sprintf("LOAD DATA INFILE 'Thane_place_pop_lat_long_alt_bw_range_cap.csv' INTO TABLE Sorted_Range_Cap_Data FIELDS TERMINATED BY ','  ENCLOSED BY '\"' 
								LINES TERMINATED BY '\n';");

							$conn->query($sql);
							
							$sql = "delete from Lat_Long_Data;";
							$conn->query($sql);

							$sql = sprintf("LOAD DATA INFILE 'Thane_place_pop_lat_long_alt_bw.csv' INTO TABLE Lat_Long_Data FIELDS TERMINATED BY ','  ENCLOSED BY '\"'  LINES TERMINATED BY '\n';");
							
							$conn->query($sql);

							$sql = "drop view Within_Range1;";
							$conn->query($sql);



							$sql = "CREATE VIEW Within_Range1 AS (
							SELECT Place, Coverage, Capacity/1000000, Place_Name, (
							       6371 * acos (
							       cos ( radians(Latitude) )
							       * cos( radians(Lat_Point) )
							       * cos( radians(Long_Point) - radians(Longitude) )
							       + sin ( radians(Latitude) )
							       * sin( radians(Lat_Point) )
							       )
							       ) AS Distance, Population_Number
							FROM `Thane`.`Sorted_Range_Cap_Data`, `Thane`.`Lat_Long_Data`
							WHERE (
							      6371 * acos (
							      cos ( radians(Latitude) )
							      * cos( radians(Lat_Point) )
							      * cos( radians(Long_Point) - radians(Longitude) )
							      + sin ( radians(Latitude) )
							      * sin( radians(Lat_Point) )
							    )
							  ) < SQRT(Coverage/3.141)
							ORDER BY Coverage DESC, Distance);";
							$conn->query($sql);


							shell_exec("sudo rm /var/lib/mysql/Thane/Within_Range1.csv");


							$sql = sprintf("SELECT * INTO OUTFILE 'Within_Range1.csv' FIELDS TERMINATED BY ', ' LINES TERMINATED BY '\n' FROM Within_Range1;");
							
							$conn->query($sql);

							$sql = "delete from Places_Within_Range;";
							$conn->query($sql);

							$sql = sprintf("LOAD DATA INFILE 'Within_Range1.csv' INTO TABLE Places_Within_Range
							FIELDS TERMINATED BY ',' 
							ENCLOSED BY '\"' 
							LINES TERMINATED BY '\n'
							IGNORE 1 LINES;");
							$conn->query($sql);


							$sql = sprintf("select From_Place, Coverage_Range, Capacity_Mbps, sum(People_Count) AS Number_of_People, Capacity_Mbps/(sum(People_Count)/10/2) AS Utility_Value from Places_Within_Range group by From_Place order by Utility_Value desc;");
							$conn->query($sql);


							$sql = sprintf("select * from Places_Within_Range ORDER BY Coverage_Range desc, Distance_Length asc;");
							$conn->query($sql);
	

							$sql = "drop view NewView;";
							$conn->query($sql);

							$sql = "create view NewView as
(select From_Place, Coverage_Range, Capacity_Mbps, sum(People_Count) AS Number_of_People, Capacity_Mbps/(sum(People_Count)/10/2) AS Utility_Value from Places_Within_Range group by From_Place order by Utility_Value desc);";
							$conn->query($sql);



							shell_exec("sudo rm /var/lib/mysql/Thane/New_View.csv");

							$sql = sprintf("SELECT * INTO OUTFILE 'New_View.csv' FIELDS TERMINATED BY ', ' LINES TERMINATED BY '\n' FROM NewView;");
							
							$conn->query($sql);


							$sql = sprintf("alter table Places_Within_Range add Aggregate_People_In_Range int;");
							
							$conn->query($sql);


							$sql = sprintf("update Places_Within_Range join NewView on Places_Within_Range.From_Place = NewView.From_Place
								set Aggregate_People_In_Range = Number_of_People
								where Places_Within_Range.From_Place = NewView.From_Place;");
							
							$conn->query($sql);
							

							shell_exec("sudo rm /var/lib/mysql/Thane/Places_Within_Range.csv");

							$sql = sprintf("SELECT * INTO OUTFILE 'Places_Within_Range.csv' FIELDS TERMINATED BY ', ' LINES TERMINATED BY '\n' FROM Places_Within_Range;");
							
							$conn->query($sql);

							$sql = sprintf("alter table Places_Within_Range add Utility_Value float;");
							
							$conn->query($sql);


							$sql = sprintf("update Places_Within_Range join NewView on Places_Within_Range.From_Place = NewView.From_Place
								set Places_Within_Range.Utility_Value = NewView.Utility_Value
								where Places_Within_Range.From_Place = NewView.From_Place;");
							
							$conn->query($sql);

							shell_exec("sudo rm /var/lib/mysql/Thane/Places_Within_Range_UV.csv");


							$sql = sprintf("SELECT * INTO OUTFILE 'Places_Within_Range_UV.csv' FIELDS TERMINATED BY ', ' LINES TERMINATED BY '\n' FROM Places_Within_Range ORDER BY Utility_Value desc, Coverage_Range desc, Distance_Length asc;");
							$conn->query($sql);

							$sql = "drop view checkdup;";
							$conn->query($sql);

							$sql = "Create view checkdup as
							(SELECT *, MIN(Distance_Length) AS Minimum_Distance
							FROM Places_Within_Range
							GROUP BY To_Place
							ORDER BY Utility_Value desc, Coverage_Range desc, Distance_Length asc);";
							$conn->query($sql);


							$sql = "SELECT To_Place, COUNT(To_Place) AS NumOccurrences
							FROM checkdup
							GROUP BY To_Place
							HAVING ( COUNT(To_Place) > 1 );";
							$conn->query($sql);


							$sql = "select distinct(PLACE_NAME), LAT_POINT, LONG_POINT, ALT_LEVEL, COVERAGE_RANGE, CAPACITY_MBPS, AGGREGATE_PEOPLE_IN_RANGE, UTILITY_VALUE
								from Lat_Long_Data, checkdup
								where Lat_Long_Data.Place_Name = checkdup.From_Place
								order by Utility_Value desc, Coverage_Range desc;";
							$conn->query($sql);



							shell_exec("sudo rm /var/lib/mysql/Thane/Plot_Lat_Long.csv");

							$sql = "SELECT distinct(PLACE_NAME), AGGREGATE_PEOPLE_IN_RANGE, LAT_POINT, LONG_POINT, ALT_LEVEL, COVERAGE_RANGE, CAPACITY_MBPS, UTILITY_VALUE INTO OUTFILE 'Plot_Lat_Long.csv' FIELDS TERMINATED BY ', ' LINES TERMINATED BY '\n' FROM Lat_Long_Data, checkdup WHERE Lat_Long_Data.Place_Name = checkdup.From_Place ORDER BY Utility_Value desc, Coverage_Range desc;";
							$conn->query($sql);











							shell_exec("sudo cp /var/lib/mysql/Thane/Plot_Lat_Long.csv /var/www/html/GUI/csv/auto2.csv");

							chmod('csv/auto2.csv',0777);

							shell_exec("cut -d, -f1,2,3,4,5,8 csv/auto2.csv  > csv/place_pop_lat_long_alt_bw.csv");

							
							chmod('csv/place_pop_lat_long_alt_bw.csv',0777);

							//create this file only csv/place_pop_lat_long_alt_bw.csv










							$conn->close();




	
						}
					$filename101 = 'csv/place_pop_lat_long_alt_bw_range_cap.csv';
					if (file_exists($filename)) {
					    chmod("csv/place_pop_lat_long_alt_bw_range_cap.csv",0777);
					    shell_exec("rm csv/place_pop_lat_long_alt_bw_range_cap.csv");
					}

					$filename101 = 'csv/place_pop_lat_long_alt_bw.csv';
					if (file_exists($filename)) {
					    chmod("csv/place_pop_lat_long_alt_bw.csv",0777);
					}


					shell_exec("bash matlab/run_range_tp_calculation.sh");
					chmod("csv/*.*",0777);
					// shell_exec('sudo su ');
					// shell_exec('schmod 777 demo.txt ');
					$message=shell_exec("cat csv/place_pop_lat_long_alt_bw.csv|wc -l");
      				print_r($message);
					?>
					</label>
					</ul>
					</div>

					<!-- <div class='row'>
					<ul>
					Area Covered(sq km):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<label> -->
					<?php
					// if(isset ($_POST['range']))
					// {
					// 	echo $_POST['range'];
					// }
					?>					
					<!-- </label>
					</ul>
					</div> -->

					

					




					<div class='row'>
					<ul>
					Avg Throughput(Mbps):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<label>
					<?php
					$message=shell_exec("cat csv/place_pop_lat_long_alt_bw_range_cap.csv | awk -F',' '{sum+=$8/1000000} END {print sum/NR}'");
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
					
					
					<br>
					
					
					<form action="edit_test.php" method="post"> 
						<div class='row'>
						<ul>
						
						
						<input type="submit" name="edit" value="To Edit BS Position" id="submit" />
						<!-- <input type="submit" name="edit" value="Click Me"/> -->
						</ul>
						</div> 
					</form>

					<form action="ns3_intermidiate_node.php" method="post"> 
						<div class='row'>
						<ul>
						
						
						<input type="submit" name="edit" value="To NS3 Simulation" id="submit" />
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
function readPlaceCSV($csvFile)
{
	$file_handle = fopen($csvFile, 'r');
	while (!feof($file_handle))
	{
		$Place[] = fgetcsv($file_handle)[0];
	}
	fclose($file_handle);

	//for centra node

	$file = fopen("central_node.txt","w");
	fwrite($file,$Place[0]);
	fclose($file);
	chmod("central_node.txt",0777);


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

function readthCSV($csvFile)
{
	$file_handle = fopen($csvFile, 'r');
	while (!feof($file_handle))
	{
		$th[] = fgetcsv($file_handle)[5];
	}
	fclose($file_handle);
	return $th;
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

	shell_exec("sort -k1 -n csv/place_pop_lat_long_alt_bw_range_cap.csv > csv/index_test.csv");
   
 //    $file='csv/index_test.csv';
	// $file_handle = fopen($file, 'r');
	// while (!feof($file_handle))
	// {
	// 	$Throughput[] = fgetcsv($file_handle)[7];
	// }
	// fclose($file_handle);


//if (isset($_POST["choice1"]))
	$csvFile = 'csv/index_test.csv';

// if (isset($_POST["choice2"]))
// 	$csvFile = 'csv/auto_place_pop_lat_long_alt_bw.csv';

$csvPlace = readPlaceCSV($csvFile);
$csvPop = readPopCSV($csvFile);
$csvLat = readLatCSV($csvFile);
$csvLong = readLongCSV($csvFile);
$csvth = readthCSV($csvFile);
$csvCoverage = readCoverageCSV($csvFile);
$csvThroughput = readThroughputCSV($csvFile);
$data = array($csvPlace,$csvPop,$csvLat, $csvLong, $csvth, $csvCoverage, $csvThroughput);
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
$merged = merge_common_keys($csvPlace,$csvPop,$csvLat, $csvLong, $csvth, $csvCoverage, $csvThroughput);
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
	$arr['th'] = $arr[4];
	unset($arr[4]);
	$arr['coverage'] = $arr[5];
	unset($arr[5]);
	$arr['throughput'] = $arr[6];
	unset($arr[6]);
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
	var mapOptions = {center: new google.maps.LatLng(pos.lat,pos.long), zoom: 1, mapTypeId: google.maps.MapTypeId.HYBRID};	
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
				fillColor: color_code,
				fillOpacity: 0.3});
			
		// var circle = new google.maps.Circle({map: map, center: myLatlng, radius: Math.sqrt(data.coverage/3.141)*1000, fillColor: color_code});

// 		latlngbounds.extend(marker.position);
// 		//circle.bindTo('center', marker, 'position');
		(function (marker, data)
		{
			google.maps.event.addListener(marker, "mouseover", function (e)
			{
				// var contentString = '<div style="width: 94.2%; padding-left:10px; height: 25px;float: left;color: #FFF;background: #ed1e79;line-height: 25px;border-radius:5px 5px 0px 0px;"><strong><b>"Place"</b></strong></div><div style="clear:both;height:0px;"><div style="float:left;width:90%;padding:5px 10px;border:1px solid #ccc;border-top:none;border-radius:0px 0px 5px 5px;"><div style="float:left;color:#666;font-size:18px;font-weight:bold;margin:5px 0px;"> <div style="padding: 0px;">]]..data.coverage..[[</div></div><div style="clear:both;height:0px;"></div><div style="float:left;line-height:18px;color:#666;font-size:13px;">"You feild"</div><div style="clear:both;height:0px;"></div><form action=\"navigat:"You feild"\"><input type=\"submit\"/ style=\"background:#7e7e7e;float:right;color:#FFF;padding:5px 7px;font-size:10px;font-weight:bold;border:none;margin:5px 0px; border-radius:0px !important;</div></div>';
				//infoWindow.setContent(contentString);  

				//infoWindow.setContent("<h6>Place: " + data.place + "</h6><b>range(sq km) : </b>" +  Math.round(data.coverage) + " | <b>Th(Mbps) :</b>" + data.throughput);
				var a="Place: " + data.place;
				var contentString = '<div style="width: 100.2%; padding-left:10px; height: 25px;float: left;color: #FFF;background: #ed1e79;line-height: 25px;border-radius:5px 5px 0px 0px;"><strong><b>'+ a+ '</b></strong></div><div style="clear:both;height:0px;"><div style="float:left;width:100%;padding:5px 10px;border:1px solid #ccc;border-top:none;border-radius:0px 0px 5px 5px;"><div style="float:left;color:#666;font-size:18px;font-weight:bold;margin:5px 0px;"> <div style="padding: 0px;"></div></div><div style="clear:both;height:0px;"></div><div style="float:left;line-height:18px;color:#666;font-size:13px;">'+ 'Th(Mbps) :' + (data.throughput/1000000).toFixed(4)+ '<br>'+'Coverage(Sq. Km) :'+parseFloat((data.coverage)).toFixed(2)+'<br>Throughput/User(Mbps)<br>'+'Required:'+parseFloat(data.th).toFixed(2)+ '<br>Satisfied:'+(parseFloat(data.th)/parseFloat(data.throughput/1000000)).toFixed(4) +'</div><div style="clear:both;height:0px;"></div><form action=\"navigat:"You feild"\"><input type=\"submit\"/ style=\"background:#7e7e7e;float:right;color:#FFF;padding:5px 7px;font-size:10px;font-weight:bold;border:none;margin:5px 0px; border-radius:0px !important;\" value=\"More Info\" ></form></div></div>';  
					infoWindow.setContent(contentString);

				  //infoWindow.setContent("<h6>Place: " + data.place + "</h6><b>Th(Mbps) :</b>" + (data.throughput/1000000).toFixed(4)+ "<br></h6><b>Coverage(Sq. Km) :</b>"+parseFloat((data.coverage)).toFixed(2)+ "<br></h6><b>Per Capital Th(Mbps)<br>-------------------</b>"+ "<br></h6><b>Required:</b>"+parseFloat(data.th).toFixed(2)+ "<br></h6><b>Satisfied:</b>"+(parseFloat(data.th)/parseFloat(data.throughput/1000000)).toFixed(4));//+  "</h6><b>Coverage(Sq. Km) :</b>" data.coverage);
				
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
	
});

$(window).load(function()
{
	$('#loading').hide();
});
</script>

</body>
</html>
