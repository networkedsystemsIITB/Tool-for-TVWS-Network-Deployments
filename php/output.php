<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>TV White Space Simulation</title>
    <meta charset='utf-8' />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content='' name='description' />
    <meta content='' name='author' />
    <!-- Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/custom.css"/>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script type="text/javascript" src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <script type="text/javascript">
      function show_tdma() { document.getElementById("channel_area").style.display = 'block';
      
                             document.getElementById("tdma_area1").style.display = 'block';
                             
                             document.getElementById("tdma_area2").style.display = 'block';
                             
                             document.getElementById("tdma_area3").style.display = 'block';
                             
                             document.getElementById("tdma_area4").style.display = 'block';
                             
                             document.getElementById("tdma_area5").style.display = 'block'; }
                             
      function show_csma() { document.getElementById("csma_area").style.display = 'block'; }
    </script>

    <script type="text/javascript"
  src="dygraph-combined-dev.js"></script>
     <style> 
    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 {
    width: 100%;    
    background-color: #f2f2f2;
}

table#t02 {
    width: 100%;    
    background-color: #FFFFFF;
}


</style>
    
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
         <img src="images/1.png" alt="HTML5 Icon" width="330" height="38"> <a class='navbar-brand' href='index.html'/><font color="black"><b></b></font></a>
         <img src="images/logo.gif" alt="HTML5 Icon" width="50" height="50"> <a class='navbar-brand' href='index.html'/><font color="black"><b></b></font></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class='active'><a href="index_test.html">Home</a></li>
            <li><a href="readme.html">Readme</a></li>
            <li><a href="output.php">Output Section</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contacts.html">Contacts</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    
    <form action="index.php" method="post" autocomplete="off">
    
    <div class='container-fluid'>
      <div class='row'>
        <div class='col-md-4'>
         
          <div class='well'>
            

            <ol>
           
            <a href="#avg">Graphs</a><br>
            <a href="#max">Max Throughput</a><br>
            <a href="#avg1">Average Throughput</a><br>
            <a href="#area">Total Area Coverage</a><br>
            <a href="#req">BS Which Does not Satisfy User Requirements</a><br>
            </ol>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          </div>

         <div class='alert alert-info' id='result_box' ><strong id='result_count'></strong></div>
        </div>
        <div class='col-md-8'>
          <noscript>
            <div class='alert alert-info'>
              <h4>Your JavaScript is disabled</h4>
              <p>Please enable JavaScript to view the map.</p>
            </div>
          </noscript>
     <ul>
          
    <!-- <li>     
        
         <h4>Throughput Comparison at Each BS( TDMA and Theoretical) </h4>
    </li>
    <hr> -->
     <?php
 shell_exec("bash for_dy_graph.sh");

?>

  <!--   <div id="graphdiv3"
  style="width:700px; height:350px;margin: 7px 7px 7px 50px; padding: 2px;"></div>

<script type="text/javascript">


  g3 = new Dygraph(
    document.getElementById("graphdiv3"),
    "csv/dygraph.csv",
    {
      rollPeriod: 7,
      showRoller: true,
       title: 'Throughput at Each BS',
      ylabel: 'Throughput(Mbps)',
      legend: 'always',
      xlabel: 'BS Index',
      showRangeSelector: true,
      rangeSelectorHeight: 30,
      rangeSelectorPlotStrokeColor: 'yellow',
      rangeSelectorPlotFillColor: 'lightyellow',
       strokeWidth: 2.5
    }
  );
</script> -->
 

 <ul>
          
    <li>  <h4><a name="avg"></a>Average Throughput Comparison</h4></li>
  


<img src="avg_th.png" >
<!-- height="520" width="600"> -->
<!--             <div id="graphdiv4"
  style="width:700px; height:350px; border: 2px dashed black; margin: 7px 7px 7px 50px; padding: 2px;"></div>

<script type="text/javascript">
function barChartPlotter(e) {
  var ctx = e.drawingContext;
  var points = e.points;
  var y_bottom = e.dygraph.toDomYCoord(0);  // see http://dygraphs.com/jsdoc/symbols/Dygraph.html#toDomYCoord
 
  // This should really be based on the minimum gap
  var bar_width = 2/3 * (points[1].canvasx - points[0].canvasx);
  ctx.fillStyle = e.color;
 
  // Do the actual plotting.
  for (var i = 0; i < points.length; i++) {
    var p = points[i];
    var center_x = p.canvasx;  // center of the bar
 
    ctx.fillRect(center_x - bar_width / 2, p.canvasy,
        bar_width, y_bottom - p.canvasy);
    ctx.strokeRect(center_x - bar_width / 2, p.canvasy,
        bar_width, y_bottom - p.canvasy);
  }
}

  g4 = new Dygraph(
    document.getElementById("graphdiv4"),
    "csv/dygraph_avg.csv",
    {
       plotter: barChartPlotter,
       dateWindow: [0, 2]
    }
  );
</script>

<script type="text/javascript">


  g3 = new Dygraph(
    document.getElementById("graphdiv3"),
    "csv/dygraph.csv",
    {
      rollPeriod: 7,
      showRoller: true,
       title: 'Throughput at Each BS',
      ylabel: 'Throughput(Mbps)',
      legend: 'always',
      xlabel: 'BS Index',
      showRangeSelector: true,
      rangeSelectorHeight: 30,
      rangeSelectorPlotStrokeColor: 'yellow',
      rangeSelectorPlotFillColor: 'lightyellow',
       strokeWidth: 2.5
    }
  );
</script> -->

<?php
 shell_exec("bash max_th.sh>a");
 shell_exec("bash max_th1.sh>b"); 
 shell_exec("bash avg.sh>avg1"); 
 shell_exec("bash avg1.sh>avg2"); 
 shell_exec("bash max_th_theory.sh>max_hh");
?> 
<hr>
<li>  <h4><a name="max"></a>Maximum throughput</h4></li>
  

<style type="text/css">
.myTable { width:100px;background-color:#FBFCFC;border-collapse:collapse; }
.myTable th { background-color:#FBFCFC;width:40%; }
.myTable td, .myTable th { padding:15px;border:1px solid #040; }
</style> 
<table class="myTable">
<tr>
<th colspan=6 ><center>Maximum Throughput at BS</center>
</tr>

<tr>
<th >Place</th><th>Theoretical throughput(Mbps)</th><th>TDMA UDP(Mbps)</th><th>TDMA TCP(Mbps)</th>
</tr>

<tr>
    <td> 
        <?php
       $message=shell_exec("cut -d ',' -f1 a");
       print_r($message);
        ?> 
    </td>
    <td>
       <?php
       $message=shell_exec("cut -d ',' -f1 max_hh");
       print_r($message);
        ?>
    </td>
    <td>
        <?php
           $message=shell_exec("cut -d ',' -f2 a");
           print_r($message);
        ?> 
    </td>
    <td>
    <?php
           $message=shell_exec("cut -d ',' -f2 b");
           print_r($message);
    ?>
    </td>
</tr>
</table>
<hr>
<li>  <h4><a name="avg1"></a>Average Throughput</h4></li>


<table class="myTable" >
<tr>
<th colspan=6 ><center>Average Throughput of all BS</center>
</tr>

<tr>
<th>Theoretical throughput(Mbps)</th><th>TDMA UDP(Mbps)</th><th>TDMA TCP(Mbps)</th>
</tr>

<tr>
    
    <td>
       <?php
      $message=shell_exec("awk -F , -v OFS=, '{ sum += $8; n++ } END { if (n > 0) print (sum /n)/1000000; }' csv/final_ns3_res_merge_udp_tcp.csv");
             print_r($message);
      ?> 
    </td>
    <td>
        <?php
           $message=shell_exec("cut -d ',' -f1 avg1");
           print_r($message);
        ?> 
    </td>
    <td>
    <?php
           $message=shell_exec("cut -d ',' -f2 avg2");
           print_r($message);
    ?>
    </td>
</tr>
</table>
          
  

  

<hr>
 <li>  <h4><a name="area"></a>Total Area Coverage:</h4></li>
  



  <div class='row'>
  <ul>
  <!-- <h4>Total Area Coverage:</h4> -->
  <label>
  <?php
 $message=shell_exec("bash total_area.sh");
      print_r($message);
  echo "Sq. Km.";
  ?>          
  </label>
  </ul>
  </div>
<hr>
 <li>  <h4><a name="req"></a>Following are the BS which does not satisfy user requirment:</h4></li>
  
  

   <div class='row'>
  <ul>
  <h4></h4>
  <label>
  <?php
 shell_exec("bash BS_not_satisfying.sh>not-satisfying.csv");

echo "<table>\n\n";
echo "<tr><th rowspan=2 >Place</th><th rowspan=2 >Population</th><th rowspan=2 >Throughput Required per User(Mbps)</th><th colspan=2 >Throughput Satisfied per User(Mbps)</th></tr><tr><td>(TDMA UDP)</td><td>(TDMA TCP)</td></tr>";
$f = fopen("not-satisfying.csv", "r");
while (($line = fgetcsv($f)) !== false) {
        echo "<tr>";
        foreach ($line as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
        echo "</tr>\n";
}
fclose($f);
echo "\n</table>";
 

  // $iparr = split ("|", $message); 
 // $temp="";
 // for ($i=0;i<strlen($message)-1;$i++ )
 // {
 //    if($message[$i]!='B' && $message[$i+1]!='S')
 //      $temp.=$message[$i];
 //    else
 //    {
 //      echo $temp;
 //      $temp="";
 //      echo "<br>";
 //    }
 // }
  // echo $iparr[0];
//   foreach ($iparr as $value) {
//     echo "$value <br>";
// }
  ?>          
  </label>
  </ul>
  </div>

<hr>
 <li> <h3>Final Comment</h3>
  <h4>With this configurations % of user of all BS can be satisfied their requirment.<h4>
   </li>
   <hr>
   <li> 
   <?php
           shell_exec("bash download.sh");
           
    ?>
  <a href="place_pop_lat_lon_alt_bw_coverage_throughput_tdma-UDP_tdma-TCP.csv" download id="submit">Download BS Configuration</a>
</li>

</ul>
  
  <hr>
 


        </p>
        </div>
      </div>
    </div>

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.address.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false&libraries=places"></script>
    <script type="text/javascript" src="js/maps_lib.js"></script>
    <script type='text/javascript'>
      //<![CDATA[
        $(window).resize(function () {
          var h = $(window).height(),
            offsetTop = 105; // Calculate the top offset
        
          $('#map_canvas').css('height', (h - offsetTop));
        }).resize();
        
        $(function() {
          var myMap = new MapsLib({
            fusionTableId:      "1m4Ez9xyTGfY2CU6O-UgEcPzlS0rnzLU93e4Faa0",
            googleApiKey:       "AIzaSyA3FQFrNr5W2OEVmuENqhb2MBB2JabdaOY",
            locationColumn:     "geometry",
            map_center:         [19, 73],
            locationScope:      "india"
          });

          var autocomplete = new google.maps.places.Autocomplete(document.getElementById('search_address'));
      
          $(':checkbox').click(function(){
            myMap.doSearch();
          });

          $(':radio').click(function(){
            myMap.doSearch();
          });
          
          $('#search_radius').change(function(){
            myMap.doSearch();
          });
          
          $('#search').click(function(){
            myMap.doSearch();
          });
          
          $('#find_me').click(function(){
            myMap.findMe(); 
            return false;
          });
          
          $('#reset').click(function(){
            myMap.reset(); 
            return false;
          });
          
          $(":text").keydown(function(e){
              var key =  e.keyCode ? e.keyCode : e.which;
              if(key === 13) {
                  $('#search').click();
                  return false;
              }
          });
        });
      //]]>
    </script>
  </body>
</html>
