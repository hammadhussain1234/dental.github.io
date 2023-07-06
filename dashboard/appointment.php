<?php session_start() ?>
<?php include "layout/header.php";
include "redirection.php";
if($_SESSION['role_id'] == '1') {

} 
?>
<?php include "layout/slider.php" ?>
<?php include "config/connection.php";
if (isset($_POST['submit'])) {
    $careuser = $_POST['careuser'];
    $day = $_POST['day'];
    $week = $_POST['week'];
    $month = $_POST['month'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $insert = "INSERT INTO appointment (`user_id`, `day_id`, `week_id`, `month_id`, `app_date`, `app_time`)
               VALUES ($careuser, $day, $week, $month, '$date', '$time')";
    $run = mysqli_query($conn, $insert);

    if ($run) {
        echo "Appointment saved successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<div class="container-fluid alert alert-primary text-center">
    <div class="container">
        <h1>Appointment_Form</h1>
    </div>
</div>
<p style="text-align: end;">
                <a href="appointmentdetail.php" class="btn btn-primary">Appointment_Detail</a>
            </p>
<div class="container-fluid">
    <div class="container">
        <form action="" method="post">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label>Doctor</label>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <select name="careuser">
                        <?php
                        $select = "SELECT * FROM `careuser` ";
                        $row = mysqli_query($conn, $select);
                        while ($run = mysqli_fetch_assoc($row)) {
                        ?>
                            <option value="<?php echo $run['user_id'] ?>"><?php echo $run['user_name'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <br>
                    <label>Day</label>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <br>
                    <select name="day">
                        <?php
                        $select = "SELECT * FROM `day` ";
                        $row = mysqli_query($conn, $select);
                        while ($run = mysqli_fetch_assoc($row)) {
                        ?>
                            <option value="<?php echo $run['day_id'] ?>"><?php echo $run['day_name'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <br>
                    <label>Week</label>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <br>
                    <select name="week">
                        <?php
                        $select = "SELECT * FROM `week` ";
                        $row = mysqli_query($conn, $select);
                        while ($run = mysqli_fetch_assoc($row)) {
                        ?>
                            <option value="<?php echo $run['week_id'] ?>"><?php echo $run['week_name'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <br>
                    <label>Month</label>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <br>
                    <select name="month">
                        <?php
                        $select = "SELECT * FROM `month` ";
                        $row = mysqli_query($conn, $select);
                        while ($run = mysqli_fetch_assoc($row)) {
                        ?>
                            <option value="<?php echo $run['month_id'] ?>"><?php echo $run['month_name'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <br>
                    <label>Timening</label>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="">
                        <br>
                        <input type="time" name="time">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <br>
                    <label>Date</label>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <br>
                    <div class="">
                        <input type="date" name="date">
                    </div>
                </div>
                <div class="pt-4">
                    <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                </div>
            </div>
        </form>
    </div>
</div>
<?php include "layout/footer.php" ?>