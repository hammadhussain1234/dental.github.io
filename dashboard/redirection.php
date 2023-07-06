<?php 
if(!isset($_SESSION['user_id']) && !isset($_SESSION['user_email']) && !isset($_SESSION['Password']) && !isset($_SESSION['role_id'])){
    header("location:login.php");
}


?>