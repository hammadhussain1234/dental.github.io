
<?php 
session_start();
include "layout/header.php";
include "redirection.php";
if(!isset($_SESSION['user_id']) && !isset($_SESSION['user_email']) && !isset($_SESSION['Password']) && !isset($_SESSION['role_id'])){
    header("location:login.php");
}
 ?>
<?php include "layout/slider.php"
?>
<?php include "config/connection.php";
$select = "SELECT COUNT(app_id) AS 'Appointment' FROM `appointment` ";
$run = mysqli_query($conn,$select);
$row = mysqli_fetch_assoc($run);
$select1 = "SELECT COUNT(user_id) AS 'Doctor' FROM `careuser` WHERE `role_id` = 2 ";
$run1 = mysqli_query($conn,$select1);
$row1 = mysqli_fetch_assoc($run1);
$select2 = "SELECT COUNT(user_id) AS 'Patient' FROM `careuser` WHERE `role_id` = 3 ";
$run2 = mysqli_query($conn,$select2);
$row2 = mysqli_fetch_assoc($run2);
$select3 = "SELECT COUNT(user_id) AS 'Admin' FROM `careuser` WHERE `role_id` = 1 ";
$run3 = mysqli_query($conn,$select3);
$row3 = mysqli_fetch_assoc($run3);
?>
<div class="container-fluid">
    <div class="container">
                            <!-- Content Row -->
                            <div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Appointment</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $row ['Appointment'] ?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Doctor</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $row1['Doctor'] ?></div>
                </div>
                <div class="col-auto">
                <i class="fa-solid fa-user-doctor fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Patient
                    </div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $row2['Patient'] ?></div>
                        </div>
                       
                    </div>
                </div>
                <div class="col-auto">
                <i class="fa-solid fa-bed-pulse fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Admin</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $row3['Admin'] ?></div>
                </div>
                <div class="col-auto">
                <i class="fa-solid fa-hospital fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Content Row -->


    </div>
</div>
<?php include "layout/footer.php" ?>