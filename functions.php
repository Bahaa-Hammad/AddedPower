<?php

function emptyInputSignup($name, $email,$username,$pwd,$pwdRepeat){
    
    $check;

    if(empty($name) || empty($email) || empty($username)|| empty($pwd)|| empty($pwdRepeat)){
        $check = true;
    }
    else{
        $check = false;
    }
    
    return $check; 
    
}

function invalidUid($username){
    
    $check;

    if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
        $check = true;
    }
    else{
        $check = false;
    }
    
    return $check; 
    
}

function invalidEmail($email){
    
    $check;

    //The FILTER_VALIDATE_EMAIL filter validates an e-mail address.

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $check = true;
    }
    else{
        $check = false;
    }
    
    return $check; 
    
}

function pwdMatchTwice($pwd,$pwdRepeat){
    
    $check;

    //The FILTER_VALIDATE_EMAIL filter validates an e-mail address.

    if($pwd !== $pwdRepeat){
        $check = true;
    }
    else{
        $check = false;
    }
    
    return $check; 
    
}

function uidTaken($conn,$username, $email){ // Used also in login functions
    $check;
    // Accsess database

    // " = ? " is placeholder: to be used later after filtering out sql injections
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";

    // [security] Filter out the given variables before inserting them into the DB
    $stmt = mysqli_stmt_init($conn); // Initialize a statement and return an object to use with stmt_prepare():

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: sign-up.html?error=failedSqlStmt");
        exit();
    }

    //prepare sql 
    mysqli_stmt_bind_param($stmt, "ss", $username,$email);
    mysqli_stmt_execute($stmt); // run on DB

    // Check whether the user already exists:

    $dbData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($dbData)){
        return $row;
    }

    else{
        $check = false;
        return $check; 
    }
    
    mysqli_stmt_close($stmt);
}


function createUser($conn,$name, $email,$username,$pwd){
    // Accsess database

    // " = ? " is placeholder: to be used later after filtering out sql injections, By passing prepered statments
    $sql = "INSERT INTO users(usersName,usersEmail,usersUid,usersPwd) VALUES(?,?,?,?);";

    $stmt = mysqli_stmt_init($conn); // Initialize a statement and return an object to use with stmt_prepare():

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: sign-up.html?error=failedSqlStmt");
        exit();
    }


    // Hash The password: By PHP password_hash(), It can be replaced by md5(). 
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email,$username,$hashedPwd);
    mysqli_stmt_execute($stmt); // run on DB
    mysqli_stmt_close($stmt);

    //Send the user to inner page

   
    
    
}


// Login Functions:

function emptyInputLogin($username,$pwd){
    
    $check;

    if(empty($username)|| empty($pwd)){
        $check = true;
    }
    else{
        $check = false;
    }
    
    return $check; 
    
}

function loginUser($conn,$username,$pwd){
    /*
     Passing the username twice as the user may login using either of them
     uidTaken() sql's statment graps based on usersUid OR usersEmail:
     -> $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;"; <-
    */

    $uidTaken = uidTaken($conn,$username, $username);

    // If user DNE 
    if($uidTaken === false){
        header("location: login-1.html?error=wrongLogin");
        exit();
    }

    // If user exists: Check password


    /*
        userTaken() returns a row array with all the user's data
         
        if($row = mysqli_fetch_assoc($dbData)){
            return $row;
        }
        
        We want to check the password
    */


    $pwdHashed = $uidTaken['userPwd'];
    $checkPwd = password_verify($pwd,$pwdHashed);

    // Password DOES NOT Match:
    if($checkPwd === false){
        header("location: login-1.html?error=wrongLogin");
        exit();
    } else if($checkPwd === true){ //Password Match: Sessions

        // Start a session
        session_start();

        // initialize sessions superglobals variables:
        
        $_SESSION["userid"] = $uidTaken["usersId"];
        $_SESSION["useruid"] = $uidTaken["usersUId"];
        header("location: index.php");
        exit();
    }

    }