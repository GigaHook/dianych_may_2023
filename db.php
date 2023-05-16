<?php

$dbhost = 'localhost';
$dbuser = 'root'; 
$dbpass = 'root'; 
$dbname = 'sadik'; 

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

?>