<?php session_start() ?>
<?php include "layout/header.php";
include "redirection.php";

if($_SESSION['role_id'] == '1') {

} ?>

<?php include "layout/slider.php"?>
<?php include "config/connection.php";
$select = "SELECT * FROM `disease`";
$row = mysqli_query($conn,$select);

?>
<div class="container-fluid alert alert-primary text-center">
    <div class="container">
        <h1>Disease_Detail</h1>
    </div>
</div>
<p style="text-align: end;">
            <a href="disease.php" class="btn btn-primary">Disease_Form</a>
        </p>
<div class="container-fluid">
    <div class="">
        <table class="table table-striped">
            <tr>
                <td>S:no</td>
                <td>Disease_Name</td>
                <td>Disease_Description</td>
                <td>Prevention_Method</td>
                <td>Cure_Method</td>
                <td>Action</td>
            </tr>
            <tr>
                <?php
                $i= 1;
                while($run =mysqli_fetch_assoc($row)){
                ?>
                <td><?php echo $i ?></td>
                <td><?php echo $run['dis_name'] ?></td>
                <td><?php echo $run['dis_des'] ?></td>
                <td><?php echo $run['prevention_method'] ?></td>
                <td><?php echo $run['cure_method'] ?></td>
                <td>
                    <a href="diseaseedit.php?id=<?php echo $run['dis_id'] ?>" class="btn btn-success">Edit</a>
                    <br>
                    <br>
                    <a href="diseasedelete.php?id=<?php echo $run['dis_id'] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php $i++; }?>
        </table>
    </div>
</div>
<?php include "layout/footer.php" ?>