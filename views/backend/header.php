<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- Custom Css -->
    <link rel="stylesheet" href="../../../assets/css/admin.css">

</head>

<body class="d-flex justify-content-center align-items-center">
    <div class="col-12 row min-vh-100 d-flex justify-content-center">
        <div class="col-md-3 bg-secondary d-flex flex-column align-items-start">
            <h1 class="mt-3 mb-4 text-info fw-bold mx-2">Admin Panel</h1>
            <div class="d-flex flex-column w-100">
                <a href="./addPost.php" class="alert alert-success text-decoration-none" role="alert">Add new post</a>
                <a href="./postList.php" class="alert alert-success text-decoration-none" role="alert">Post List</a>
                <a href="./userFeedback.php" class="alert alert-success text-decoration-none" role="alert">User Feedback</a>
            </div>
        </div>