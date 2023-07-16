<!-- Content Start -->
<div class="container" id="post">

            <div class="text-center mb-4">
                <h5 class="text-primary mb-2" style="letter-spacing: 5px;">POST</h5>
                <h2>For User To Learn</h2>
            </div>
        <div class="row">
            <!-- Card Start -->
            <?php
                $connect= mysqli_connect('localhost','root','','learn_store');

                $sql="SELECT * FROM learn";

                $query =mysqli_query($connect,$sql);

                while($row = mysqli_fetch_assoc($query)){ 
                    
                    $time =date('d-M-Y',strtotime($row['created_date']));
                    
                    ?>
                   
                   <div class="col-md-4 d-flex justify-content-center p-3">
                        <div class="card shadow-sm my-1 bg-white" data-aos="zoom-in" style="width: 20rem;">
                                <img class="card-img-top" id="card_img"
                                 src="<?php 
                                    echo "{$row['photo']}";
                                 ?>">  

                                <div class="card-body">
                                    <div class="d-flex flex-row justify-content-between">
                                        <?php
                                            echo "
                                                <h5>{$row['title']}</h5>
                                                <p>$time</p>                             
                                            ";
                                        ?>
                                    </div>
                                    <div class="card-text overflow-hidden" id="post_height">
                                        <?php
                                            echo "
                                                <p>{$row['content']}</p>                              
                                            ";
                                            ?>
                                    </div>
                                    <div class="d-flex justify-content-end align-items-end mt-2">
                                        <span class="btn btn-warning text-decoration-none" id="more_btn">
                                            <?php
                                                echo "
                                                <a href='./views/frontend/viewPost/viewPost.php?id={$row['id']}'>See more
                                                </a> 
                                                ";
                                            ?>
                                        </span>
                                    </div>
                                </div>
                        </div>
                    </div>

                  <?php
                }
            ?>
            <!-- Card End -->
        </div>
    </div>
    <!-- Content End-->