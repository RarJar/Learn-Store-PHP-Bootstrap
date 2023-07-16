    <!-- Body Start -->
    <?php
    $connect= mysqli_connect('localhost','root','','learn_store');

    $id=$_GET["id"];

    $sql="SELECT * FROM `learn` WHERE id=$id";

    $query=mysqli_query($connect,$sql);

    $data=mysqli_fetch_assoc($query); //get Data

    $date=$data['created_date'];

    $time =date('d-M-Y',strtotime($date));

    ?>
    <div class="container py-4">
        <img src="<?php echo $data['photo']?>" class="w-100 rounded" id="post_img">
        
        <div class="d-flex flex-row justify-content-between align-items-center my-3 px-5">
            <h3 class="text-dark">
                <?php echo $data['title']?>
            </h3>
            <?php
                echo "
                    <p>$time</p>                             
                ";
            ?>
        </div>
        <div class="px-3">
            <?php echo $data['content']?>
        </div>
    </div>
    <!-- Body End -->