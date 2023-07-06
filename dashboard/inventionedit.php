<?php include "layout/header.php" ?>
<?php include "layout/slider.php" ?>
<?php include "config/connection.php";
if(isset($_GET['id'])){
    $get = $_GET['id'];
    $select = "SELECT * FROM `invention` WHERE `inv_id`=$get ";
    $row = mysqli_query($conn,$select);
    $run = mysqli_fetch_assoc($row);
}
if(isset($_POST['update'])){
    $title = $_POST['title'];
    $des = $_POST['des'];
    $id = $_POST['id'];
    $update = "UPDATE `invention` SET `inv_title`='$title',`inv_dec`='$des' WHERE `inv_id`=$id";
}
?>
<div class="container-fluid alert alert-primary text-center">
    <div class="conatiner">
        <h1>Update_Data</h1>
    </div>
</div>
<div class="container-fluid">
    <form action="inventiondetail.php" method="post">
        <label>Invention_Title</label>
        <input type="text" class="form-control" name="title" value="<?php echo $run['inv_title'] ?>">
        <input type="hidden" class="form-control" name="id" value="<?php echo $run['inv_id'] ?>">
        <label>Invention_Description</label>
        <input type="text" class="form-control" name="des" value="<?php echo $run['inv_dec'] ?>">
        <div class="pt-4">
            <input type="submit" name="update" value="update" class="btn btn-primary">
        </div>
    </form>
</div>
<?php include "layout/footer.php" ?>