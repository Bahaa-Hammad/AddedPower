<?php


// Verify that accsess to the page done through the form

if (isset($_POST["submit"])){

    //User signup form Info
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uId"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdRepeat"];

    //Error Handeling: 
    require_once 'dbConn.php';
    require_once 'functions.php'; // php functions for handeling errors and utility functions 

    if(emptyInputSignup($name, $email,$username,$pwd,$pwdRepeat) !== false){
        // Send the user back with the error attached to the url using ?error=
        header("location: sign-up.html?error=emptyinput"); 
        exit(); // Stop the script 

    }

     if(invalidUid($username) !== false){
        // Send the user back with the error attached to the url using ?error=
        header("location: sign-up.html?error=invaliduid"); 
        exit(); // Stop the script 

    }

     if(invalidEmail($email) !== false){
        // Send the user back with the error attached to the url using ?error=
        header("location: sign-up.html?error=invalidemail"); 
        exit(); // Stop the script 

    }

     if(pwdMatchTwice($pwd,$pwdRepeat) !== false){
        // Send the user back with the error attached to the url using ?error=
        header("location: sign-up.html?error=pwdNotMatch"); 
        exit(); // Stop the script 

    }

     // Must put db connection to check db data
     if(uidTaken($conn,$username,$email) !== false){
        // Send the user back with the error attached to the url using ?error=
        header("location: sign-up.html?error=takenID"); 
        exit(); // Stop the script 

    }



    // Creating user account
    createUser($conn,$name, $email,$username,$pwd);
    header("location: index.html");
    exit(); // Stop the script
}
else { // if the url was not accessed throgh the form
    header("location: sign-up.html");
    exit(); // Stop the script

}



