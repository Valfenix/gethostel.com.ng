<!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <form action="search.php" method="post">
              <div class="card-body">
                <div class="input-group">
                  <input type="text" name="search" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button name="submit" class="btn btn-default" type="submit">
                                    <span class="glyphicon glyphicon-search">GO!</span>
                            </button>
                  </span>
                </div>
              </div>
            </form>
          </div>

          
          
          
          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">


            <?php
              $query = "SELECT * FROM post_categories";
                $select_categories_sidebar = mysqli_query($connection, $query);
                ?>

              <div class="row">
                <div class="col-lg-12">
                  <ul class="list-unstyled mb-0">

                  <?php 
                    while($row = mysqli_fetch_assoc($select_categories_sidebar)) {
                      $cat_title = $row['cat_title'];
                      $cat_id = $row['cat_id'];

                    echo "<li><a href='category.php?category=$cat_id'>{$cat_title}</a></li>";
                    }
                    ?>
                    
                  </ul>

                </div>

                <!--<div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">JavaScript</a>
                    </li>
                    <li>
                      <a href="#">CSS</a>
                    </li>
                    <li>
                      <a href="#">Tutorials</a>
                    </li>
                  </ul>
                </div>-->
              </div>
            </div>
          </div>


                



          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Login</h5>
            <div class="card-body">
              <?php if(isset($_SESSION['user_role'])): ?>

                    <h4>Logged in as <?php echo $_SESSION['email'] ?></h4>

                    <a href="includes/logout.php" class="btn btn-danger">Logout</a>

                <?php else: ?>

                <!--<h5><b>Login.  Not A Member? <a href="registration.php">Join Us</a></b></h5>-->
                    <form action="includes/login.php" method="post">
                        <div class="form-group">
                            <input name="email" type="email" class="fly form-control" placeholder="Enter Email">
                           
                        </div><div class="input-group">
                            <input name="password" type="password" class="fly form-control" placeholder="Enter Password">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" name="login" type"submit">
                                    Submit
                                </button>
                            
                            
                            </span>
                        </div>

                    </form> <!--Search Form-->
                    
                    <!-- /.input-group -->

                <?php endif;  ?>


            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
