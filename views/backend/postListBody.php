<div class="col-md-9 bg-info d-flex flex-column align-items-center">
    <h2 class="col-md-12 ms-3 mt-4 mb-2">Post List</h2>
    <div class="col-md-12 ms-3 column">

    <?php
        $connect= mysqli_connect('localhost','root','','learn_store');

        $sql="SELECT * FROM learn";

        $query =mysqli_query($connect,$sql);

        while($row = mysqli_fetch_assoc($query)){ 
                    
            $time =date('d-M-Y',strtotime($row['created_date']));
        
    ?>

        <!-- List Start -->
        <div class="alert alert-primary mt-2" role="alert">
            <div class="d-flex flex-row justify-content-between">
                <?php
                echo "
                
                <p>{$row['title']}</p>
                <p>$time</p>
                
                ";
                ?>
            </div>
 
            <div class="d-flex flex-row justify-content-between">
                <!-- Post Start -->
                <div class="overflow-hidden" id="post_height">
                    <?php
                    echo "
                
                    <p>{$row['content']}</p>
                
                    ";
                ?>
                </div>
                <!-- Post End -->

                <!-- Delete Start -->
                <div class="ms-3">
                    <?php
                        echo "
                            <a href='../../../controller/post_delete_data.php?id={$row['id']}'>Delete</a>
                        ";
                    ?>
                </div>
                <!-- Delete End -->

                <!-- Update start -->
                <div class="ms-3">
                    <?php
                        echo "
                            <a href='./post_update.php?id={$row['id']}'>More</a>
                        ";
                    ?>
                </div>
                <!-- Update end -->

            </div>
        </div>
        <!-- List End -->
        <?php
        }
        ?>
    </div>
</div>
