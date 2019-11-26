<!--Navigation-->

        
    <?php include ('includes/navigation.php');?>
    <?php include ('includes/db.php');?>

    

    <!-- Page Content -->
    <div class="container">
      <br><br>
      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8 blog-main">


            <?php

              if(isset($_POST['submit'])) {
                  $search = $_POST['search'];

                  $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%'";
                  $search_query = mysqli_query($connection, $query);

                  if(!$search_query) {

                      die("QUERY FAILED" .mysqli_error($connection));
                  }
                  $count = mysqli_num_rows($search_query);

                  if($count == 0) {
                    

                      echo "<h2><span class='text-warning'><b>AWWnn!!</b></span> SORRY, NO RESULTS WERE FOUND FOR <span class='text-danger'><b>$search</b></span> CHECK IF YOU TYPED IT CORRECTLY</h2>";
                  } else {

                        while($row = mysqli_fetch_assoc($search_query)) {
                            $post_id = $row['post_id'];
                           $post_title = $row['post_title'];
                           $post_user = $row['post_user'];
                           $post_date = $row['post_date'];
                           $post_image = $row['post_image'];
                           $post_content = $row['post_content'];
                           ?>

                           <br>
                           <h2 class="page-header">
                                Search results for <span class="text-primary"><b><?php echo $search; ?></b></span>
                                
                            </h2>
                            

                            <!-- Blog Post -->
                            <div class="card mb-4">
                                <a href="post.php?p_id=<?php echo $post_id; ?>">
                                    <img class="card-img-top" src="images/blog/<?php echo $post_image; ?>" alt="Card image cap">
                                </a>
                                <div class="card-body">
                                <h2 class="card-title"><?php echo $post_title ?></h2>
                                <p class="card-text"><?php echo $post_content ?></p>
                                <a href="post.php?p_id=<?php echo $post_id; ?>" class="btn btn-sm btn-primary">Read More &rarr;</a>
                                </div>
                                <div class="card-footer text-muted">
                                <p><?php echo $post_date ?> By <span class="text-primary"><?php echo $post_user ?></span></p>
                                </div>
                            </div>




          <?php } } }?>


          </div>

          <?php include ('includes/sidebar.php'); ?>



    <?php include ('includes/footer.php'); ?>