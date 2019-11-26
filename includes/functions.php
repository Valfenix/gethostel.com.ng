<?php

function login_user($username, $password){
    
    global $connection;

// Immediate code below to to check and clean any mysql injection 
//from our username and password <hehehE VALFENIX FOR LIFE>

$username = trim($username);
$password = trim($password);

$username = mysqli_real_escape_string($connection,$_POST['username']);
$password = mysqli_real_escape_string($connection,$_POST['password']);

$query = "SELECT * FROM users WHERE username = '{$username}' ";
$select_user_query = mysqli_query($connection, $query);

if(!$select_user_query) {

    die("QUERY FAILED". mysqli_error($connection));

}

if($row=mysqli_fetch_assoc($select_user_query))

{

    $HashPass = password_verify($password,$row['password']);

    if($HashPass==false)
    {
        header("location: blog.php");
        exit();
    }

    elseif($HashPass==true)
    {
        $_SESSION['username']=$row['username'];
        $_SESSION['password']=$row['password'];
        $_SESSION['user_role']=$row['user_role'];

             header("location: admin");
        exit();

    }

}

    

}




?>