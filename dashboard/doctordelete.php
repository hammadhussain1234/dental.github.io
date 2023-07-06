<?php
include "config/connection.php";
if(isset($_GET['id'])){
    $get = $_GET['id'];
    $delete = "DELETE FROM careuser WHERE user_id=$get";
    $run = mysqli_query($conn,$delete);
    var_dump($run);
    if($run){
        header("Location:doctordetail.php?Delete");
    }
}
?>