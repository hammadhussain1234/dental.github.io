<?php include "layout/header.php" ?>
<?php include "layout/slider.php" ?>
<?php include "config/connection.php";
if(isset($_GET['id'])){
    $get = $_GET['id'];
    $select = "SELECT * FROM `shedule` WHERE `she_id`=$get";
    $row = mysqli_query($conn,$select);
    $run = mysqli_fetch_assoc($row);
}
if(isset($_POST['update'])){
    $user = $_POST['user'];
    $day = $_POST['day'];
    $week = $_POST['week'];
    $month = $_POST['month'];
    $id = $_POST['id'];
    $update = "UPDATE `shedule` SET `user_id`= $user ,`day_id`= $day ,`week_id`=$week ,`month_id`= $month WHERE `she_id`=$id";
}
?>
<div class="container-fluid alert alert-primary text-center">
    <div class="conatiner">
        <h1>Update_Data</h1>
    </div>
</div>
<div class="container-fluid">
    <form action="sheduledetail.php?Success" method="post" >
<div class="row">
    <input type="hidden" name="id" value="<?php echo $run['she_id'] ?>" >
            <div class="col-lg-6 col-md-6 col-sm-12">
            <label>User_id</label>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
            <select name="user">
              <?php
              $select = "SELECT * FROM `careuser` ";
              $row = mysqli_query($conn,$select);
              while($run = mysqli_fetch_assoc($row)){
              ?>
              <option value="<?php echo $run['user_id']?>"><?php echo $run ['user_name'] ?></option>
              <?php } ?>
            </select>
            
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
            <label>Day</label>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
            <select name="day">
              <?php
              $select = "SELECT * FROM `day` ";
              $row = mysqli_query($conn,$select);
              while($run = mysqli_fetch_assoc($row)){
              ?>
              <option value="<?php echo $run['day_id']?>"><?php echo $run ['day_name'] ?></option>
              <?php } ?>
            </select>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
            <label>Week</label>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12"> 
            <select name="week">
              <?php
              $select = "SELECT * FROM `week` ";
              $row = mysqli_query($conn,$select);
              while($run = mysqli_fetch_assoc($row)){
              ?>
              <option value="<?php echo $run['week_id']?>"><?php echo $run ['week_name'] ?></option>
              <?php } ?>
            </select>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
            <label>Month</label>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
            <select name="month">
              <?php
              $select = "SELECT * FROM `month` ";
              $row = mysqli_query($conn,$select);
              while($run = mysqli_fetch_assoc($row)){
              ?>
              <option value="<?php echo $run['month_id']?>"><?php echo $run ['month_name'] ?></option>
              <?php } ?>
            </select>
            </div>
          </div>
            <div class="pt-4">
                <input type="submit" name="update" value="Update" class="btn btn-primary">
            </div>
            </form></div>
<?php include "layout/footer.php" ?>