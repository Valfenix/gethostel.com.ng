<?php include ('includes/admin_navigation.php'); ?>
<?php 
$mykey0=$_REQUEST['key0'];
$mykey1=$_REQUEST['key1'];
$mykey2=$_REQUEST['key2'];
$mykey4=$_REQUEST['key4'];
$mykey5=$_REQUEST['key5'];
$mykey7=$_REQUEST['key7'];
$mykey8=$_REQUEST['key8'];
$mykey9=$_REQUEST['key9'];
$mykey10=$_REQUEST['key10'];
$mykey12=$_REQUEST['key12'];
$mykey13=$_REQUEST['key13'];

?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Update Album</h1>
                </div>
                
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <script type="application/javascript">
function img_up(){var fup = document.getElementById('upload');var fileName = fup.value;var ext = fileName.substring(fileName.lastIndexOf('.') + 1);if(ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG" || ext== "PNG" ||  ext=="png"){return true;}else{alert("Image format not supported!");fup.focus();return false;}}</script>
<?php
//echo $user;
if(isset($_POST['submit']))
{
$aname = $_POST['aname'];
$adesc = $_POST['adesc'];
$adate = date('Y-m-d H:i:s');
$status='progress';
$bedrooms = $_POST['bedrooms'];
                        $bathrooms = $_POST['bathrooms'];
                        $property_size = $_POST['property_size'];
                        $property_type = $_POST['property_type'];
                        $storeys = $_POST['storeys'];
                        $property_id = $_POST['property_id'];
                        $property_status = $_POST['property_status'];
                        $price = $_POST['price'];
                        $property_tags = $_POST['property_tags'];
                        $address = $_POST['address'];
                        $plot_size = $_POST['plot_size'];
// This is the temporary file created by PHP
if (empty($aname))

{
 echo " <div class='alert alert-danger'><strong>ERROR</strong> - Empty fields are not allowed !</div>"; 
 
}
else
{



$query = "UPDATE tbl_album SET name='$aname',adesc='$adesc',bedrooms='$bedrooms',bathrooms='$bathrooms',property_size='$property_size',property_type='$property_type',storeys='$storeys',property_id='$property_id',property_status='$property_status',price='$price',property_tags='$property_tags',address='$address',plot_size='$plot_size' WHERE albumid = '$mykey0'";
$update_query = mysqli_query($connection, $query);

echo "<script>location.href='viewallalbums.php'</script>";
//echo " <div class='alert alert-success'>Your New Event Is Successfully Added. <a href='viewallevents.php'>View events</a> |<a href='addevent.php'> Add new events</a></div>";


    




}
}	
?>

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Fill This Form To Add Album
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="#" method="post" enctype="multipart/form-data" name="upload">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>House Name or Title</label>
                                                    <input class="form-control" placeholder="Enter Title" name="aname" value="<?php echo $mykey1 ?>">
                                                        <p class="help-block">Example "House At Akoka"</p>
                                                
                                                </div>
                                                <div class="form-group">
                                                
                                                    <label>Event Description</label>
                                                    <p class="help-block" style="font-weight:bold">Max 1000 Character Allow </p>
                                                    <textarea class="form-control" rows="3" placeholder="Enter Description" name="adesc" maxlength="1000"><?php echo $mykey2 ?></textarea>
                                                    
                                                </div>

                                                
                                            </div>
                                        

                                            <div class="col-md-6">
                                                
                                                    <div class="form-group">
                                                        <label for="bedrooms">Select No. of Bedrooms</label>
                                                            <input class="form-control" placeholder="Update Bedrooms" name="bedrooms" value="<?php echo $mykey4 ?>" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="bathrooms">Select No. of Bathrooms</label>
                                                            <input class="form-control" placeholder="Update Bathrooms" name="bathrooms" value="<?php echo $mykey5 ?>" required>
                                                            
                                                        </select>
                                                    </div>

                                                    

                                                    <div class="form-group">
                                                        <label>Property Type</label>
                                                        <input class="form-control" placeholder="Enter Property Type" name="property_type" value="<?php echo $mykey7 ?>" required>
                                                            <p class="help-block"></p>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">Select No. of Storeys</label>
                                                        <input class="form-control" placeholder="Update Storeys" name="storeys" value="<?php echo $mykey8 ?>" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Property ID</label>
                                                        <input class="form-control" placeholder="Enter Property ID" name="property_id" value="<?php echo $mykey9 ?>" required>
                                                            <p class="help-block"></p>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Property Status</label>
                                                        <input class="form-control" placeholder="Enter Property Status" name="property_status" value="<?php echo $mykey10 ?>" required>
                                                            <p class="help-block"></p>
                                                    </div>
                                                    
                                                    <!--<div class="form-group">
                                                        <input class="form-control" placeholder="Price" name="price" value="" required>
                                                            <p class="help-block"></p>
                                                    </div>-->

                                                    <div class="form-group">
                                                        <label>Property Tags</label>
                                                        <input class="form-control" placeholder="Enter Property Tags" name="property_tags" value="<?php echo $mykey12 ?>" required>
                                                            <p class="help-block"></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Property Address</label>
                                                        <input class="form-control" placeholder="Enter Property Address" name="address" value="<?php echo $mykey13 ?>"required>
                                                            <p class="help-block"></p>
                                                    </div>
                                                    <!--<div class="form-group">
                                                        <input class="form-control" placeholder="Enter Plot Size" name="plot_size" value="" required>
                                                            <p class="help-block"></p>
                                                    </div>-->

                                            </div>
                                       
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="submit">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
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