<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Data</title>
</head>
<body>
  
  <?php

    $connect= mysqli_connect('localhost','root','','learn_store');

    $id=$_GET['id'];
    
    $sql="DELETE FROM feedback WHERE id=$id";

    if(mysqli_query($connect,$sql)){
        header("location:../views/backend/Admin/userFeedback.php");
    }
    ?>
</body>
</html>