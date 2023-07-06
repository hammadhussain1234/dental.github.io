<?php session_start() ?>
<?php include "layout/header.php";
include "redirection.php";

if($_SESSION['role_id'] == '1') {

} ?>

<?php include "layout/slider.php"
?>
<?php include "config/connection.php";
$select = "SELECT
she_id,
careuser.user_name,
day.day_name,
week.week_name,
month.month_name
FROM
`shedule`
INNER JOIN `careuser` ON shedule.user_id = careuser.user_id
INNER JOIN `day` ON shedule.day_id = day.day_id
INNER JOIN `week` ON shedule.week_id = week.week_id
INNER JOIN `month` ON shedule.month_id = month.month_id ";
$row =mysqli_query($conn,$select);
?>
<div class="container-fluid alert alert-primary text-center">
    <div class="container">
        <h1>Doctor_Shedule_Detail</h1>
    </div>
</div>
<p style="text-align: end;">
            <a href="doctorseta.php" class="btn btn-primary">Shedule_Form</a>
          </p>
<div class="container-fluid">
    <table class="table table-striped">
       <tr>
        <td>S:no</td>
        <td>Name</td>
        <td>Day</td>
        <td>Week</td>
        <td>Month</td>
        <td>Action</td>
       </tr>
       <tr>
        <?php
        $i =1;
        while($run = mysqli_fetch_assoc($row)){
        ?>
        <td><?php echo $i ?></td>
        <td><?php echo $run['user_name'] ?></td>
        <td><?php echo $run['day_name'] ?></td>
        <td><?php echo $run['week_name'] ?></td>
        <td><?php echo $run['month_name'] ?></td>
        <td>
            <a href="sheduleedit.php?id=<?php echo $run['she_id'] ?>" class="btn btn-success">Edit</a>
            <a href="sheduledelete.php?id=<?php echo $run['she_id'] ?>" class="btn btn-danger">Delete</a>
        </td>
       </tr>
       <?php $i++; } ?>
    </table>
</div>
<?php include "layout/footer.php" ?>