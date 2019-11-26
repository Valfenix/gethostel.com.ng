<?php include ('includes/db.php');?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="" />

        <title>GETHOSTEL</title> 

        <link href="css/sweetalert.css" type="text/css" rel="stylesheet">
        <link href="css/bootstrap.css" type="text/css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/css/font-awesome.css" type="text/css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet"> 
        <link rel="stylesheet" type="text/css" href="css/flexslider.css">
        <link rel="stylesheet" href="css/lightbox.css">
        <link href="litebox-master/assets/css/litebox.css" rel="stylesheet" type="text/css" media="all" />

        
    <link href="stylesheets/styles.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="pe-icon-7-stroke/css/pe-icon-7-stroke.css">

	<!-- Optional - Adds useful class to manipulate icon font display -->
	<link rel="stylesheet" href="pe-icon-7-stroke/css/helper.css">

        <!-- Bootstrap core CSS -->
        

        <!-- Custom styles for this template -->
        <link href="css/blog-home.css" rel="stylesheet">
    

        

        
    </head>
<body>

<div class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-light main-nav" id="services">
        <a class="navbar-brand" href="index.php"><img width="180px" height="79px" src="images/main/logo15.png" alt="" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="blog.php">Blog</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="listings.php">Listings</a>
                </li>
                
                <?php
                session_start();
                if(isset($_SESSION['user_role'])) {

                   echo "<li class='nav-item'>
                    <a class='nav-link' href='admin'>Admin</a>
                </li>
                 <li class='nav-item'>
                    <a class='nav-link' href='subscribers'>Subscriber</a>
                </li>";
                    
                }
                
                ?>

                
                

                <?php

                    // if(is_admin($_SESSION['email'])) {

                    //     echo "<li class='nav-item'><a class='nav-link' href='admin'>Admin</a></li>";
                    // }else {
                    //     echo "i";
                    // }
                    
                    // if(isset($_POST['login'])) {;


                    // login_user($_POST['email'],$_POST['password'] )  ;


                    // if (session_status() == PHP_SESSION_NONE){
                    //     session_start();

                    //     echo " ";

                    // }elseif ($_SESSION['user_role'] == 'admin'){
                    //      echo "<li class='nav-item'><a class='nav-link' href='admin'>Admin</a></li>";
                    // }


                    // 

                   

                    // } else{
                    //     echo "..";
                    // }



                ?>

                
               



            </ul>

            <div class="subscribe">
                <form action="search-list.php" method="post">
                    <input type="search" class="sub-email" name="search" placeholder="search..." required="">
                    <input type="submit" name="submit" value="">
                </form>
			</div>
        </div>
    </nav>
</div>




