<?php 

$serverName ="localhost";
$dbUsername ="root";
$dbPassword ="";
$dbName ="kevinwebsite";

$conn = mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);


if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
}