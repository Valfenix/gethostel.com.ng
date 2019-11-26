<?php include 'includes/admin_navigation.php'; ?>

<!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="page-header">Add Users</h1>
                </div>

                <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Fill the spaces below
                        </div>
                

<?php 

    if(isset($_POST['create_user'])) {

        $username = $_POST['username'];
        
        $password = $_POST['password'];
        
     

        // move_uploaded_file($post_image_temp, "../images/$post_image" );

        $password = password_hash($password, PASSWORD_BCRYPT, array('cost' => 10));

        $query = "INSERT INTO users(username,user_role,password)";

        $query .=
        "VALUES('{$username}','admin','{$password}')";
        
        $create_user_query = mysqli_query($connection, $query);
        
       if(!$create_user_query) {

            die("QUERY FAILED". mysqli_error($connection));

        }


       echo "User Created: ". " " . "<a href='view_users.php'>View Users</a>";
    }

?>
<div class="container row">
<div class="col-md-6">
<form action="" method="post" enctype="multipart/form-data">

    

    <div class="form-group">
        <label for="username">Username</label>
            <input type="text" class="form-control" placeholder="Enter username" name="username">
    </div>

    

    <div class="form-group">
        <label for="password">Password</label>
            <input type="password" class="form-control" placeholder="Enter password" name="password">
    </div>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_user" value="Add User">
    </div>

</form>

</div>

    </div>
    </div>
</div>
</div>
</div>
</div>
<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>