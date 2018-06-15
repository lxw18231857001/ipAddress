<?php  
  //ceshi//ceshi
include 'IpLocation.php';  
  
echo "<pre>";     
$ip = "47.93.97.127";     
$iplocation = new IpLocation();     
$location = $iplocation->getlocation($ip);     
print_r($location);    