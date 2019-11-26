<form action="" method="post">
    <div class="form-group">
        <label for="type-title">Edit House</label>

        <?php 

            if(isset($_GET['edit'])) {
            
            $type_id = $_GET['edit'];

            $query = "SELECT * FROM house_type WHERE type_id = $type_id ";
            $select_house_id = mysqli_query($connection, $query);

            while($row = mysqli_fetch_assoc($select_house_id)) {
            $type_id = $row['type_id'];
            $type_title = $row['type_title'];


                ?>

                <input value="<?php if(isset($type_title)){echo $type_title;} ?>" type="text" class="form-control" name="type_title">

            <?php }} ?>

            <?php 
            
            //Update Query

            if(isset($_POST['update_house'])) {

            $the_type_title = $_POST['type_title'];

            $query = "UPDATE house_type SET type_title = '{$the_type_title}' WHERE type_id = {$type_id} ";

            $update_query = mysqli_query($connection, $query);

                if(!$update_query ){

                    die("QUERY FAILED" . mysqli_error($connection));
                }

            }
            
        ?>
        
        


        
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="update_house" value="Update House">
    </div>
</form>