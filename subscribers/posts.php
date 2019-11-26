<?php include "includes/admin_navigation.php"; ?>






<?php

    // if(!is_admin($_SESSION['email'])) {

    //     header("Location: index.php");
    // }


?>
    

       



        <!-- Navigation -->





        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        
                        <h2 class="page-header">
                            
                            <span class="text-primary">  <?php echo $_SESSION['username'] ?> </span>, welcome To GETHostel posts.
                            
                        </h2>
                        

                        <?php 

                            if(isset($_GET['source'])) {

                                $source = $_GET['source'];

                            } else {

                                $source = '';

                            }

                            switch($source) {
                                case 'add_post';
                                include "includes/add_post.php";
                                break;

                                case 'edit_post';
                                include "includes/edit_post.php";
                                break;

                                // case '200';
                                // echo "NICE 200";
                                // break;

                                default:

                                include "includes/view_all_posts.php";

                                break;
                            }

                        
                        ?>

                  
                        
                        
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
    <!-- /#wrapper -->
    
    </script>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <script src="js/scripts.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

    

</body>

</html>