<?php

$mykey1=$_REQUEST['key1'];
$mykey2=$_REQUEST['key2'];
$status='delete';

include '../includes/db.php';
$query = "UPDATE tbl_gallery SET status='$status' WHERE gid = '$mykey1'";
$select_query = mysqli_query($connection, $query);
echo "<script>location.href='viewsgimages.php?ids=$mykey2'</script>"

?> 