<?php
session_start();
unset($_SESSION['user_id']);
unset($_SESSION['email']);
unset($_SESSION['Password']);
header('location:login.php')


?>