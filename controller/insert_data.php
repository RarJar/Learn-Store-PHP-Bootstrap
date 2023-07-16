<?php
session_start();

    if(isset($_POST['save'])){

        $photo=$_POST["photo"];
        $title=$_POST["title"];
        $content=$_POST["content"];

        if($photo=="" && $title=="" && $content == "" ){
            if($photo==""){
                $_SESSION['photoError']="Add a picture";
            }

            if($title==""){
                $_SESSION['titleError']="Title is empty";
            }
            if($content==""){
                $_SESSION['contentError']="Content is empty";
            }

            header("location:".$_SERVER['HTTP_REFERER']);

        }else{
            $connect= mysqli_connect('localhost','root','','learn_store');

            $addPhoto=$_POST["photo"];
            $addTitle=$_POST['title'];   
            $addContent=$_POST['content'];

            $sql="INSERT INTO learn(photo,title,content) VALUES ('$addPhoto','$addTitle','$addContent')";

            mysqli_query($connect,$sql);

            header("location:".$_SERVER['HTTP_REFERER']);
        }
    }
?>