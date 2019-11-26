
<?php include ('includes/db.php');?>
<?php include ('admin/functions.php');?>

<?php include ('includes/navigation.php'); ?>













	        
                <div class="gallery">
                <div class="container">
                    <div class="w3l-heading">
                        <h2 class="w3ls_head">Listings</h2>
                    </div>
                    <div class="row">

                    <?php
                    if(isset($_POST['submit'])) {
                        $search = $_POST['search'];

                        $sql = "SELECT * FROM tbl_album WHERE property_tags LIKE '%$search%'";
                        $search_query = mysqli_query($connection, $sql);

                        if(!$search_query) {

                            die("QUERY FAILED" .mysqli_error($connection));
                        }
                        $count = mysqli_num_rows($search_query);

                        if($count == 0) {
                    

                            echo "<h2><span class='text-warning'><b>AWWnn!!</b></span> SORRY, NO RESULTS WERE FOUND FOR <span class='text-danger'><b>$search</b></span> CHECK IF YOU TYPED IT CORRECTLY</h2>";
                        } else {


                        while ($row = mysqli_fetch_assoc($search_query)) {
                        $aimage=$row['image'];
                        $aid=$row['albumid'];
                        $aname=$row['name'];
                        $astatus=$row['status'];
                        $adesc=$row['adesc'];
                        $property_id = $row['property_id'];
                        $property_type = $row['property_type'];
                        $bedrooms = $row['bedrooms'];
                        $bathrooms = $row['bathrooms'];
                        $address = $row['address'];
                        $plot_size = $row['plot_size'];
                ?>

                <br>
                           
                <div class="col-md-4 ">

                    <h2 class="page-header">
                                Search result for <span class="text-primary"><b><?php echo $search; ?></b></span>
                                
                            </h2>



                        <div class="card lister">

                            <div class="grid">
                                <figure class="effect-apollo">

                               

                                   <?php echo "<a class='example-image-link' href='listings_post.php?id=$aid'>"; ?>
                                   <div class="list-cap1">
                                       
                                    <h5 class="carousel-caption list-view">View</h5>
                                        <img class="img-responsive" src="admin/acatch/<?php echo $aimage; ?>" 
                                        
                                        alt="" />
                                    </div>
                                        <figcaption>
                                        </figcaption>	
                                    </a>
                                    

                                </figure>
                            </div>


                            <div class="card-body">
                                <div class="hid">
                                    <h4><?php echo $property_id; ?></h4>
                                </div>
                                <div class="detail-bottom">
                                    <ul>
                                     <span><i class="fa fa-home"></i></span><li> <?php echo $property_type; ?></li>
                                     <span class="bed-icon"><i class="fa fa-bed" aria-hidden="true"> </i><li > <?php echo $bedrooms; ?></li></span>
                                     <span class="bed-icon2"><i class="fa fa-bath"> </i><li > <?php echo $bathrooms; ?></li></span>
                                     <p><?php echo $adesc; ?></p>
                                     <!--<button type="button" name="view" id="view" data-toggle="modal"  data-target="#mymodal" class="btn btn-warning launch-modal">view amount</button>
                                    </ul>
                                    
                                    <div class="desc">
                                        
                                        
                                    </div>-->
                                </div>
                            </div>
                        </div>
                </div>




                        
 <?php } } } ?> 



                        
                        
                        <div class="clearfix"> </div>
                        <script src="js/lightbox-plus-jquery.min.js"> </script>
                    </div>
                </div>
            </div>
            <!-- //gallery -->









                 













			<!--   NAVIGATION FOR BLOG POST -->
				<div class="blog_navigation">
					<div style="margin-top:20px;margin-left:180px">
               
                    <?php
                        $sql = "SELECT COUNT(name) FROM tbl_album";
                        $select_query = mysqli_query($connection, $sql);
                        $row = mysqli_fetch_row($select_query);
                        $total_records = $row[0];
                        $total_pages = ceil($total_records / 12);
                        for ($i=1; $i<=$total_pages; $i++) {
                        echo "<span class='navigations_items_span'>";
                        echo "<b>Page </b>";
                        echo "<a href='index.php?page=".$i."' class='navigation_item selected_navigation_item'>".$i."</a>";							
                        echo "</span>";
                        };
?>
						
						
					</div>
				</div>
		</div>

    <script>

        $('#mymodal').on('hidden.bs.modal', function(e) {
        this.modal('show');
    });
    
    </script>

<script>

jQuery(document).ready(function(){

    /************* Modal ******* */


    $('.launch-modal').on('click', function(e){
        e.preventDefault();
        $('#' + $(this).data('modal-id')).modal();
    });
    
});

</script>


<?php include ('includes/footer.php');?>