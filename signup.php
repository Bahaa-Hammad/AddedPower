<?php


// Verify that accsess to the page done through the form

if (isset($_POST["submit"])){

    //User signup form Info
    
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $username = $_POST["uId"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdRepeat"];

    //Error Handeling: 
    require_once 'dbConn.php';
    require_once 'functions.php'; // php functions for handeling errors and utility functions 

    if(emptyInputSignup($fname,$lname,$email,$tel,$username,$pwd,$pwdRepeat) !== false){
        // Send the user back with the error attached to the url using ?error=
        header("location: sign-up.php?error=emptyinput"); 
        exit(); // Stop the script 

    }

     if(invalidUid($username) !== false){
        // Send the user back with the error attached to the url using ?error=
        header("location: sign-up.php?error=invaliduid"); 
        exit(); // Stop the script 

    }

     if(invalidEmail($email) !== false){
        // Send the user back with the error attached to the url using ?error=
        header("location: sign-up.php?error=invalidemail"); 
        exit(); // Stop the script 

    }

     if(pwdMatchTwice($pwd,$pwdRepeat) !== false){
        // Send the user back with the error attached to the url using ?error=
        header("location: sign-up.php?error=pwdNotMatch"); 
        exit(); // Stop the script 

    }

     // Must put db connection to check db data
     if(uidTaken($conn,$username,$email) !== false){
        // Send the user back with the error attached to the url using ?error=
        header("location: sign-up.php?error=takenID");
        exit(); // Stop the script
    }

    // Creating user account
    createUser($conn,$fname,$lname,$email,$tel,$username,$pwd);
    header("location: index.php");
    exit(); // Stop the script
}
else { // if the url was not accessed throgh the form
    header("location: sign-up.php");
    exit(); // Stop the script

}



