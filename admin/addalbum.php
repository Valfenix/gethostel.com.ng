<?php include ('includes/admin_navigation.php'); ?>



        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Album</h1>
                </div>
                

                <script type="application/javascript">

                    function img_up(){var fup = document.getElementById('upload');
                    var fileName = fup.value;var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
                    if(ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG"){return true;
                    }else{alert("only jpeg format supported!");fup.focus();return false;}}


                </script>





                <?php
                    if(isset($_POST['submit'])){
                        $aname = $_POST['aname'];
                        $adesc = $_POST['adesc'];
                        $al_category_id = $_POST['al_category'];
                        $adate = date('Y-m-d H:i:s');
                        $status='process';
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
                        


                        $rd=rand();

                        $uploadedfile = $_FILES['upload']['tmp_name'];

                        $src = imagecreatefromjpeg($uploadedfile);

                        list($width,$height)=getimagesize($uploadedfile);


                        $newwidth=290;
                        $newheight=($height/$width)*300;
                        $tmp=imagecreatetruecolor($newwidth,$newheight);

                        imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);

                        $filename = "acatch/".$rd. $_FILES['upload']['name'];
                        imagejpeg($tmp,$filename,100);

                        imagedestroy($src);
                        imagedestroy($tmp); 
                        $photo=$rd.$_FILES['upload']['name'];
                        move_uploaded_file($_FILES["upload"]["tmp_name"],"aupload/".$rd.$_FILES["upload"]["name"]);

                    if (empty($aname)){
                    echo " <div class='alert alert-danger'><strong>ERROR</strong> - Empty fields are not allowed !</div>"; 
                        }
                        else{

                        
                        


                    $query="INSERT INTO tbl_album(name,adesc,image,al_category_id,date,status,bedrooms,bathrooms,property_size,property_type,storeys,property_id,property_status,price,property_tags,address,plot_size) VALUES ('$aname','$adesc','$photo',$al_category_id,'$adate','$status','$bedrooms','$bathrooms','$property_size','$property_type','$storeys','$property_id','$property_status','$price','$property_tags','$address','$plot_size')";
                    $create_album_query = mysqli_query($connection, $query);
                    if($create_album_query) {
                    
                    echo " <div class='alert alert-success'>Your New Album Is Successfully Added. <a href='viewallalbums.php'>View albums</a> |<a href='addevent.php'> Add new album</a></div>";
                        }
                        else {
                            echo "error";
                            print mysql_error();
                        }

                    // echo "<script>location.href='addevent.php </script";
                        }
                    }	
                    ?>

                    <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Fill This Form To Add House (Only upload jpg files only)
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="#" method="post" enctype="multipart/form-data" name="upload">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>House Name</label>
                                                    <input class="form-control" placeholder="Enter Title" name="aname" required>
                                                        <p class="help-block">Example "House at Pako"</p>
                                                
                                                </div>
                                                <div class="form-group">
                                                
                                                    <label>House Description</label>
                                                    <p class="help-block" style="font-weight:bold">Max 1000 Character Allow </p>
                                                    <textarea class="form-control" rows="3" placeholder="Enter Description" name="adesc" maxlength="1000" required></textarea>
                                                
                                                </div>
                                            
                                                <div class="form-group">
                                                    <label>House Image</label>
                                                    <input type="file" name="upload"  id="upload" required/>
                        
                                                    <p class="help-block">Example "Recomended Image Size in pixel 400 X 300"</p>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                            
                                                <div class="form-group">
                                                    <label for="bedrooms">Select No. of Bedrooms</label>
                                                    <select class="form-control" name="bedrooms" id="sel1" required>
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                        <option>8</option>
                                                        <option>9</option>
                                                        <option>10</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="bathrooms">Select No. of Bathrooms</label>
                                                    <select class="form-control" name="bathrooms" id="sel1" required>
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <input class="form-control" placeholder="Enter Property Size" name="property_size" required>
                                                        <p class="help-block"></p>
                                                </div>

                                                <div class="form-group">
                                                    <input class="form-control" placeholder="Enter Property Type" name="property_type" required>
                                                        <p class="help-block"></p>
                                                </div>

                                                <div class="form-group">
                                                    <label for="">Select No. of Storeys</label>
                                                    <select class="form-control" name="storeys" id="sel1" required>
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                        
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="category">Category</label>
                                                    <select name="al_category" id="" required>

                                                        <?php 
                                                            $query = "SELECT * FROM al_category";
                                                            $select_categories = mysqli_query($connection, $query);

                                                            confirmQuery($select_categories);

                                                            while($row = mysqli_fetch_assoc($select_categories )) {
                                                            $cat_id = $row['cat_id'];
                                                            $cat_title = $row['cat_title'];
                                                            

                                                                echo "<option value='$cat_id'>{$cat_title}</option>";

                                                            }
                                                        
                                                        ?>
                                                    </select>
                                                </div>


                                                <div class="form-group">
                                                    <input class="form-control" placeholder="Enter Property ID" name="property_id" required>
                                                        <p class="help-block"></p>
                                                </div>

                                                <div class="form-group">
                                                    <input class="form-control" placeholder="Enter Property Status" name="property_status" required>
                                                        <p class="help-block"></p>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="Price" name="price" required>
                                                        <p class="help-block"></p>
                                                </div>

                                                <div class="form-group">
                                                    <input class="form-control" placeholder="Enter Property Tags" name="property_tags" required>
                                                        <p class="help-block"></p>
                                                </div>
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="Enter Property Address" name="address" required>
                                                        <p class="help-block"></p>
                                                </div>
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="Enter Plot Size" name="plot_size" required>
                                                        <p class="help-block"></p>
                                                </div>

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





                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->

<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
    
    
    
    
    
   