<?php
error_reporting(~E_ALL);

// Port Range // Port Araligi
$from = 1;
$to = 1024;
 
$host = '192.168.1.103'; // Target IP // Hedef IP
 
for($port = $from; $port <= $to ; $port++)
{
  $fp = fsockopen($host , $port);
  if ($fp)
  {
    echo "PORT STATE \n";
    echo "$port   open \n";
    fclose($fp);
  } 
 } 
?>
