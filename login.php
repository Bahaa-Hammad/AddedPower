<?php

if (isset($_POST["submit"])){

    //User signup form Info
    
    //Username or email
    $username = $_POST["uid"]; 
    $pwd = $_POST["pwd"];


    // Connect to Database and functions
    require_once 'dbConn.php';
    require_once 'functions.php';

    if(emptyInputLogin($username, $pwd) !== false){
        // Send the user back with the error attached to the url using ?error=
        header("location : sign-up.html?error=emptyinput"); 
        exit(); // Stop the script 
    }

    // Login user

    loginUser($conn,$username,$pwd);
    
}else{
    header("location : login-1.html"); 
    exit(); // Stop the script 

}