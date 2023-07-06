<?php session_start() ?>
<?php include "layout/header.php";
include "redirection.php";

if($_SESSION['role_id'] == '1') {

} ?>

<?php include "layout/slider.php"?>
<?php include "config/connection.php";
    $select = "SELECT
    app_id,
    careuser.user_name,
    day.day_name,
    week.week_name,
    month.month_name,
    appointment.app_date,
    appointment.app_time
FROM
    `appointment`
INNER JOIN careuser ON appointment.user_id = careuser.user_id
INNER JOIN DAY ON appointment.day_id = day.day_id
INNER JOIN WEEK ON appointment.week_id = week.week_id
INNER JOIN MONTH ON appointment.month_id = month.month_id";
$row = mysqli_query($conn,$select);

?>
<div class="container-fluid alert alert-primary text-center">
    <div class="container">
        <h1>Appointment_Detail</h1>
    </div>
</div>

<div class="container-fluid">
    <table class="table table-striped">
        <tr>
            <td>S:no</td>
            <td>Doctor</td>
            <td>Day</td>
            <td>Week</td>
            <td>Month</td>
            <td>Date</td>
            <td>Time</td>
            <td>Action</td>
        </tr>
        <tr>
            <?php
            $i = 1;
            while($run = mysqli_fetch_assoc($row)){
            ?>
            <td><?php echo $i ?></td>
            <td><?php echo $run['user_name'] ?></td>
            <td><?php echo $run['day_name'] ?></td>
            <td><?php echo $run['week_name'] ?></td>
            <td><?php echo $run['month_name'] ?></td>
            <td><?php echo $run['app_date'] ?></td>
            <td><?php echo $run['app_time'] ?></td>
            <td>
                <a href="appointmentedit.php?id=<?php echo $run['app_id'] ?>" class="btn btn-success">Edit</a>
                <a href="appointmentdelete.php?id=<?php echo $run['app_id'] ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        <?php $i++; }?>
    </table>
</div>
<?php include "layout/footer.php" ?>