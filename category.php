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
            if(isset($_GET['category'])) {

            $post_category_id = $_GET['category'];

           
              $query = "SELECT * FROM posts WHERE post_category_id = $post_category_id AND post_status = 'published' ";
              $select_all_posts_query = mysqli_query($connection, $query);


               if(mysqli_num_rows($select_all_posts_query) < 1) {

                            
                            echo "<h1 class='text-center'>No posts available for this Category</h1>";

                        } else {
                    
              while($row = mysqli_fetch_assoc($select_all_posts_query)) {
                $post_id = $row['post_id'];
                $post_title = $row['post_title'];
                $post_user = $row['post_user'];
                $post_date = $row['post_date'];
                $post_image = $row['post_image'];
                $post_content = substr($row['post_content'],0,70);
                $post_views_count = $row['post_views_count'];
                $post_comment_count = $row['post_comment_count'];

             ?>

          <!--<h1 class="my-4">Page Heading
            <small>Secondary Text</small>
          </h1>-->

          <!-- Blog Post -->
          <div class="change card mb-4">
            <a href="post.php?p_id=<?php echo $post_id; ?>">
            <img class="card-img-top img-ed" src="images/blog/<?php echo $post_image; ?>" alt="Card image cap">
            </a>
          </div>

          <div class="changeb card mb-4">
            <div class="change1">
              <h2 class="change-title card-title"><?php echo $post_title ?></h2>
              <p class="change3 card-text"><?php echo $post_content ?> <a class="read-btn" href="post.php?p_id=<?php echo $post_id; ?>"><b>Read More</b></a></p>
            </div>
            <div class="change2 card-footer text-muted">
              Posted on <?php echo $post_date ?> by
              <a href="#"><?php echo $post_user ?></a>
          </div>
          </div>
          <?php } } }?>
          

          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul>

        </div>

    <?php include ('includes/sidebar.php'); ?>



    <?php include ('includes/footer.php'); ?>