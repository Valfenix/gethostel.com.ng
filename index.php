<?php include ('includes/navigation.php'); ?>
<?php

if(isset($_POST['submit'])) {


$to         = "info@gethostel.com.ng";
$subject    = wordwrap($_POST['subject'], 70);
$body       = $_POST['body'];
$header     = "From: " .$_POST['email'];

mail($to,$subject,$body,$header);

}

?>


                            <?php

                                $visitor_ip = $_SERVER['REMOTE_ADDR'];





                                $query = "SELECT * FROM counter_table WHERE ip_address = '$visitor_ip'";
                                $result = mysqli_query($connection, $query);

                                if(!$result){
                                    die("Retrieving Query Error<br>".$query);
                                }

                                $total_visitors = mysqli_num_rows($result);
                                if($total_visitors<1){
                                    $query = "INSERT INTO counter_table(ip_address) VALUES('$visitor_ip')";
                                    $result = mysqli_query($connection, $query);
                                }

                                
                            ?>


                            <!-- FOR NORMAL COUNTER -->

                            <?php

                                $visitor_date = date("Y-m-d H:i:s");

                                $query = "INSERT INTO n_counter_table(n_visit) VALUES('$visitor_date')";
                                $result = mysqli_query($connection, $query);

                            ?>

    
        <header id="home">
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                <!--<ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>-->
                <div class="carousel-inner">
                    <div class="carousel-item active" style="background-image: url(images/main/real5.jpg)">
                        <div class="carousel-caption">
                            <h1 class="animated fadeInLeftBig">Welcome to <span>GETHostel</span></h1>
                            <p class="animated fadeInRightBig">We are a community that cares about you</p>

                            <a data-scroll class="btn btn-start animated fadeInUpBig" data-toggle="modal" data-target="#exampleModalCenter">Join Us</a>
                        </div>
                    </div>
                    <div class="carousel-item" style="background-image: url(images/main/real.jpg)">
                        <div class="carousel-caption">
                            <h1 class="animated fadeInLeftBig">Welcome to <span>GETHostel</span></h1>
                            <p class="animated fadeInRightBig">Student Accomodation Simplified</p>
                            <a data-scroll class="btn btn-start animated fadeInUpBig" data-toggle="modal"  data-target="#exampleModalCenter">Join Us</a>
                            
                        </div>
                    </div>
                    <div class="carousel-item" style="background-image: url(images/main/real6.jpg)">
                        <div class="carousel-caption">
                            <h1 class="animated fadeInLeftBig">Welcome to <span>GETHostel</span></h1>
                            <p class="animated fadeInRightBig">Available hostels and Apartments Near You</p>
                            <a data-scroll class="btn btn-start animated fadeInUpBig" data-toggle="modal" data-target="#exampleModalCenter">Join Us</a>
                        </div>
                    </div>
                    <div class="carousel-item" style="background-image: url(images/main/real7.jpeg)">
                        <div class="carousel-caption">
                            <h1 class="animated fadeInLeftBig">Welcome to <span>GETHostel</span></h1>
                            <p class="animated fadeInRightBig">Accomodation with cComfor and Ease</p>
                            <a data-scroll class="btn btn-start animated fadeInUpBig" data-toggle="modal" data-target="#exampleModalCenter">Join Us</a>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <!--<span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>-->
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <!--<span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>-->
                    <i class="fa fa-angle-right"></i>
                </a>

                <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>
            </div>
        </header>


        

        
        
            <section id="services">
                <div class="container">
                <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                    
                    <div class="text-center">
                        <h2>Who We Are</h2>
                        <p>GETHostel is a Nigerian established real estate firm dedicated to providing accomodation
                    majorly for students.</p>
                    </div>
                    
                </div>
                <div class="text-center our-services">
                    <div class="row">
                        <div class="col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="service-icon">
                                <i class="fa fa-binoculars"></i>
                            </div>
                            <div class="service-info">
                                <h3>Our Mission</h3>
                                <p>To provide easy and stress-free accomodation for students. We pride ourself in providing adequate and comfortable apartments for our clients</p>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
                            <div class="service-icon">
                                <i class="fa fa-info"></i>
                            </div>
                            <div class="service-info">
                                <h3>Customer Service</h3>
                                <p>Our clients rarely encouter issues, but when such time comes, we make it a priority to solve them, our client's issue is our issue.</p>
                            </div>
                        </div>
                        <!--<div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
                            <div class="service-icon">
                                <i class="fa fa-gears"></i>
                            </div>
                            <div class="service-info">
                                <h3>Awesome Support</h3>
                                <p>Here at GETHostel, we have and get our clients not just what they want, but also, what they need. There is a home for everyone.</p>
                            </div>
                        </div>-->
                    
                    </div>
                </div>
                </div>
            </section>


            <div class="book book1 jarallax">
                <div class="container">
                <h3>We are Dedicated to solving Accomodation Issues Experienced By Students in Tertiary Institutions</h3>
                <!--<h3>change the world.</h3>-->
                <p>We operate within the commercial and residential property segments, increasing the number of accomodation around schools while improving the standard of housing. </p>

                </div>
            </div>







            <!-- gallery -->
            <div class="gallery">
                <div class="container">
                    <div class="w3l-heading">
                        <h2 class="w3ls_head"><small>Hot Listings</small></h2>
                    </div>

                    <div class="row">

                    

                    <?php


                        $sql = "SELECT * FROM tbl_album WHERE al_category_id=6 ORDER BY albumid DESC LIMIT 3";
                        $select_query = mysqli_query($connection, $sql);


                        while ($row = mysqli_fetch_assoc($select_query)) {
                        $aimage=$row['image'];
                        $aid=$row['albumid'];
                        $aname=$row['name'];
                        $astatus=$row['status'];
                        $adesc=$row['adesc'];

                ?>


                    <div class="col-md-4 team-grid">
                        <div class="team-img">
                            
                            <a href="" class="vl7">View</a>
                            <?php echo "<a class='example-image-link' href='listings_post.php?id=$aid'>"; ?>
                            <img class="img-responsive" src="admin/acatch/<?php echo $aimage; ?>" >

                            
                            <figcaption class="overlay">
                                <h3><?php echo $aname ?> </h3>
                                <p><?php echo $adesc ?></p>
                                
                            </figcaption>
                        </div>
                    </div>

                    
                                  
                       <?php } ?> 


                        
                        
                        <div class="clearfix"> </div>
                        <script src="js/lightbox-plus-jquery.min.js"> </script>
                    </div>
                </div>
                <div class="wrap-button">
                    <a href="#" id="loadMore" class="btn-load">Load More</a>
                </div>
            </div>
            <!-- //gallery -->

                






            <section id="contact">
                
                <div id="contact-us" class="jarallax parallax">
                    <div class="container">
                        <div class="row">
                            <div class="heading text-center wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <h2>Contact Us</h2>
                                <p>For any information, complaints, inquiry or suggestions on how to make us serve you better, please send us a message. Thanks</p>
                            </div>
                        </div>
                        <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="row">
                                <div class="col-sm-6">
                                    <form id="main-contact-form" name="contact-form" method="post" action="#">
                                        <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                            <input type="text" name="name" class="form-control text1" placeholder="Enter Name" required="required">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Email Address" required="required">
                                            </div>
                                        </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="subject" class="form-control text1" placeholder="Subject" required="required">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="message" id="message" class="form-control text1" rows="4" placeholder="Enter your message" required="required"></textarea>
                                        </div>                        
                                        <div class="form-group">
                                        <button type="submit" class="btn-submit">Send Now</button>
                                        </div>
                                    </form>   
                                </div>
                                <div class="col-sm-6">
                                    <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                        <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>-->
                                        <ul class="address">
                                            <!--<li><i class="fa fa-map-marker"></i> <span> Address:</span> 2400 South Avenue A </li>-->
                                            <li><i class="fa fa-phone"></i> <span> Phone:</span><a href="https://wa.me/2348181118914"> +234 818 111 8914</a>,  <a href="https://wa.me/2349033777715"> +234 903 377 7715</a>  </li>
                                            <li><i class="fa fa-envelope"></i> <span> Email:</span><a href="mailto:gethostelservices@gmail.com">gethostelservices@gmail.com</a>,  <a href="mailto:info@gethostel.com.ng">info@gethostel.com.ng</a></li>
                                        </ul>
                                    </div>                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>        
            </section><!--/#contact-->

            <?php

                                

                        if(isset($_POST['create_email1'])) {

                                $name = $_POST['name1'];

                                $email = $_POST['email1'];

                                $phone = $_POST['phone'];

                                $position = $_POST['position'];
                                
                                $email_date = date('d-m-y');

                                
                                

                                $query = "SELECT email FROM subscribers WHERE email = '$email'";
                                $result = mysqli_query($connection, $query);
                                
                                if(!$result) {

                                    die("QUERY FAILED ." . mysqli_error($connection));
                                }
                                while ($row = mysqli_fetch_assoc($result)) {

                                    
                                $email1 = $row['email'];
                                }
                                if ($email == $email1){
                                echo "<script type='text/javascript'>
                                        $(document).ready(function(){
                                            $('#exampleModalCenter2').modal('show');
                                        });
                                    </script>";
                                    // header("Location: blog.php");
                                }else{


                                $query = "INSERT INTO subscribers(name,email,phone,position,email_date)";

                                $query .=
                                "VALUES('{$name}','{$email}','{$phone}','{$position}',now())";
                                
                                $create_email_query = mysqli_query($connection, $query);
                                
                                // confirmQuery($create_email_query);

                                if(!$create_email_query) {

                                    die("QUERY FAILED ." . mysqli_error($connection));
                                    
                                }

                                echo "<script type='text/javascript'>
                                        $(document).ready(function(){
                                            $('#exampleModalCenter3').modal('show');
                                        });
                                    </script>";
                                // header("Location: includes/welcome.php");
                                


                                    

                                // echo "<alert><p class='bg-success'>Thanks </p></alert>";

                        }
                        }
                
        ?>




            <div class="modal fade " id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="myModal88" aria-hidden="true">
                    <div class="modal-dialog modal-lg ">
                        <div class="modal-content gg">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    &times;</button>
                                
                            </div>
                            
                            <h5 class="mode-title">Don't Wait Up. Join us, and we will give you the latest</h5>
                            <div class="modal-body modal-body-sub">
                                <div class="container">

                                    <form role="form" action="" method="post" id="login-form" autocomplete="off">
                                            <div class="form-group nice">
                                                <input  name="name1" type="text" id="name" class="form-control" placeholder="Enter a name " autocomplete="on" required>
                                                
                                            </div>

                                            <div class="form-group nice">
                                                <input  name="email1" type="email" id="email" class="form-control" placeholder="Enter Email" autocomplete="on" required>
                                                
                                            </div>

                                            <div class="form-group nice">
                                                <input  name="phone" type="text" id="phone" class="form-control" placeholder="Enter phone no" autocomplete="on" required>
                                                
                                            </div>

                                            <div class="form-group nice">
                                                <label for="">Are you a....</label>
                                                <select class="form-control form-control-sm" name="position" required>
                                                    <option>Student</option>
                                                    <option>Parent / Guardian</option>
                                                    <option>Worker</option>
                                                </select>                                             
                                            </div>

                                            <button type="submit" href="" name="create_email1" id="btn-login" class="btn btn-custom btn-lg btn-block text-center button-chills btn-primary">SEND</button>

                                        </form>
                                        



                                    <!--<form role="form" action="includes/welcome.php" method="post" id="login-form" autocomplete="off" enctype="multipart/form-data">

                                        

                                        <div class="form-group nice">
                                            <input type="text" name="name1" id="name" class="form-control" placeholder="Enter a name " autocomplete="on" required>
                                            
                                        </div>


                                        <div class="form-group nice">
                                            <input type="email" name="email1" id="email" class="form-control" placeholder="Enter Email" autocomplete="on" required>
                                            
                                        </div>

                                        
        
                                        <input type="submit" name="create_email1" id="btn-login" class="btn btn-custom btn-lg btn-block text-center button-chills btn-primary" value="SEND">
                                        
                                    </form>-->

                                



                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>






            <div class="modal fade " id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="myModal88" aria-hidden="true">
                    <div class="modal-dialog modal-lg ">
                        <div class="modal-content gg">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    &times;</button>
                                
                            </div>
                            
                            <h3 class="mode-title text-danger">Email Already Exists</h3>
                            


                        </div>
                    </div>
                </div>
            </div>



            <div class="modal fade " id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="myModal88" aria-hidden="true">
                    <div class="modal-dialog modal-lg ">
                        <div class="modal-content gg">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    &times;</button>
                                
                            </div>
                            
                            <h2 class="mode-title text-success">Successful, welcome</h2>
                            <div class="container su">
                                <p>Your details were submitted successfully, you can now receive our updates</p>
                            </div>
                            <div class="modal-body modal-body-sub">
                                
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            
            









<!--<script type="text/javascript">
                        $(window).on('load',function(){
                            $('#exampleModalCenter').modal('show');
                        });
                    </script>-->




            <!--<script>
            
                $(function(){
                    $("#login-form").submit(function(e){
                        e.preventDefault();

                        $form = $(this);

                        $.post(document.location.url, $(this).serialize(), function(data) {
                            $feedback = $("<div>").html(data).find(".form-feedback").hide();

                            $form.prepend($feedback)[0];
                            $feedback.fadeIn(1500);
                        });
                    });
                })
            
            </script>-->




            <script>
                $(function(){
                    $(".gallery-grid").slice(0, 3).show();
                    $("#loadMore").on('click', function (e) {
                        e.preventDefault();
                        $("gallery-grid:hidden").slice(0, 1).slideDown();
                        if ($("gallery-grid:hidden").lenght == 0) {
                            $("#load").fadeOut('slow');
                        }
                        $('html,body').animate({
                            scrollTop: $(this).offset().top
                        }, 1500);
                    });
                });
            
            </script>

            <?php include ('includes/footer.php'); ?>