<?php
error_reporting(~E_ALL);

// Port Range // Port Araligi
$start = 1;
$finish = 65535;
   
  echo "PORT STATE \n";

$host = '192.168.1.103'; // Target IP // Hedef IP
 
for($port = $start; $port <= $finish ; $port++)
{
  $fsp = fsockopen($host , $port);
  if ($fsp)
  {
    echo "$port   open \n";
    fclose($fsp);
  } 
 } 
?>
