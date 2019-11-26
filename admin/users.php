<?php

    // if(!is_admin($_SESSION['username'])) {

    //     header("Location: index.php");
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



      <!-- Page Content -->
        <div id="page-wrapper">
            

            <div class="row">
                
            </div>
            <div class="row">
                        <div class="col-md-8">



        <?php 

                            if(isset($_GET['source'])) {

                                $source = $_GET['source'];

                            } else {

                                $source = '';

                            }

                            switch($source) {
                                // case 'add_user';
                                // include "includes/add_user.php";
                                // break;

                                // case 'edit_user';
                                // include "includes/edit_user.php";
                                // break;

                                case '200';
                                echo "NICE 200";
                                break;

                                default:

                                include "view_users.php";

                                break;
                            }

                        
                        ?>



</div>
</div>
</div>
</div>
</div>
         


 </div>
</div>
</div>
</div>
</div>
<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
