<?php include ('includes/admin_navigation.php'); ?>
<?php $asid=$_REQUEST['ids']; ?>
<style>.navigation_item{
		padding: 0px 5px;
		background: #fff;
		text-decoration: none;
		
		color: #e3e3e3 !important;
		font-size: 12px;
		border: 2px solid #e3e3e3;
		border-radius: 1px;
		-webkit-transition: all 0.2s linear;
		-moz-transition: all 0.2s linear;
		-ms-transition: all 0.2s linear;
		-o-transition: all 0.2s linear;
	}
	.navigation_item:hover,.selected_navigation_item{
		border: 2px solid #2A6496;
		border-radius: 2px;
		color: #2A6496 !important;
		background: #fff;
	}
	</style>


<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Inner House Compartments</h1>
                </div>
                
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         View Inner House Compatment Control panel
                        </div>
                        <div class="panel-body">
                           <div class="table-responsive table-bordered">
                           <?php
                                if (isset($_GET["page"])) { $page = $_GET["page"]; } else { $page=1; };
                                    $start_from = ($page-1) * 20;
                                    $sql = "SELECT * FROM tbl_gallery WHERE status='process' and aid='$asid' ORDER BY gid ASC LIMIT $start_from, 20";
                                    $select_gallery = mysqli_query ($connection, $sql);
                                ?>

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Image Name</th>
                                            <th>Images</th>
											<th colspan=2 width="18%">Action (Delete)</th>  
                                        </tr>
                                    </thead>


                                    <?php
                                        while ($row = mysqli_fetch_assoc($select_gallery)) {
                                    ?>

                                    <tbody>
                                        <tr>
                                            <td><?php echo $row["gimages"]; ?></td>
                                            <td><a href='gchangeimage.php?key0=<?php echo $row["gid"];?>&asid2=<?php echo $row["aid"]; ?>'><img src="gcatch/<?php echo $row["gimages"]; ?>"  width="100px"/></a></td>
                                            <td><a href='gallerydelete.php?key1=<?php echo $row["gid"]; ?> && key2=<?php echo $row["aid"]; ?>'>Delete</a> 

                                        </tr>
										</tbody>

                                    <?php
                                        };
                                    ?>

                                    </table>
                                    <strong>Pages  </strong>

                                    <?php
                                        $sql = "SELECT COUNT(aid) FROM tbl_gallery where aid='$asid' AND status='process'";
                                        $select_count = mysqli_query($connection,$sql);
                                        $row = mysqli_fetch_row($select_count);
                                        $total_records = $row[0];
                                        $total_pages = ceil($total_records / 20);
                                        for ($i=1; $i<=$total_pages; $i++) {
                                        echo "<a href='viewsgimages.php?page=$i&ids=$asid' class='navigation_item selected_navigation_item'>".$i."</a> ";
                                    };
                                    ?>


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