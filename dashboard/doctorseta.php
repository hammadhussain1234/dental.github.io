<?php session_start() ?>
<?php include "layout/header.php";
include "redirection.php";
if($_SESSION['role_id'] == '1') {

} ?>

<?php include "layout/slider.php"
?>
<?php include "config/connection.php";
 if(isset($_POST['submit'])){
    $user = $_POST['user'];
    $day = $_POST['day'];
    $week = $_POST['week'];
    $month = $_POST['month'];
    $insert = "INSERT INTO `shedule`( `user_id`, `day_id`, `week_id`, `month_id`) VALUES ($user,$day,$week,$month)";
    $row = mysqli_query($conn,$insert);
 }
 ?>
<div class="container-fluid alert alert-primary text-center">
    <div class="container">
        <h1>Doctor Schedule Table</h1>
    </div>
</div>
<form action="" method="post">
    <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
            <label>Doctor</label>
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
                <input type="submit" name="submit" value="Add" class="btn btn-primary">
            </div>
        </div>
    </div>
</form>
<?php include "layout/footer.php" ?>