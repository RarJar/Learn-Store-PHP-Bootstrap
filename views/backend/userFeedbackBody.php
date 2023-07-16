<div class="col-md-9 bg-info d-flex flex-column align-items-center">
    <h2 class="col-md-12 ms-3 mt-4 mb-2">User Feedback List</h2>
    <div class="col-md-12 ms-3 column">

    <?php
        $connect= mysqli_connect('localhost','root','','learn_store');

        $sql="SELECT * FROM feedback";

        $query =mysqli_query($connect,$sql);

        while($row = mysqli_fetch_assoc($query)){ 
                    
            $time =date('d-M-Y',strtotime($row['comment_date']));
        
    ?>

        <!-- List Start -->
        <div class="alert alert-primary mt-2" role="alert">
            <div class="d-flex flex-row justify-content-between">
                <?php
                echo "
                
                <p>{$row['email']}</p>
                <p>$time</p>
                
                ";
                ?>
            </div>
            <div class="d-flex flex-row justify-content-between">
                <?php
                echo "
                
                <p>{$row['comment']}</p>
                
                ";
                ?>

                <?php
                    echo "
                        <a href='../../../controller/feed_delete_data.php?id={$row['id']}'>Delete</a>
                    ";
                ?>

            </div>
        </div>
        <!-- List End -->
        <?php
        }
        ?>
    </div>
</div>
