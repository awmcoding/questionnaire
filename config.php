<?php
/*
# This code is a compliment to "Covert lie detection using keyboard dynamics".
# Copyright (C) 2017  QianQian Li
# See GNU General Public Licence v.3 for more details.
*/


 $hostname="localhost"; //mysql Address
 $basename="root"; //mysql username
 $basepass=""; //mysql password
 $database="truth_or_lie"; //mysql database

 $conn=mysqli_connect($hostname,$basename,$basepass)or die("Can not connect to the mysql database"); //connect to mysql
 mysqli_select_db($conn, $database); // choose mysql database
 mysqli_query($conn, "set names 'utf8'");//mysql encoding

 echo '<a href="index.php">click me to run python via php</a>';


  //$command = escapeshellcmd('C:\xampp\htdocs\Heart-rate-measurement-using-camera\GUI.py');
     //$output = shell_exec($command);
     //echo $output;


     //$message = exec('C:\xampp\htdocs\Heart-rate-measurement-using-camera\GUI.py 2>&1');
     //print_r($message);
?>
