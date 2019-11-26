<?php include ('includes/admin_navigation.php'); ?>




<?php $agid=$_REQUEST['id']; ?>

<?php

        $rs_result = "SELECT * FROM tbl_album WHERE albumid='$agid'";
        $select_gallery = mysqli_query($connection, $rs_result);

        while ($row = mysqli_fetch_assoc($select_gallery)) {
?>
<?php $aname=$row["name"]; ?>
<?php };?>



<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add House Compartments</h1>
                </div>
                
                <!-- /.col-lg-12 -->
            </div>
           

<?php
        $gid=$agid;
        $gname=$aname;
        $gdate = date('Y-m-d H:i:s');
        $status='process';

        $rd=rand();
        if(isset($_FILES['upload1'])){
            $errors= array();
            foreach($_FILES['upload1']['tmp_name'] as $key => $tmp_name){
                $file_name = $key.$rd.$_FILES['upload1']['name'][$key];
                $file_size =$_FILES['upload1']['size'][$key];
                $file_tmp =$_FILES['upload1']['tmp_name'][$key];
                $file_type=$_FILES['upload1']['type'][$key];	
                
                if($file_size > 2097152){
                    $errors[]='File size must be less than 2 MB';
                }	
                
                $desired_dir="gupload";
                if(empty($errors)==true){
                    if(is_dir($desired_dir)==false){
                        mkdir("$desired_dir", 'gupload');		
                    }
                    if(is_dir("$desired_dir/".$file_name)==false){
                    
        $src = imagecreatefromjpeg($tmp_name);
        list($width,$height)=getimagesize($tmp_name);
        $newwidth=($width/$height)*150;
        $newheight=150;
        $tmp=imagecreatetruecolor($newwidth,$newheight);
        imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
        $rd=rand();
        $filename = "gcatch/".$file_name;
        imagejpeg($tmp,$filename,100);
        imagedestroy($src);
        move_uploaded_file($file_tmp,"$desired_dir/".$file_name);
                    }else{									// rename the file if another one exist
                        $new_dir="$desired_dir/".$file_name.time();
                        rename($file_tmp,$new_dir) ;				
                    }
                    $query="INSERT into tbl_gallery(`gid`,`aid`,`gname`,`gimages`,`date`,`status`) VALUES('','$gid','$gname','$file_name','$gdate','$status')";
                    $create_gallery_query = mysqli_query($connection, $query);
                }
                else
                {
                
                print_r($errors);
                
                }
            }
            if(empty($errors)){
            echo " <div class='alert alert-success'>Your Photos Is Successfully Uploded. </div>";
            
            }
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
                                    <form action="#" method="post" enctype="multipart/form-data" name="upload">
                                       
                                        
                                        <div class="form-group">
                                            <label>Select Inner House Images</label>
                                            <input type="file" name="upload1[]" multiple  id="upload" />
                
                                            <p class="help-block">Example "Recomended Image Size in pixel 400 X 300"</p>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary" name="submit">Submit Button</button>
                                        
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