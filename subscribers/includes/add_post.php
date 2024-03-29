<?php 

    if(isset($_POST['create_post'])) {

        $post_title = $_POST['title'];
        $post_user = $_POST['post_user'];
        $post_category_id = $_POST['post_category'];
        $post_status = $_POST['post_status'];

        $post_image = $_FILES['image']['name'];
        $post_image_temp = $_FILES['image']['tmp_name'];

        $post_tags = $_POST['post_tags'];
        $post_content = urlencode(addslashes( str_replace( "\n" , "<br>" ,  ($_POST['post_content']))));
        $post_date = date('d-m-y');
     

        move_uploaded_file($post_image_temp, "../images/blog/$post_image" );

        $query = "INSERT INTO posts(post_category_id, post_title, post_user,
        post_date,post_image,post_content,post_tags,post_status)";

        $query .=
        "VALUES({$post_category_id},'{$post_title}','{$post_user}',now(),'{$post_image}','{$post_content}','{$post_tags}','{$post_status}')";
        
        $create_post_query = mysqli_query($connection, $query);
        
       confirmQuery($create_post_query);

       $the_post_id = mysqli_insert_id($connection);

       echo "<p class='bg-success'>Post Created. <a href='../post.php?p_id={$the_post_id}'> View Post</a> or <a href='posts.php'>  Edit More Posts</a></p>";

    }


?>



<form action="" method="post" enctype="multipart/form-data">


    <div class="form-group">
        <label for="title">Post Title</label>
            <input type="text" class="form-control" name="title" required>
    </div>



     <div class="form-group">
        <label for="category">Category</label>
        <select name="post_category" id="" required>

            <?php 
                $query = "SELECT * FROM post_categories";
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
        <label for="users">Users</label>
        <select name="post_user" id="" >

            <?php 



            if(isset($_SESSION['username'])){

                $username = $_SESSION['username'];

                $query = "SELECT * FROM users WHERE username = '{$username}' ";
                $select_user_query = mysqli_query($connection, $query);

                
                confirmQuery($select_user_query);

                while($row = mysqli_fetch_assoc($select_user_query)) {
                
                $username = $row['username'];
                

                    echo "<option value='{$username}'>{$username}</option>";

                }
            }
            ?>
        </select>
    </div>



    <!--<div class="form-group">
        <label for="title">Post Author</label>
            <input type="text" class="form-control" name="author">
    </div>-->

    <div class="form-group">
        <label for="post_status">Post Status</label>
            <!--<input type="text" class="form-control" name="post_status" placeholder="Enter Published or Draft" required>-->

            <select name="post_status" id="" required>

                <option value="published">published</option>
                <option value="draft">draft</option>
            
            </select>
    </div>

    <div class="form-group">
        <label for="post_image">Post Image</label>
            <input type="file"  name="image" required>
    </div>

    <div class="form-group">
        <label for="post_tags">Post Tags</label>
            <input type="text" class="form-control" name="post_tags" required>
    </div>

    <div class="form-group">
        <label for="post_content">Post Content</label>
            <textarea class="form-control" name="post_content" id="" cols="30" rows="10" required> 
            </textarea>
    </div>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_post" value="Publish Post">
    </div>

</form>

<script>
			CKEDITOR.replace( 'post_content' );
		</script>