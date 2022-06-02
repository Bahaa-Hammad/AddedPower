
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddedPower - Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<?php
    require_once 'dbConn.php';
    require_once 'functions.php';
    include('header-style-4.php');



    if(file_exists($_SESSION["profile_image"])){
        $pfp =  $_SESSION['profile_image'];
    }else{
        $pfp = "https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"; //Default
    }

    $userInfo = uidTaken($conn,$_SESSION['useruid'],$_SESSION['useruid']); 


?>


<body> 
    






<div class="container rounded bg-white mt-5 mb-5">
  
    <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img id="pfp" class="rounded-circle mt-5" width="150px" src=<?php echo $pfp?>> <br>
                    <span class="text-black-50"><?php echo $_SESSION['useruid'] ?></span>
                <span class="font-weight-bold">
                    <form method="post" action="changePFP.php" enctype="multipart/form-data">
                        <input class="form-control" type="file" name="file">
                        <input class="form-control" type="submit" value="Upload Image" name="submit">
                    </form>
                </span>
                </div>
            </div>
            <div class="col-md-9 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
    <form action="userInfoUpdate.php" method = "get">
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">First name</label><input disabled type="text" class="form-control" placeholder="first name" value="<?php echo $userInfo['usersFirstName'] ?>"></div>
                        <div class="col-md-6"><label class="labels">Last name</label><input disabled type="text" class="form-control" value="<?php echo $userInfo['usersLastName'] ?>" placeholder="last name"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Phone Number</label><input type="text" class="form-control" placeholder="enter phone number" value="<?php echo $userInfo['usersPhone'] ?>" name="phone"></div>
                        <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" placeholder="enter email" value="<?php echo $userInfo['usersEmail'] ?>" name="email"></div>
                    </div>
                    <div class="mt-5 text-center"><button class="btn btn-success profile-button" type="submit" name="submit" value = "submit">Save Profile</button></div>
                </div>
            </div>
        </div>
  </form>
  <?php
    if(isset($_GET['error']) && $_GET['error'] == 'picError'){

          echo '<div class="alert alert-danger" role="alert">
                 Please Upload A Picture
            </div>';
    }

    if(isset($_GET['state']) && $_GET['state'] == 'done'){

          echo '<div class="alert alert-success" role="alert">
                 Informaion Updated Successfully  
            </div>';
    }
?>

</div>

</body>
</html>

