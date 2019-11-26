<!--Navigation-->

        
    <?php include ('includes/navigation.php');?>
    <!---->

    

    <!-- Page Content -->
    <div class="container">
      <br><br>
      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8 blog-main">

          <?php


                  if(isset($_GET['p_id'])) {

                    $the_post_id = $_GET['p_id'];

                    $view_query = "UPDATE posts SET post_views_count = post_views_count + 1 WHERE post_id = $the_post_id ";
                    
                    $send_query = mysqli_query($connection, $view_query);

                    if(!$send_query) {

                      die("query failed" );
                    }


                    $query = "SELECT * FROM posts WHERE post_id = $the_post_id ";

                    $select_all_posts_query = mysqli_query($connection, $query);
  
                    if(mysqli_num_rows($select_all_posts_query) < 1) {

                        echo "<h1 class='text-center'>No posts available</h1>";

                      } else {

                        while($row = mysqli_fetch_assoc($select_all_posts_query)) {
                          $post_id = $row['post_id'];
                           $post_title = $row['post_title'];
                           $post_user = $row['post_user'];
                           $post_date = $row['post_date'];
                           $post_image = $row['post_image'];
                           $post_views_count = $row['post_views_count'];
                           $post_content = urldecode($row['post_content']);

                           

                            ?>

                            <!-- Blog Post -->
                            <div class="card mb-4">
                                <img class="card-img-top" src="images/blog/<?php echo $post_image; ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h2 class="card-title"><?php echo $post_title ?></h2>
                                    <p class="card-text"><?php echo $post_content ?></p>
                                </div>
                                <div class="card-footer text-muted">
                                    <p><?php echo $post_date ?> By <span class="text-primary"><?php echo $post_user ?></span></p>
                                </div>

                                <hr>
                            
                                  <p class="text-primary views_d">Views: <?php echo $post_views_count; ?> </p> 

                                <hr>


                                <?php }?>
                            </div>

                            <!-- Blog Comments -->

                            <?php 

                              if(isset($_POST['create_comment'])) {

                                  $the_post_id = $_GET['p_id'];
                                  $comment_author = urlencode($_POST['comment_author']);
                                  $comment_email = urlencode($_POST['comment_email']);
                                  $comment_content = urlencode(addslashes( str_replace( "\n" , "<br>" ,  ($_POST['comment_content']))));

                                if(!empty($comment_author) && !empty($comment_email) && !empty($comment_content)) {
                                  
                                  $query = "INSERT INTO comments (comment_post_id, comment_author, comment_email, comment_content, comment_status, comment_date)";
                                  
                                  $query .= "VALUES ($the_post_id, '{$comment_author}', '{$comment_email}', '{$comment_content }', 'approved',now())";

                                  $create_comment_query = mysqli_query($connection,$query);
                                  if(!$create_comment_query ){

                                    die('QUERY FAILED' . mysqli_error($connection));
                                  }

                                  } else {

                                    echo "<script>alert('Fields cannot be empty')</script>";
                                  }


                                  }
                              ?>

                              <!-- Comments Form -->
            
                              <form class="fly" action="" method="post" role="form">
                                <h3>Comment on this post</h3>
                                <div class="form-group flyi">
                                  <label for="exampleFormControlInput1"></label>
                                  <input name="comment_author" type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="Enter your name">
                                </div>

                                <div class="form-group flyi">
                                  <label for="exampleFormControlInput1"></label>
                                  <input name="comment_email" type="email" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="enter your email">
                                </div>
                              
                                <div class="form-group flyi">
                                  <label for="exampleFormControlTextarea1"></label>
                                  <textarea name="comment_content" class="form-control form-control-sm" placeholder="enter your comment" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <button type="submit" name="create_comment" class="btn btn-primary">Submit</button>
                              </form>


                              <?php 
                                  
                                $query = "SELECT * FROM comments WHERE comment_post_id = {$the_post_id} ";
                                $query .= "AND comment_status = 'approved' ";
                                $query .= "ORDER BY comment_id DESC ";
                                $select_comment_query = mysqli_query($connection, $query);
                                if(!$select_comment_query) {

                                  die('Query Failed' . mysqli_error($connection));
                                }
                                while ($row = mysqli_fetch_array($select_comment_query)) {
                                  $comment_date   = urldecode($row['comment_date']);
                                  $comment_content= urldecode($row['comment_content']);
                                  $comment_author = urldecode($row['comment_author']);
                            
                                
                              ?>


                              <!-- Comment -->

                                <div class="media">

                                    <a class="pull-left" href="#">
                                        <img class="media-object" src="images/main/user.jpg" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h6 class="media-heading text-primary"><b><?php echo $comment_author; ?> @</b>
                                            <small class="text-success"><?php echo $comment_date; ?></small>
                                        </h6>
                                        <?php echo $comment_content; ?>
                                        
                                    </div>

                                    

                                </div>

                                <a id="" href="reply.php?c_id=<?php echo $comment_id; ?>" class="reply-btn menu-toggle">Reply</a>



                            <?php } } } ?>

                    </div>

                    <?php include ('includes/sidebar.php'); ?>  
                    <?php include ('includes/footer.php'); ?>



                      