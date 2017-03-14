<?php
error_reporting(~E_ALL);

// Port Range // Port Araligi
$start = 1;
$finish = 1024;
 
$host = '192.168.1.103'; // Target IP // Hedef IP
 
for($port = $from; $port <= $to ; $port++)
{
  $fsp = fsockopen($host , $port);
  if ($fsp)
  {
    echo "PORT STATE \n";
    echo "$port   open \n";
    fclose($fsp);
  } 
 } 
?>
