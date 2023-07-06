<?php session_start() ?>
<?php include "layout/header.php";
include "redirection.php";

if($_SESSION['role_id'] == '1') {

} ?>

<?php include "layout/slider.php"
?>
<?php include "config/connection.php";
$select = "SELECT * FROM `news` ";
$row = mysqli_query($conn,$select);

?>
<div class="container-fluid alert alert-primary text-center">
    <div class="container">
        <h1>Medical_News_Detail</h1>
    </div>
</div>
<p style="text-align: end;">
                <a href="news.php" class="btn btn-primary">Medical_News_Form</a>
            </p>
<div class="container-fluid">
    <div class="">
        <table class="table table-striped">
           <tr>
            <td>S:no</td>
            <td>News_Title</td>
            <td>News_Description</td>
            <td>Action</td>
           </tr>
           <tr>
            <?php
            $i=1;
            while($run = mysqli_fetch_assoc($row)){
            ?>
            <td><?php echo $i ?></td>
            <td><?php echo $run['news_title'] ?></td>
            <td><?php echo $run['news_des'] ?></td>
            <td>
                <a href="newsedit.php?id=<?php echo $run['news_id'] ?>" class="btn btn-success">Edit</a>
                <br>
                <br>
                <a href="newsdelete.php?id=<?php echo $run['news_id'] ?>" class="btn btn-danger">Delete</a>
            </td>
           </tr>
           <?php $i++; }?>
        </table>
    </div>
</div>
<?php include "layout/footer.php" ?>