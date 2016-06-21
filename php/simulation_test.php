<?php
// Detect if the posted value is not empty
//echo $_POST['total'];

$data=$_POST['total'];
$file = 'after_edit.txt';
file_put_contents($file, $data);
fclose($file1);
shell_exec("python after_edit.py>after_edit_csv.csv");
header("Location: ns3_simulation_run.php");
?>
