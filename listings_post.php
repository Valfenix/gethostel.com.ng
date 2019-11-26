<!--Navigation-->

        <?php include ('includes/navigation.php'); ?>
        <?php include ('admin/functions.php');?>


        <?php


        // if($_SERVER['REQUEST_METHOD'] == "POST") {

        //     $name = trim($_POST['name']);
        //     $email    = trim($_POST['email']);
        //     $password = trim($_POST['password']);
        //     $cpassword = trim($_POST['cpassword']);
            


        //     $error = [

        //         'name'=> '',
        //         'email'=> '',
        //         'password'=> '',
        //         'cpassword'=> '',

        //     ];

            

        //     if(strlen($name) < 2) {


        //         $error['name'] = '<b class="text-danger">Name needs to be longer</b>';
        //     }

        //     if($name =='') {


        //         $error['name'] = '<b class="text-danger">Name cannot be empty</b>';
        //     }

        //     if ($password !== $cpassword){
        //         $error['cpassword'] = '<b class="text-danger">Passwords do not match,Try again';

        //     }

            


        //     if($email =='') {


        //         $error['email'] = 'Email cannot be empty';
        //     }

            

        //     if(email_exists($email)) {


        //         $error['email'] = 'Email already exists, <a href="index.php">Please login</a>';
        //     }

        //     if($password == '') {


        //         $error['password'] = 'Password cannot be empty';
        //     }


        //     foreach ($error as $key => $value) {

        //         if (empty($value)){
        
        //             unset($error[$key]);  
                
        //         }

        //     }//for loop

        //     if(empty($error)){

        //         register_user($name, $email, $password);

        //         // login_user($name, $password);
                
        //     }


        // }  

        ?>




























        <?php $aid=$_REQUEST['id']; ?>

        <div class="gallery">
                <div class="container">
                    <div class="w3l-heading">
                    </div>
                    <div class="row">


                    <?php


                    $view_query = "UPDATE tbl_album SET views = views + 1 WHERE albumid = '$aid'";
                    
                    $send_query = mysqli_query($connection, $view_query);

                    if(!$send_query) {

                      die("query failed" );
                    }

           
                        $sql = "SELECT * FROM tbl_album where albumid='$aid'";
                        $rs_result = mysqli_query ($connection, $sql);

                        while ($row = mysqli_fetch_assoc($rs_result)) {
                            $aimage=$row['image'];
                            $aname=$row['name'];
                            $adesc=$row['adesc'];
                            $astatus=$row['status'];
                            $bedrooms=$row['bedrooms'];
                            $bathrooms=$row['bathrooms'];
                            $property_size=$row['property_size'];
                            $property_type=$row['property_type'];
                            $storeys=$row['storeys'];
                            $property_id=$row['property_id'];
                            $property_status=$row['property_status'];
                            $views=$row['views'];
                            $price=$row['price'];
                            $property_tags=$row['property_tags'];
                            $views=$row['views'];
                            $address=$row['address'];


                        
                        ?>

                        
                        <div class="container list-hd">
                            <h5><?php echo $aname; ?>( <span class="text-danger"> <?php echo $property_type; ?></span>)</h5>
                        </div>

                        <br>


                        <?php

                        $sql = "SELECT * FROM tbl_gallery where aid=$aid and status='process'";
                        $num_rows = mysqli_query($connection,$sql);	
                        $result = mysqli_num_rows($num_rows);	

                        while($row = mysqli_fetch_array($num_rows))
                        {
                        $gimage=$row['gimages'];
                        $gname=$row['gname'];

?>	


                    


                        <div class="col-md-4 gallery-grid">
                            <div class="grid">
                                <figure class="effect-apollo">

                               

                                    <a class="example-image-link" href="admin/gupload/<?php echo $gimage; ?>" data-lightbox="example-set" data-title="<?php echo $gname; ?>">
                                        <img class="img-responsive" src="admin/gupload/<?php echo $gimage; ?>" alt="" />
                                        <figcaption>
                                        </figcaption>	

                                        <i class="fa fa-angle-left"></i>
                                    <i class="fa fa-angle-right"></i>
                                    </a>
                                    
                                    

                                </figure>
                            </div>
                        </div>
                        
                            


                                           
                       <?php } }?> 

                       <br />
                        <div class="views1">
                            <p>Views: <?php echo $views; ?></p>
                        </div>

                        

                                               
                        <div class="clearfix"> </div>
                        <script src="js/lightbox-plus-jquery.min.js"> </script>
                    </div>
                </div>
            </div>
            <!-- //gallery -->

                    <center>
                        <button class="btn btn-sm btn-price">
                            <!--<span class="naira">N</span>-->
                            <span class="price1"><?php echo $price; ?></span>
                        </button>
                    </center>
                    
                    

            <div class="container">
                <div class="main-details">
                    <h5 class="details-header">
                        Property Details
                    </h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="icon-box">
                                <h6>House Description</h6>
                                <?php echo $adesc; ?><span class="text-muted"></span>
                            </div>

                            <div class="icon-box">
                                <h6>House Address</h6>
                                <?php echo $address; ?><span class="text-muted"></span>
                            </div>

                            <div class="icon-box">
                                <h6>Property Status</h6>
                                <?php echo $property_status; ?><span class="text-muted"></span>
                            </div>

                            <div class="icon-box">
                                <h6>Bathrooms</h6>
                                <?php echo $bathrooms; ?><span class="text-muted"></span>
                            </div>

                            <div class="icon-box">
                                <h6>Bedrooms</h6>
                                <?php echo $bedrooms; ?><span class="text-muted"></span>
                            </div>
                            
                        </div>

                        <div class="col-md-6">
                            <div class="icon-box">
                                <h6>Property Type</h6>
                                <?php echo $property_type; ?><span class="text-muted"></span>
                            </div>
                            <div class="icon-box">
                                <h6>Property Size</h6>
                                <?php echo $property_size; ?><span class="text-muted"></span>
                            </div>
                            <div class="icon-box">
                                <h6>Storeys</h6>
                                <?php echo $storeys; ?><span class="text-muted"></span>
                            </div>
                            <div class="icon-box">
                                <h6>Property Tags</h6>
                                <?php echo $property_tags; ?><span class="text-muted"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

























                    <!--Button trigger modal 
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Launch demo modal
                    </button>-->

                    <!-- Modal -->
                    <!--<div class="modal fade" id="mymodal" tabindex="-1" role="dialog"  aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Registration</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">X</span>
                            </button>
                            
                        </div>
                        <h4 class="modat-title">Dont't wait up. Drop your Email to get our lates</h4>
                        <div class="modal-body">
                            
                            









                        </div>
                        <!--<div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>-->
                        <!--</div>
                    </div>
                    </div>-->-->

                    <?php

                    // if(isset($_POST['create_email'])) {

                    //         $email = $_POST['email'];
                            
                    //         $email_date = date('d-m-y');
                        


                    //         $query = "INSERT INTO subscribers(email,email_date)";

                    //         $query .=
                    //         "VALUES('{$email}',now())";
                            
                    //         $create_email_query = mysqli_query($connection, $query);
                            
                    //     confirmQuery($create_email_query);

                    //     $the_email_id = mysqli_insert_id($connection);

                    //     echo "<alert><p class='bg-success'>Thanks </p></alert>";

                    //     }


                    ?>




















                    <!--<div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="myModal88" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                        &times;</button>
                                    
                                </div>
                                
                                <h5 class="mode-title">Don't Wait Up. Drop Your Email, and we will give you the latest</h5>
                                <div class="modal-body modal-body-sub">
                                    <div class="container">



                                        <form role="form" action="" method="post" id="login-form" autocomplete="off">

                                            <div class="form-group nice">
                                                <label for="text" class="sr-only">Email</label>
                                                <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" autocomplete="on" required>
                                                
                                            </div>

                                            
                                            <input type="submit" href="javascript:void(0)" name="create_email" id="btn-login" class="btn btn-custom btn-lg btn-block text-center button-chills btn-danger" value="Register">

                                        </form>




                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
	<!--<script>
		$('#myModal88').modal('show');
	</script>  
	 header modal -->

                    <script type="text/javascript">
                        $(window).on('load',function(){
                            $('#mymodal').modal('show');
                        });
                    </script>


                    <!--<script type="text/javascript">
                        
                            $('#mymodal').modal('show');
                    </script>



<?php include ('includes/footer.php'); ?>