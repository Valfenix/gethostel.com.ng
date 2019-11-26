<?php include ('includes/admin_navigation.php'); ?>

<?php 

// if(!isset($_SESSION['user_role'])) {

//     header("Location: ../login.php");
//     echo "<script>

//             You are not an admin
    
//             </script>";

// }


if(!is_admin($_SESSION['username'])) {

        header("Location: ../index.php");
    }




?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <span class="text-primary"> <?php echo $_SESSION['username'] ?> </span>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Admin Page
                            </li>
                        </ol>

                        <div class="container">
                            
                            <div class="panel">
                                <div class="row">
                                    <div class="col-md-4 c-1">
                                        <h3>Visits In Past Day</h3>
                                        <?php

                                            $visitor_ip = $_SERVER['REMOTE_ADDR'];

                                            // select * from dt_table where  `date` >= DATE_SUB(CURDATE(), INTERVAL 10 DAY)
                                            $query = "SELECT * FROM counter_table WHERE visit_date >= DATE_SUB(CURDATE(), INTERVAL 1 DAY)";
                                            $result1 = mysqli_query($connection, $query);

                                            if(!$result1){
                                                die("Retrieving Query Error<br>".$query);
                                            }
                                            $visits = mysqli_num_rows($result1);
                                            echo "<p class='c-d'>$visits</p>";echo "<p>visits</p>";
                                        ?>
                                    </div>

                                    <div class="col-md-4 c-1">
                                        <h3>Visits In Past WEEK</h3>
                                        <?php

                                            $visitor_ip = $_SERVER['REMOTE_ADDR'];

                                            // select * from dt_table where  `date` >= DATE_SUB(CURDATE(), INTERVAL 10 DAY)
                                            $query = "SELECT * FROM counter_table WHERE visit_date >= DATE_SUB(CURDATE(), INTERVAL 2 DAY)";
                                            $result1 = mysqli_query($connection, $query);

                                            if(!$result1){
                                                die("Retrieving Query Error<br>".$query);
                                            }
                                            $visits = mysqli_num_rows($result1);
                                            echo "<p class='c-d'>$visits</p>";echo "<p>visits</p>";
                                        ?>
                                    </div>

                                    <div class="col-md-4 c-1">
                                        <h3>Visits In Past MONTH</h3>
                                        <?php

                                            $visitor_ip = $_SERVER['REMOTE_ADDR'];

                                            // select * from dt_table where  `date` >= DATE_SUB(CURDATE(), INTERVAL 10 DAY)
                                            $query = "SELECT * FROM counter_table WHERE visit_date >= DATE_SUB(CURDATE(), INTERVAL 28 DAY)";
                                            $result1 = mysqli_query($connection, $query);

                                            if(!$result1){
                                                die("Retrieving Query Error<br>".$query);
                                            }
                                            $visits = mysqli_num_rows($result1);
                                            echo "<p class='c-d'>$visits </p>";echo "<p>visits</p>";
                                        ?>
                                    </div>

                                    
                                
                            </div>
                        </div>




                        <!-- NORMAL COUNTER -->

                        <div class="container">
                            
                            <div class="panel">
                                <div class="row">
                                    <div class="col-md-4 c-1">
                                        <h3>Visits In Past Day</h3>
                                        <?php

                                            

                                            // select * from dt_table where  `date` >= DATE_SUB(CURDATE(), INTERVAL 10 DAY)
                                            $query = "SELECT * FROM n_counter_table WHERE n_visit >= DATE_SUB(CURDATE(), INTERVAL 1 DAY)";
                                            $result1 = mysqli_query($connection, $query);

                                            if(!$result1){
                                                die("Retrieving Query Error<br>".$query);
                                            }
                                            $visits = mysqli_num_rows($result1);
                                            echo "<p class='c-d'>$visits</p>";echo "<p>visits</p>";
                                        ?>
                                    </div>

                                    <div class="col-md-4 c-1">
                                        <h3>Visits In Past WEEK</h3>
                                        <?php

                                            

                                            // select * from dt_table where  `date` >= DATE_SUB(CURDATE(), INTERVAL 10 DAY)
                                            $query = "SELECT * FROM n_counter_table WHERE n_visit >= DATE_SUB(CURDATE(), INTERVAL 2 DAY)";
                                            $result1 = mysqli_query($connection, $query);

                                            if(!$result1){
                                                die("Retrieving Query Error<br>".$query);
                                            }
                                            $visits = mysqli_num_rows($result1);
                                            echo "<p class='c-d'>$visits</p>";echo "<p>visits</p>";
                                        ?>
                                    </div>

                                    <div class="col-md-4 c-1">
                                        <h3>Visits In Past MONTH</h3>
                                        <?php

                                            

                                            // select * from dt_table where  `date` >= DATE_SUB(CURDATE(), INTERVAL 10 DAY)
                                            $query = "SELECT * FROM n_counter_table WHERE n_visit >= DATE_SUB(CURDATE(), INTERVAL 28 DAY)";
                                            $result1 = mysqli_query($connection, $query);

                                            if(!$result1){
                                                die("Retrieving Query Error<br>".$query);
                                            }
                                            $visits = mysqli_num_rows($result1);
                                            echo "<p class='c-d'>$visits </p>";echo "<p>visits</p>";
                                        ?>
                                    </div>

                                    
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
