<?php
include("includes/admin_navigation.php");

// if(isset($_POST['checkBoxArray'])) {

//     foreach($_POST['checkBoxArray'] as $commentValueId ){

//         $bulk_options = $_POST['bulk_options'];

//         switch($bulk_options) {
//             case 'approved';

//             $query = "UPDATE comments SET comment_status = '{$bulk_options}' WHERE comment_id = {$commentValueId} ";

//             $update_to_approved_status = mysqli_query($connection, $query);

//             confirmQuery( $update_to_approved_status);


//             break;


//                 case 'unapproved';

//             $query = "UPDATE comments SET comment_status = '{$bulk_options}' WHERE comment_id = {$commentValueId} ";

//             $update_to_unapproved_status = mysqli_query($connection,$query);

//             confirmQuery($update_to_unapproved_status);


//                 break;


//                 case 'delete';

//                 $query = "DELETE FROM comments WHERE comment_id = {$commentValueId} ";

//                 $update_to_delete = mysqli_query($connection,$query);

//                 confirmQuery($update_to_delete);


//                     break;



//         }
//     }
// }






?>
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        
                        <h2 class="page-header">
                            
                            <span class="text-primary"></span>

                        </h2>

<form action="" method='post'>
      
      
      <table class="table table-bordered table-hover">

            <!--<div id="bulkOptionsContainer" class="col-xs-4">
                
                <select  class="form-control" name="bulk_options" id="">

                    <option value="">Select Options</option>
                    <option value="approved">Approve</option>
                    <option value="unapproved">Unapprove</option>
                    <option value="delete">Delete</option>
                    
                </select>
                
                
            </div> -->

            
            <thead>
                <tr>
                    <th>Email Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Position</th>
                    <th>Email Date</th>
                    <th>Delete</th>
                </tr>
            </thead>

            <tbody>

                <?php

                    $query = "SELECT * FROM subscribers ORDER BY email_id DESC";
                    $select_email = mysqli_query($connection,$query);

                    while($row = mysqli_fetch_assoc($select_email)) {

                        $email_id = $row['email_id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $phone = $row['phone'];
                        $position = $row['position'];
                        $email_date = $row['email_date'];
                        


                        echo "<tr>";

                        ?>

                        
                       
                       
                       
                        <?php
                
                echo "<td>$email_id</td>";
                echo "<td>$name </td>";
                echo "<td>$email </td>";
                echo "<td>$phone </td>";
                echo "<td>$position </td>";
                echo "<td>$email_date</td>";


                       echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete'); \" href='view_subscribers.php?delete={$email_id}'>Delete</a></td>";
                       echo "</tr>";
                       
                    }
                
                ?>
            
            
            </tbody>
    </table>
</form>


</div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
    <!-- /#wrapper -->


    </body>
 <?php 




                        



                        if(isset($_GET['delete'])) {
                            $the_email_id = $_GET['delete'];

                            $query = "DELETE FROM subscribers WHERE email_id = {$the_email_id} ";
                            $delete_query = mysqli_query($connection, $query);
                            header("Location: view_subscribers.php");
                            
                        }
                        
                        
                        ?>


<script>

    $(document).ready(function(){

    $(".delete_link").on('click', function(){

    var id = $(this).attr("rel");

    var delete_url = "comments.php?delete="+ id +" "; 

    $(".modal_delete_link").attr("href", delete_url);

    $("#myModal").modal('show');

       });


    });


</script>