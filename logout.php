<?php

// Close & Destroy session variables
session_start(); // Must Open Session First to edit session variables
session_unset();
session_destroy();

// Redirect user to main page
header("location : index.php"); 
exit(); // Stop the script 