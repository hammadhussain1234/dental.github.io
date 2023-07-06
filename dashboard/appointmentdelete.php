<?php
include "config/connection.php";
if(isset($_GET['id'])){
    $get = $_GET['id'];
    $delete = "DELETE FROM appointment WHERE app_id=$get";
    $run = mysqli_query($conn,$delete);
    var_dump($run);
    if($run){
        header("Location:appointmentdetail.php?Delete");
    }
}
?>