<?php session_start() ?>
<?php include "layout/header.php";
include "redirection.php";

if($_SESSION['role_id'] == '1') {

} ?>

<?php include "layout/slider.php"
?>
<?php include "config/connection.php";
$select = "SELECT * FROM `invention` ";
$row = mysqli_query($conn,$select);
?>
<div class="conatiner-fluid alert alert-primary text-center">
    <div class="conatiner">
        <h1>Invention_Detail</h1>
    </div>
</div>
<p style="text-align: end;">
                <a href="invention.php" class="btn btn-primary">Invention_Form</a>
            </p>
<div class="container-fluid">
    <table class="table table-striped">
      <tr>
        <td>S:no</td>
        <td>Invention_Title</td>
        <td>Invention_Description</td>
        <td>Action</td>
      </tr>
      <tr>
        <?php 
        $i=1;
        while($run = mysqli_fetch_assoc($row)){
        ?>
        <td><?php echo $i ?></td>
        <td><?php echo $run['inv_title'] ?></td>
        <td><?php echo $run['inv_dec'] ?></td>
        <td>
            <a href="inventionedit.php?id=<?php echo $run['inv_id'] ?>" class="btn btn-success">Edit</a>
            <br>
            <br>
            <a href="inventiondelete.php?id=<?php echo $run['inv_id'] ?>" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      <?php $i++; } ?>
    </table>
</div>
<?php include "layout/footer.php" ?>