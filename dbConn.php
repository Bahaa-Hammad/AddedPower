<?php


// Database Connection info 
$servername = "localhost";
$serverUsername = "root";
$serverPassword = "";
$DbName = "addedPower";

$conn = mysqli_connect($servername, $serverUsername, $serverPassword, $DbName);

// Check connection

if(!$conn){
    die("Connection Failed" . mysqli_connect_error());
}


// Recommended to leave php files open, if the page only includes php
