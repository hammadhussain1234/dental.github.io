<?php
include "config/connection.php";
if(isset($_GET['id'])){
    $get = $_GET['id'];
    $delete = "DELETE FROM `disease` WHERE `dis_id`=$get";
    $run = mysqli_query($conn,$delete);
    if($run){
        header("Location:diseasedetail.php?Delete_Success");
    }
}

?>