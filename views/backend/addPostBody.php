<div class="col-md-9 bg-info d-flex flex-column justify-content-center align-items-center">
        <div class="col-6">
                <h2 class="mb-4">Add new post</h2>
            </div>
            <div class="card p-3 w-50">
                <form action="../../../controller/insert_data.php" method="POST">
                    <div class="mb-3 d-flex flex-column">
                        <label class="form-label mb-3">Add picture link</label>
                        <input type="text" name="photo" class="form-control">
                        <p class="text-danger mt-1">
                            <?php
                             session_start();
                             if(isset($_SESSION['photoError'])){
                                 echo $_SESSION['photoError'];
                             }
                            ?>
                        </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add Title</label>
                        <input type="text" name="title" class="form-control">
                        <p class="text-danger mt-1">
                            <?php
                             if(isset($_SESSION['titleError'])){
                                 echo $_SESSION['titleError'];
                             }
                            ?>
                        </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Write a post !</label>
                        <input type="text" name="content" class="form-control" aria-describedby="emailHelp" style="height: 150px">
                        <p class="text-danger mt-1">
                        <?php
                            if(isset($_SESSION['contentError'])){
                                echo $_SESSION['contentError'];
                            }
                        ?>
                        </p>
                    </div>
                    <div class="d-flex justify-content-end align-items-center">
                        <button type="submit" name="save" class="btn btn-success">Upload Post</button>
                    </div>
                </form>
            </div>
        </div>
</div>
