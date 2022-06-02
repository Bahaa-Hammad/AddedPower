<?php

require_once 'dbConn.php';

session_start();

// Defualt Pfp:


if($_SERVER['REQUEST_METHOD'] == "POST"){

    if(isset($_FILES['file']['name']) && $_FILES['file']['name'] != ""){
        $filename = "uploads/" . $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'],$filename);

        if(file_exists($filename)){
            $uid =  $_SESSION['userid'];
            $sql = "UPDATE users SET profile_image = '$filename' WHERE usersId = '$uid'";

            mysqli_query($conn, $sql);
            mysqli_close($conn);
            $_SESSION['profile_image'] = $filename;
            header('location: profilePage.php');
            exit();
        }
    }else{
        header('location: profilePage.php?error=picError');
        exit(); 
    }

}
