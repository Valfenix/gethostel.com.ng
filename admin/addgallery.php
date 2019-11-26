<?php include ('includes/admin_navigation.php'); ?>



        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Inner House</h1>
                </div>





                <?php
		
                if(isset($_POST['submit'])) {
                $ename = $_POST['gname'];
                }
                
                ?>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Fill This Form To Add House Insides
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <form action="glink.php" method="post" enctype="multipart/form-data" name="upload">
                                            
                                                <div class="form-group">
                                                    <label>Select Album</label>
                                                    <?php
                                                        // $sql = "SELECT * FROM tbl_album WHERE status='process'";
                                                        $rs_result = mysqli_query($connection, "SELECT * FROM tbl_album WHERE status='process'");
                                                        echo "<select class='form-control' name='gname'>";
                                                        while ($row = mysqli_fetch_assoc($rs_result)) {


                                                        echo "<option value=$row[albumid]>$row[name]</option>";
                                                        
                                                        };
                                                        
                                                            echo "</select>";
                                                                                    
                                                                    ?>
                                                                    </div>
                                                                                                            
                                                                    <button type="submit" class="btn btn-primary" name="submit">Go Next</button>
                                                                    
                                                                </form>
                                                            </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                    </div>
                                    <!-- /.row (nested) -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    </div>
                </div>

                <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>