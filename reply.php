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


                            if(isset($_GET['c_id'])) {

                            $the_comment_id = $_GET['c_id'];

                            $query = "SELECT * FROM comments WHERE comment_id = '{$the_comment_id}'";
                            
                            $select_all_comment_query = mysqli_query($mysqli, $query);
        
                            if(!$select_all_comment_query) {

                            die("query failed" );
                            }

                            while ($row = mysqli_fetch_array($select_all_comment_query)) {
                                $comment_id   = $row['comment_id'];
                                $comment_date   = urldecode($row['comment_date']);
                                $comment_content= urldecode($row['comment_content']);
                                $comment_author = urldecode($row['comment_author']);
                            
                            ?>

                                <div class="media">
                                    <div class="media-left">
                                        <?php
                                            $sql = "SELECT * FROM users WHERE username = '{$comment_author}'";
                                            $result = mysqli_query($mysqli, $sql);
                                            while ($row = mysqli_fetch_array($result)) {
                                            $image = $row['image'];
                                        ?>
                                    
                                        <img src="admin/images/profile/<?php echo $image; ?>" alt="">

                                        <?php }?>
                                    </div>
                                    <div class="media-body">
                                        <div class="media-heading">
                                            <h5><?php echo $comment_author; ?> <span class="reply-time"><?php echo $comment_date; ?></span></h5>
                                        </div>
                                        <p><?php echo $comment_content; ?></p>				
                                        <a  id="" class="reply-btn menu-toggle">Reply</a>

                                        <!--REPLY-->

                                    </div>

                                    <?php } ?>
                                </div>
                                


                                <?php 

                                    if(isset($_POST['create_reply'])) {
                                        
                                        

                                        $the_comment_id = $_GET['c_id'];
                                        $reply_user = $_POST['reply_user'];
                                        $reply_content = urlencode(addslashes( str_replace( "\n" , "<br>" ,  ($_POST['reply_content']))));
                                        $reply_date = date('d-m-y');
                                        
                                        $query = "INSERT INTO replies (reply_comment_id, reply_user, reply_content, reply_date)";
                                        
                                        $query .= "VALUES($comment_id, '{$reply_user}' ,'{$reply_content}' ,now())";

                                        $create_comment_query = mysqli_query($mysqli,$query);
                                        if(!$create_comment_query ){

                                            die('QUERY FAILED' . mysqli_error($mysqli));              
                                                
                                        }
                                        
                                        

                                        // $query = "SELECT * FROM comments WHERE comment_post_id = comment_post_id";
                                        // $select_all_comment_query = mysqli_query($mysqli, $query);

                                        // if(!$select_all_comment_query) {

                                        // die("query failed" );
                                        // }

                                        // while($row = mysqli_fetch_assoc($select_all_comment_query)) {
                                        // $post_id = $row['comment_post_id'];
                                        
                                        // $uti = "post.php?p_id=$post_id";

                                        // header("Location: $uti");

                                        
                                        // }
                                            echo "<script> window.history.go(-2);</script>";
                            

                                        }

                                    ?>

                                    
                                    <div class="media reply-media" id="side-nav1">
                                                        
                                        <form onsubmit="goback()" action="" method="POST">
                                            <div class="form-group cm-c fly">
                                                <select name="reply_user" hidden required>
                                                    <?php
                                                        if(isset($_SESSION['username'])){
                                                            $username = $_SESSION['username'];

                                                            $query = "SELECT * FROM users WHERE username = '{$username}'";
                                                            $users_select = mysqli_query($mysqli, $query);
                                                            while($row = mysqli_fetch_assoc($users_select)){
                                                                $username = $row['username'];
                                                                echo "<option value='{$username}'>{$username}</option>";
                                                            }
                                                        }
                                                    ?>
                                                </select>

                                                <textarea name="reply_content" class=" form-control" rows="3" required></textarea>
                                                <input  type="submit" class="btn btn-xs btn-primary btn-reply1" name="create_reply" value="reply">
                                            </div>
                                        </form>
                                    </div>

                                      
                                    
							<!-- /comment -->

                            <?php 
                            
                            } 
                            
                            ?>
						
                    </div>





    <?php include ('includes/sidebar.php'); ?> 
    <?php include ('includes/footer.php'); ?>