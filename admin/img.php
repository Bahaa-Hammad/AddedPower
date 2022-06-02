<?php

require_once '../dbConn.php';

 $read = "SELECT * FROM images"; //query
 $result = mysqli_query($conn,$read); //connection, query

 if(isset($_GET['error']) && $_GET['error'] == 'picError'){       
  echo '<div class="alert alert-danger" role="alert">
          Please Upload A Picture
          </div>';
    }

?>

<?php
    session_start();

     //Page Title
    $pageTitle = 'Site Banners';

    //Includes
    include 'connect.php';

    //Check If user is already logged in
    if(isset($_SESSION['adminUsername']) && isset($_SESSION['adminPwd']))
    {
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddedPower - Site Banners</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- FAVICONS ICON -->
    <link rel="icon" href="../images/favicon.png" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png" />
</head>

<?php 

  include 'Includes/functions/functions.php'; 
  include 'Includes/templates/header.php';

?>
<body>

 <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Site Banners</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Image</th>
              <th scope="col">Image Path</th>
              <th scope="col">Image Preview</th>
              <th scope="col">Manege</th>
            </tr>
          </thead>
          <tbody>
              <?php while($record = mysqli_fetch_array($result)){ ?>
            <tr>
              <td><?php echo $record['img_id']; ?></td>
              <td><?php echo $record['img']; ?></td>
              <td><?php echo $record['img_path']; ?></td>
              <td><img width="120" height="100" src="<?php echo $record['img_path']; ?>"></td>
              <td>
                  <form method="post" action="imgUpdate.php?updateid=<?php echo$record['img_id']?>" enctype="multipart/form-data">
                    <input class="form-control" type="file" name="file">
                    <input class="form-control" type="submit" value="Upload Image" name="submit">
                </form>
                  
            </td>
            </tr>
          </tbody>
            <?php } ?>
        </table>
      </div>
  </div>
</div>

    
</body>
</html>

<?php 
        
        //Include Footer
        include 'Includes/templates/footer.php';
    }
    else
    {
        header('Location: login.php');
        exit();
    }

?>


