<?php
    function confirmQuery($result) {

        global $connection;
        if(!$result ) {

                die("QUERY FAILED ." . mysqli_error($connection));
            }

            
    }

function redirect($location){

    return header("Location:" . $location);

}

function is_admin($username = '') {

    global $connection;
    
    $query = "SELECT user_role FROM users WHERE username = '$username'";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);

    $row = mysqli_fetch_array($result);

    if($row['user_role'] == 'admin') {

        return true;

    } else {

        return false;
    }
}


function is_subscriber($username = '') {

    global $connection;

    $query = "SELECT user_role FROM users WHERE username = '$username'";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);

    $row = mysqli_fetch_array($result);

    if($row['user_role'] == 'subscriber') {
        return true;
    } else {
        return false;
    }
}


function insert_categories() {

    global $connection;

        if(isset($_POST['submit'])) {
            
            $cat_title = $_POST['cat_title'];

            if($cat_title == "" || empty($cat_title)) {

                echo "This field should not be empty";

            } else {
                
                $query = "INSERT INTO post_categories(cat_title) ";
                $query .= "VALUE('{$cat_title}') ";

                $create_category_query = mysqli_query($connection, $query);

                if(!$create_category_query) {

                    die('QUERY FAILED' . mysqli_error($connection));
                }
            }
        }
}

function insert_alcategories() {

    global $connection;

        if(isset($_POST['submit'])) {
            
            $cat_title = $_POST['cat_title'];

            if($cat_title == "" || empty($cat_title)) {

                echo "This field should not be empty";

            } else {
                
                $query = "INSERT INTO al_category(cat_title) ";
                $query .= "VALUE('{$cat_title}') ";

                $create_category_query = mysqli_query($connection, $query);

                if(!$create_category_query) {

                    die('QUERY FAILED' . mysqli_error($connection));
                }
            }
        }
}


function findAllCategories() {
global $connection;

    $query = "SELECT * FROM post_categories";
    $select_categories = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_categories)) {
    $cat_id = $row['cat_id'];
    $cat_title = $row['cat_title'];

    echo "<tr>";
    echo "<td>{$cat_id}</td>";
    echo "<td>{$cat_title}</td>";
    echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete'); \" href='categories.php?delete={$cat_id}'>Delete</a></td>";
    echo "<td><a href='categories.php?edit={$cat_id}'>Edit</a></td>";
    echo "</tr>";

    }
}


function findAllalCategories() {
global $connection;

    $query = "SELECT * FROM al_category";
    $select_categories = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_categories)) {
    $cat_id = $row['cat_id'];
    $cat_title = $row['cat_title'];

    echo "<tr>";
    echo "<td>{$cat_id}</td>";
    echo "<td>{$cat_title}</td>";
    echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete'); \" href='al_category.php?delete={$cat_id}'>Delete</a></td>";
    echo "<td><a href='al_category.php?edit={$cat_id}'>Edit</a></td>";
    echo "</tr>";

    }
}


function deleteCategories() {

global $connection;

    if(isset($_GET['delete'])) {

    $the_cat_id = $_GET['delete'];

    $query = "DELETE FROM post_categories WHERE cat_id = {$the_cat_id} ";

    $delete_query = mysqli_query($connection, $query);

    header("Location: categories.php");
    }
}

function deletealCategories() {

global $connection;

    if(isset($_GET['delete'])) {

    $the_cat_id = $_GET['delete'];

    $query = "DELETE FROM al_category WHERE cat_id = {$the_cat_id} ";

    $delete_query = mysqli_query($connection, $query);

    header("Location: al_category.php");
    }
}




function insert_house() {

    global $connection;

        if(isset($_POST['submit'])) {
            
            $type_title = $_POST['type_title'];
            $type_image = $_POST['type_image'];

            if($type_title == "" || empty($type_title)) {

                echo "This field should not be empty";

            } else {
                
                $query = "INSERT INTO house_type(type_title,type_image) ";
                $query .= "VALUE('{$type_title}','{$type_image}') ";

                $create_house_query = mysqli_query($connection, $query);

                if(!$create_house_query) {

                    die('QUERY FAILED' . mysqli_error($connection));
                }
            }
        }
}






function findAllHouse() {
global $connection;

    $query = "SELECT * FROM house_type";
    $select_houses = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_houses)) {
    $type_id = $row['type_id'];
    $type_title = $row['type_title'];
    $type_image = $row['type_image'];

    echo "<tr>";
    echo "<td>{$type_id}</td>";
    echo "<td>{$type_title}</td>";
    ?>

    <td><img class="img-thumbnail" src="../images/houses/<?php echo $type_image; ?>" alt='' /></td>

    <?php
    echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete'); \" href='house.php?delete={$type_id}'>Delete</a></td>";
    echo "<td><a href='house.php?edit={$type_id}'>Edit</a></td>";
    echo "</tr>";

    }
}




function deleteHouse() {

global $connection;

    if(isset($_GET['delete'])) {

    $the_type_id = $_GET['delete'];

    $query = "DELETE FROM house_type WHERE type_id = {$the_type_id} ";

    $delete_query = mysqli_query($connection, $query);

    header("Location: house.php");
    }
}



function email_exists($email){

    global $connection;


    $query = "SELECT email FROM users WHERE email = '$email'";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);

    if(mysqli_num_rows($result) > 0) {

        return true;

    } else {

        return false; 
    }

}







function register_user($name, $email, $password) {


    global $connection;


        

        $name = mysqli_real_escape_string($connection, $name);
        $email    = mysqli_real_escape_string($connection, $email);
        $password = mysqli_real_escape_string($connection,  $password);
        $password = password_hash( $password, PASSWORD_BCRYPT, array('cost' => 12) );
        
        
        

        $query = "INSERT INTO users(name, email, password,user_role)";
        $query .= "VALUES('{$name}','{$email}','{$password}','subscriber')";
        $register_user_query = mysqli_query($connection, $query);

       

        // $message = "Your Registration has been submitted";

        
            confirmQuery($register_user_query);
        

}








function users_online() {

    if(isset($_GET['onlineusers'])) {

    global $connection;

    if(!$connection) {

        session_start();

        include("../includes/db.php");


        $session = session_id();
        $time = time();
        $time_out_in_seconds = 30;
        $time_out = $time - $time_out_in_seconds;

        $query = "SELECT * FROM users_online WHERE session = '$session'";
        $send_query = mysqli_query($connection, $query);
        $count = mysqli_num_rows($send_query);

        if($count == NULL) {

            mysqli_query($connection, "INSERT INTO users_online(session, time) VALUES('$session','$time')");

        } else {

            mysqli_query($connection, "UPDATE users_online SET time = '$time' WHERE session = '$session'");

        }

            $users_online_query = mysqli_query($connection, "SELECT * FROM users_online WHERE time > '$time_out'");
            echo $count_user = mysqli_num_rows($users_online_query);

    }

    } // get request isset()

}

users_online();

function login_user($email, $password){
    
    global $connection;

// Immediate code below to to check and clean any mysql injection 
//from our username and password <hehehE VALFENIX FOR LIFE>

$email = trim($email);
$password = trim($password);

$email = mysqli_real_escape_string($connection, $email );
$password = mysqli_real_escape_string($connection, $password );

$query = "SELECT * FROM users WHERE email = '{$email}' ";
$select_user_query = mysqli_query($connection, $query);

if(!$select_user_query) {

    die("QUERY FAILED". mysqli_error($connection));

}

    while($row = mysqli_fetch_array($select_user_query)){


        $db_user = $row['user'];
        $db_email = $row['email'];
        $db_password = $row['password'];
        $db_user_role = $row['user_role'];
    }



if (password_verify($password,$db_password) ){

    $_SESSION['email'] = $db_email;
    $_SESSION['user_role'] = $db_user_role;

    if($_SESSION['user_role'] == 'admin'){

    redirect("../admin");

    } else{

        redirect("../blog.php");

    } 

}

// else{

//         redirect("/valfenix0/blog/registration.php");
//     }

}


