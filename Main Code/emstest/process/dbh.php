<?php

$servername = "localhost";
$dBUsername = "digicldp_emstest";
$dbPassword = "8Xd*40y!4vf%TaE2gP";
$dBName = "digicldp_emstest";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if(!$conn){
	echo "Databese Connection Failed";
}

?>