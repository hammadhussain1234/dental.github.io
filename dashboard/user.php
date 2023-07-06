<?php session_start() ?>
<?php include "layout/header.php";
include "redirection.php";

if($_SESSION['role_id'] == '1') {

} ?>

<?php include "layout/slider.php"

 ?>
<?php include "config/connection.php";
  
  ?>

<div class="container-fluid text-center alert alert-primary">
    <div class="container">
        <h1>Creat_Doctor_Form</h1>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <form action="upload.php" enctype="multipart/form-data" method="post">
            <div class="">
            <label>User_Name</label>
            <input type="text" class="form-control" name="name">
            </div>
            <div class="">
                <label>User_Email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="">
            <br>
            <input type="file"  name="image">
            </div>
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
                <input type="submit" value="submit" name="submit" class="btn btn-primary">
             </div>
        </form>
    </div>
</div>
<?php include "layout/footer.php" ?>