<?php
    require_once 'dbConn.php';
    require_once 'functions.php';

    session_start();

    if(isset($_GET['submit'])){

        if(isset($_GET['phone'])){
            $phone = $_GET['phone'];
        }else{
            $phone = $userInfo['usersPhone'];
        }

        if(isset($_GET['email'])){
            $email = $_GET['email'];
        }else{
            $email = $userInfo['usersEmail'];
        }

        $user = $_SESSION['userid'];
        
        $sql = "UPDATE users SET usersPhone = '$phone' , usersEmail= '$email' WHERE usersId = $user";
        if (mysqli_query($conn, $sql)) {
            echo "Record updated successfully";
            $userInfo = uidTaken($conn,$_SESSION['useruid'],$_SESSION['useruid']); 
            header("location: profilePage.php?state=done");
            exit();

        }else {
            echo "Error updating record: " . mysqli_error($conn);
            header("location: profilePage.php?state=error");
            exit();
        }
        mysqli_close($conn);
        
    }






?>