<?php
    require_once '../dbConn.php';
    $id = $_GET['updateid'];


    if(isset($_FILES['file']['name']) && $_FILES['file']['name'] != ""){
        $filename = "../"."banners/" . $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'],$filename);

        if(file_exists($filename)){
             $sql = "UPDATE images SET img_path = '$filename' WHERE img_id = '$id'";

            mysqli_query($conn, $sql);
            mysqli_close($conn);
            header('location: img.php');
            exit();
            }
        }else{
            header('location: img.php?error=picError');
            exit(); 
          }


    //To get the id that is needed to be updated


    //To Disply Data in the form when updating
    $sql = "SELECT * FROM images WHERE img_id='$id'";
    $result = mysqli_query($conn,$sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddedPower - Image Update</title>
    

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>

    <!-- Change the values to disply the reconds from the database-->

    
<div class="container">
    <table class="table">
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
      <td><img src="<?php echo $record['img_path']; ?>"></td>
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



    
</body>
</html>

    