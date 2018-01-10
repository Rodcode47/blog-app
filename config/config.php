<?php
ob_start(); //Turns on output buffering 
session_start();

$timezone = date_default_timezone_set("Europe/London");

//function mysqli_connect() {
  //return "mysql://uhj3txzcrdk1wggq:bkom4w80jksbp484@rmspavs8mpub7dkq.chr7pe7iynqr.eu-west-1.rds.amazonaws.com:3306/apkdjbm97wp7tfwh";
//};

$con = mysqli_connect("mysql6001.site4now.net", "a2f07e_social", "AWQMGLUZ5H8Y", "db_a2f07e_social"); //Connection variable
  
if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

?>