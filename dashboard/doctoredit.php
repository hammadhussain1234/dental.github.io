<?php include "layout/header.php" ?>
<?php include "layout/slider.php" ?>
<?php include "config/connection.php";
if(isset($_GET['id'])){
    $get = $_GET['id'];
    $select = "SELECT * FROM `careuser` WHERE user_id=$get";
    $row = mysqli_query($conn,$select);
    $run = mysqli_fetch_assoc($row);
}
// if(isset($_POST['update'])){
//     $name = $_POST['name'];
//     $id = $_FILES['id'];
//     $email = $_POST['email'];
//     $image = $_FILES['image']['name'];
//     $role = $_POST['role'];
//     $city = $_POST['city'];
//     $update = "UPDATE `careuser` SET `user_image`='$image',`user_name`='$name',`user_email`='$email',`role_id`= $role,`city_id`=$city ";
// }
?>
<div class="container-fluid alert alert-primary text-center ">
    <div class="container">
        <h1>Update Data</h1>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <form action="upload.php?Success" enctype="multipart/form-data" method="post">
            <label>User_Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo $run['user_name'] ?>">
            <input type="hidden" class="form-control" name="id" value="<?php echo $run['user_id'] ?>">
            <label>User_Email</label>
            <input type="text" class="form-control" name="email" value="<?php echo $run['user_email'] ?>">
            <br>
            <label>user_image</label>
            <input type="file" name="image" value="<?php echo $run['user_image'] ?>">
            <p><?php echo $run["user_image"]?></p>
            <br>
            <label >Role</label>
            <div>
              <?php
              $select = "SELECT * FROM `role` WHERE `role_id`= 2";
              $row = mysqli_query($conn,$select);
              while($run = mysqli_fetch_assoc($row)){
              ?>
              <input type="hidden"   name="role" value="<?php echo $run['role_id'] ?>"  >
              <input type="text"    value="<?php echo $run['role_name'] ?>"  >
              <?php } ?>
            </div>
            <br>
            <label>City</label>
            <select name="city">
              <?php
              $select = "SELECT * FROM `city` ";
              $row = mysqli_query($conn,$select);
              while($run = mysqli_fetch_assoc($row)){
              ?>
              <option value="<?php echo $run['city_id']?>"><?php echo $run ['city_name'] ?></option>
              <?php } ?>
            </select>
             <div class="pt-5">
                <input type="submit" value="update" name="update" class="btn btn-primary">
             </div>
        </form>
    </div>
</div>
<?php include "layout/footer.php" ?>
