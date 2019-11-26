<?php ob_start(); ?> 
<?php session_start(); ?>
<?php
session_destroy();
header("Location: ../login.php");


?>