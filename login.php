<?php include ('includes/navigation.php'); ?>
<?php include ('includes/functions.php');?>


<?php
    if(isset($_POST['login'])) {

        // $username = trim($username);
        // $password = trim($password);

        $username = mysqli_real_escape_string($connection,$_POST['username']);
        $password = mysqli_real_escape_string($connection,$_POST['password']);

        $query = "SELECT * FROM users WHERE username = '{$username}' ";
        $select_user_query = mysqli_query($connection, $query);

        if(!$select_user_query) {

            die("QUERY FAILED". mysqli_error($connection));

        }



        while($row = mysqli_fetch_array($select_user_query)){


        $db_user_id = $row['user_id'];
        $db_username = $row['username'];
        $db_password = $row['password'];
        
        $db_user_role = $row['user_role'];
    }



if (password_verify($password,$db_password) ){

    $_SESSION['username'] = $db_username;
    
    $_SESSION['user_role'] = $db_user_role;

    if($_SESSION['user_role'] == 'admin'){

    header("Location: admin");

    } else{

        header("Location: subscribers");

    } 

}else{

        header("Location: login.php");
    }

}

    





        // if($row=mysqli_fetch_assoc($select_user_query))

        // {

        //     $HashPass = password_verify($password,$row['password']);

        //     if($HashPass==false)
        //     {
        //         header("location: blog.php");
        //         exit();
        //     }

        //     elseif($HashPass==true)
        //     {
        //         $_SESSION['username']=$row['username'];
        //         $_SESSION['password']=$row['password'];
        //         $_SESSION['user_role']=$row['user_role'];

        //             header("location: admin/index.php");
        //         exit();

        //     }

        // }

        //     } 

 ?>




<div class="container-fluid body-login">
    <div class="row login-form-a">
        <div class="container login-header">
            <h3>
                Welcome To <span class="text-danger">GETHostel</span> Admin Login
            </h3>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-6">
        
            <form action="" class="" method="post">
                <div class="form-group">
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Username" autocomplete="on" required>
                    
                </div>

                <div class="form-group">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="key" class="form-control" placeholder="Password" required>
                    
                </div>

                <input type="submit" name="login" id="btn-login" class="btn btn-custom btn-lg btn-block btn-primary text-center button-chills" value="LOG IN">
            </form>
            <br>

            <a href="includes/logout.php" class="btn btn-danger">Logout</a>
        
        </div>

        

        


        <div class="col-md-3"></div>
    </div>

    <br>
        <br>
        <br>




</div>



<div class="modal fade " id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="myModal88" aria-hidden="true">
                    <div class="modal-dialog modal-lg ">
                        <div class="modal-content gg">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    &times;</button>
                                
                            </div>
                            
                            <h3 class="mode-title text-danger">YOUR LOG IN DETAILS ARE INCORRECT, ENTRY DENIED</h3>
                            


                        </div>
                    </div>
                </div>
            </div>


<?php include ('includes/footer.php'); ?>