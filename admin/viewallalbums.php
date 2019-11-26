<?php include ('includes/admin_navigation.php'); ?>
<style>
    .navigation_item{
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
                    <h1 class="page-header">GETHostel </h1>
                </div>
                
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         GETHostel | Control panel
                        </div>
                        <div class="panel-body">
                           <div class="table-responsive table-bordered">
                           <?php
                                if (isset($_GET["page"])) 
                                { 
                                    $page = $_GET["page"]; 
                                } else 
                                    { 
                                        $page=1; 
                                    };
                                        $start_from = ($page-1) * 20;
                                        $sql = "SELECT * FROM tbl_album WHERE status='process' ORDER BY albumid DESC LIMIT $start_from, 20";
                                        $select_all_albums = mysqli_query ($connection,$sql);
                            ?>


                            <table class="table">    
                                <thead>
                                    <tr>
                                        
                                        <th>Name</th>
                                        <th width="20%">Description</th>
                                        <th>Images</th>
                                        <th>Date </th>
                                        <th>Bedrooms</th>
                                        <th>Bathrooms</th>
                                        <th>Property Size</th>
                                        <th>Property Type</th>
                                        <th>Stories</th>
                                        <th>Property ID</th>
                                        <th>Property Status</th>
                                        <th>Views</th>
                                        <th>Price</th>
                                        <th>Property Tags</th>
                                        <th colspan=2 width="18%">Action (Delete & Edit)</th>  
                                    </tr>
                                </thead>

                            <?php
                            while ($row = mysqli_fetch_assoc($select_all_albums)) {
                            ?>

                                <tbody>
                                    <tr>
                                        <td> <?php echo $row["name"]; ?> </td>
                                        <td><?php echo $row["adesc"]; ?></td>
                                        
                                           
                                        <td><a href='achangeimage.php?key0=<?php echo  $row["albumid"];?>'><img src="acatch/<?php echo $row["image"]; ?>"  width="100px"/></a></td>
                                        
                                        <td><?php echo $row["date"]; ?></td>
                                        <td><?php echo $row['bedrooms']; ?></td>
                                        <td><?php echo $row['bathrooms']; ?></td>
                                        <td><?php echo $row['property_size']; ?></td>
                                        <td><?php echo $row['property_type']; ?></td>
                                        <td><?php echo $row['storeys']; ?></td>
                                        <td><?php echo $row['property_id']; ?></td>
                                        <td><?php echo $row['property_status']; ?></td>
                                        <td><?php echo $row['views']; ?></td>
                                        <td><?php echo $row['price']; ?></td>
                                        <td><?php echo $row['property_tags']; ?></td>
                                        <td><a href='albumdelete.php?key1=<?php echo $row["albumid"]; ?>'>Delete</a> | <a href = 'editalbum.php?key0=<?php echo $row["albumid"]; ?> &key1=<?php echo $row["name"]; ?> &key2=<?php echo $row["adesc"]; ?>&key3=<?php echo $row["image"]; ?> &key4=<?php echo $row["bedrooms"]; ?> &key5=<?php echo $row["bathrooms"]; ?> &key6=<?php echo $row["property_size"]; ?> &key7=<?php echo $row["property_type"]; ?> &key8=<?php echo $row["storeys"]; ?> &key9=<?php echo $row["property_id"]; ?> &key10=<?php echo $row["property_status"]; ?> &key12=<?php echo $row["property_tags"]; ?> &key13=<?php echo $row["address"]; ?>'>Edit</a>
                                </tr>
                                </tbody>

                            <?php
                            };
                            ?>
                        </table>

                                <strong>Pages  </strong>

                                    <?php
                                    $sql = "SELECT COUNT(name) FROM tbl_album";
                                    $select_count = mysqli_query($connection,$sql);
                                    $row = mysqli_fetch_row($select_count);
                                    $total_records = $row[0];
                                    $total_pages = ceil($total_records / 20);
                                    for ($i=1; $i<=$total_pages; $i++) {
                                    echo "<a href='viewallalbums.php?page=".$i."' class='navigation_item selected_navigation_item'>".$i."</a> ";
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