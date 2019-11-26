<?php

$mykey1=$_REQUEST['key1'];
$status='delete';

include '../includes/db.php';

$query= "UPDATE tbl_album SET status='$status' WHERE albumid = '$mykey1'";
$update_query = mysqli_query($connection, $query);
echo "<script>location.href='viewallalbums.php'</script>"

?> 