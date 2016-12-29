<?php
header('Content-Type: text/xml');
header('Access-Control-Allow-Origin: *');
$xml = file_get_contents("http://capitalbikeshare.com/data/stations/bikeStations.xml");
echo $xml
?>
