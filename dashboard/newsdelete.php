<?php
include "config/connection.php";
if(isset($_GET['id'])){
    $get = $_GET['id'];
    $delete = "DELETE FROM `news` WHERE `news_id`=$get ";
    $run = mysqli_query($conn,$delete);
    if($run){
        header("Location:newsdetail.php?Delete");
    }
}


?>