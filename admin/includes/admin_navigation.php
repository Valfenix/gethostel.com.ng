<?php session_start(); ?>
<?php ob_start(); ?>
<?php include "../includes/db.php"; ?>
<?php include "functions.php"; ?>


<?php

//     if(!isset($_SESSION['user_role'])) {

//     header("Location: ../index.php");  

// }
 

?>




<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ADMIN | GETHostel</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="//cdn.ckeditor.com/4.8.0/full/ckeditor.js"></script>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">GETHostel Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                <li><a href="../index.php">Homepage</a></li>
                <li class="dropdown">


                
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
                    
                        <?php
                    
                            if(isset($_SESSION['username'])) {

                                echo $_SESSION['username'];
                            }
                    
                        
                        ?>
                    
                    
                    
                     <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <!--<li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>-->
                            <a href="../includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#dem"><i class="fa fa-fw fa-arrows-v"></i>Posts<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="dem" class="collapse">
                            <li>
                                <a href="posts.php?source=add_post"> Add Posts</a>
                            </li>
                            <li>
                                <a href="./posts.php">View All Posts</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="categories.php"><i class="fa fa-fw fa-bar-chart-o"></i> Categories</a>
                    </li>

                    <li>
                        <a href="al_category.php"><i class="fa fa-fw fa-bar-chart-o"></i> Album Categories</a>
                    </li>

                    <li>
                        <a href="comments.php"><i class="fa fa-fw fa-comments"></i> Comments</a>
                    </li>
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#uem"><i class="fa fa-fw fa-camera"></i> Albums<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="uem" class="collapse">
                            <li>
                                <a href="addalbum.php"><i class="fa fa-fw fa-plus"></i> Add Album</a>
                            </li>
                            <li>
                                <a href="viewallalbums.php"><i class="fa fa-fw fa-eye"></i> View Albums</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#uem1"><i class="fa fa-fw fa-camera-retro"></i> Gallery<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="uem1" class="collapse">
                            <li>
                                <a href="addgallery.php"><i class="fa fa-fw fa-plus"></i> Add Gallery</a>
                            </li>
                            <li>
                                <a href="viewsgallery.php"><i class="fa fa-fw fa-eye"></i> View Gallery</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#uem9"><i class="fa fa-fw fa-user"></i> Users<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="uem9" class="collapse">
                            <li>
                                <a href="add_user.php"><i class="fa fa-fw fa-plus"></i> Add User</a>
                            </li>
                            <li>
                                <a href="view_users.php"><i class="fa fa-fw fa-eye"></i> View Users</a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>