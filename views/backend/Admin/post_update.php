<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Page</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>

<?php

    $connect= mysqli_connect('localhost','root','','learn_store');

    $id=$_GET["id"];

    $sql="SELECT * FROM learn WHERE id=$id";

    $query=mysqli_query($connect,$sql);

    $data=mysqli_fetch_assoc($query); //get Data

    ?>

    <div class="col-12 bg-info d-flex flex-column justify-content-center align-items-center min-vh-100">
        <div class="col-6">
            <h2 class="mb-4">Update post</h2>
        </div>
        <div class="card p-3 w-50">
            <form method="POST">
                <input type="hidden" name="id" value="<?php echo $data['id']?>">

                <div class="mb-3 d-flex flex-column">
                    <label class="form-label mb-3">Update picture link</label>
                    <input type="text" name="photo" class="form-control" value="<?php echo $data['photo']?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Update Title</label>
                    <input type="text" name="title" class="form-control" value="<?php echo $data['title']?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Update post !</label>
                    <input type="text" name="content" class="form-control" value="<?php echo $data['content']?>" style="height: 150px">
                </div>
                <div class="d-flex justify-content-end align-items-center">
                    <button type="submit" name="update" class="btn btn-success">Update Post</button>
                </div>
            </form>

            <?php
                if(isset($_POST["update"])){
                    $GetID=$_POST["id"];
                    $GetPhoto=$_POST["photo"];
                    $GetTitle=$_POST["title"];
                    $GetContent=$_POST["content"];

                    $UpdateData="UPDATE learn SET photo='$GetPhoto',title='$GetTitle',content='$GetContent' WHERE id=$GetID";
        
                    mysqli_query($connect,$UpdateData);   
                }
            ?>

        </div>
    </div>
    </div>

</body>
<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</html>