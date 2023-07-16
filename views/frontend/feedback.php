    <!-- Contact Start -->
    <div class="container-fluid py-1" id="feedback">
        <div class="container py-4">
            <div class="text-center mb-4">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Feedback</h5>
                <h2>Feedback For Any Query</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form bg-secondary shadow-sm rounded p-4">
                        <form name="sentMessage" method="POST">
                            <div class="control-group bg-light">
                            <input type="email" name="email" class="form-control border-0 py-3 px-3" placeholder="Please enter your email"></input>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group bg-light">
                                <input type="text" name="comment" class="form-control border-0 py-5 px-3" placeholder="Please enter your message"></input>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="text-end">
                                <input class="btn btn-outline-warning py-2 px-3" name="save" type="submit" value="Send Feedback"></input>
                            </div>
                        </form>

                        <?php
                            if(isset($_POST['save'])){

                                $email=$_POST["email"];
                                $comment=$_POST["comment"];

                                if($email=="" && $comment == "" ){
                                    
                                }else{
                                    $connect= mysqli_connect('localhost','root','','learn_store');

                                    $addEmail=$_POST['email'];   
                                    $addComment=$_POST['comment'];

                                    $sql="INSERT INTO feedback(email,comment) VALUES ('$addEmail','$addComment')";

                                    mysqli_query($connect,$sql);
                                }
                            }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->