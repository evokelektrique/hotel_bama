<?php
$serverName = "localhost";
$userName = "root";
$password = "toor";
$dbName = "hotel_bama";
$conn = new mysqli($serverName,$userName,$password,$dbName );
$conn->set_charset("utf8");
mysqli_set_charset($conn,"utf8");


