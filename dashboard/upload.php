<?php
include "config/connection.php";
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES['image']['name']);
$uploadok = 1;
$imageFiletype = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST['submit'])){
    $name = $_POST ['name'];
    $image = $_FILES['image']['name'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $city = $_POST['city'];
    $insert = "INSERT INTO `careuser`(`user_name`,`user_image`,`user_email`,`role_id`,`city_id`) VALUES 
    ('$name','$image','$email',$role,$city)"; 
    // var_dump($insert);
    // $select = "SELECT * FROM `careuser` INNER JOIN city WHERE  `city_id` = $city";  
    // $row = mysqli_query($conn,$select);
    // $dun = mysqli_fetch_assoc($row);
    $cheak = getimagesize($_FILES['image']['tmp_name']);
    if($cheak !== false){
        echo "File is an ". $cheak['mime']  . '.';
        $uploadok = 1;
    }else{
        // header("Location:doctordetail.php?File is Not Image");
        echo "File is Not Image";
        $uploadok = 0;
    }
    if(file_exists($target_file)){
        echo "Error File Exist";
        $uploadok = 0;
    }
    if($_FILES['image']['size']>5000000){
        echo "Error File Size";
        $uploadok = 0;
    }
    if($imageFiletype != "png" && $imageFiletype != "jpg" && $imageFiletype != "jpeg" ){
        echo "Error Image 'png' 'jpg' 'jpeg'";
        $uploadok = 0;
    }
    if($uploadok == 0){
        echo "File Not Upload";
    }else{
        $run = mysqli_query($conn,$insert);
        if($run){
            header('Location:user.php?Success');
        }
        if(move_uploaded_file($_FILES['image']['tmp_name'],$target_file)){
            echo "The File" . basename($_FILES['image']['name']) . "The has been is successfully";
        }else{
            echo "Error File Loading";
        }
    }

}
if(isset($_POST['register'])){
    $name = $_POST ['name'];
    $image = $_FILES['image']['name'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $city = $_POST['city'];
    $password = $_POST['password'];
    $insert1 = "INSERT INTO `careuser`(`user_name`,`user_image`,`user_email`,`role_id`,`city_id`,`password`) VALUES 
    ('$name','$image','$email',$role,$city,'$password')"; 
    // var_dump($insert);
    // $select = "SELECT * FROM `careuser` INNER JOIN city WHERE  `city_id` = $city";  
    // $row = mysqli_query($conn,$select);
    // $dun = mysqli_fetch_assoc($row);
    $cheak = getimagesize($_FILES['image']['tmp_name']);
    if($cheak !== false){
        echo "File is an ". $cheak['mime']  . '.';
        $uploadok = 1;
    }else{
        // header("Location:doctordetail.php?File is Not Image");
        echo "File is Not Image";
        $uploadok = 0;
    }
    if(file_exists($target_file)){
        echo "Error File Exist";
        $uploadok = 0;
    }
    if($_FILES['image']['size']>5000000){
        echo "Error File Size";
        $uploadok = 0;
    }
    if($imageFiletype != "png" && $imageFiletype != "jpg" && $imageFiletype != "jpeg" ){
        echo "Error Image 'png' 'jpg' 'jpeg'";
        $uploadok = 0;
    }
    if($uploadok == 0){
        echo "File Not Upload";
    }else{
        $run = mysqli_query($conn,$insert1);
        if($run){
            header('location:/Care%20Project/login.php?Success');
        }
        if(move_uploaded_file($_FILES['image']['tmp_name'],$target_file)){
            echo "The File" . basename($_FILES['image']['name']) . "The has been is successfully";
        }else{
            echo "Error File Loading";
        }
    }

}
    
if(isset($_POST['update'])){
    $name = $_POST['name'];
    $id = $_POST['id'];
    $email = $_POST['email'];
    $image = $_FILES['image']['name'];
    $role = $_POST['role'];
    $city = $_POST['city'];
    $update = "UPDATE `careuser` SET `user_image`='$image',`user_name`='$name',`user_email`='$email',`role_id`= $role,`city_id`=$city WHERE user_id=$id";
    $cheak = getimagesize($_FILES['image']['tmp_name']);
    if($cheak !== false){
        echo "File is an ". $cheak['mime']  . '.';
        $uploadok = 1;
    }else{
        // header("Location:doctordetail.php?File is Not Image");
        echo "File is Not Image";
        $uploadok = 0;
    }
    if(file_exists($target_file)){
        echo "Error File Exist";
        $uploadok = 0;
    }
    if($_FILES['image']['size']>5000000){
        echo "Error File Size";
        $uploadok = 0;
    }
    if($imageFiletype != "png" && $imageFiletype != "jpg" && $imageFiletype != "jpeg" ){
        echo "Error Image 'png' 'jpg' 'jpeg'";
        $uploadok = 0;
    }
    if($uploadok == 0){
        echo "File Not Upload";
    }else{
        $run = mysqli_query($conn,$update);
        if($run){
            header('Location:doctordetail.php?Success');
        }
        if(move_uploaded_file($_FILES['image']['tmp_name'],$target_file)){
            echo "The File" . basename($_FILES['image']['name']) . "The has been is successfully";
        }else{
            echo "Error File Loading";
        }
    }
}
