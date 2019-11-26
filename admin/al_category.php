<?php include ('includes/admin_navigation.php'); ?>



        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">
                            
                            <!--<span class="text-primary"></span>, welcome To Valfenix categories.-->
                            
                        </h2>

                        <div class="col-xs-6">

                            <?php insert_alcategories(); ?>  
                            

                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="cat-title">Add Album Category</label>
                                    <input type="text" class="form-control" name="cat_title">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                                </div>
                            </form>

                           <?php // UPDATE AND INCLUDE QUERY
                           
                           if(isset($_GET['edit'])) {

                            $cat_id = $_GET['edit'];

                            include "includes/update_al_category.php";


                           }
                           
                           ?>




                        </div><!--Add Category Form-->
                        



                        <div class="col-xs-6">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category Title</th>
                                    </tr>
                                </thead>
                                <tbody>

                                   
                                <?php findAllalCategories(); ?>
                                
                               
                                <?php deletealCategories(); ?>
                                    

                                </tbody>
                            </table>
                        </div>


                        
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
    
    
    
    
   