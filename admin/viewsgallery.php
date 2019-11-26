<?php include ('includes/admin_navigation.php'); ?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">View Gallery</h1>
                </div>
                
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <?php
		
                if(isset($_POST['submit'])){
                $ename = $_POST['gname'];
                }
			?>


            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Select to View Gallery
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="gslink.php" method="post" enctype="multipart/form-data" name="upload">
                                       
                                        <div class="form-group">
                                            <label>Select Event Name or Title</label>


                                            <?php
                                                $sql = "SELECT * FROM tbl_album WHERE status='process'";
                                                $select_all_gallery = mysqli_query ($connection, $sql);
                                                echo "<select class='form-control' name='gname'>";
                                                while ($row = mysqli_fetch_assoc($select_all_gallery)) {


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
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>