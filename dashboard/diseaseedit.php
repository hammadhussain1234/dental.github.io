<?php
include "layout/header.php";
include "layout/slider.php";
include "config/connection.php";

if(isset($_GET['id'])){
    $get = $_GET['id'];
    $select = "SELECT * FROM `disease` WHERE `dis_id`=$get ";
    $row = mysqli_query($conn, $select);
    $run = mysqli_fetch_assoc($row);
}

if(isset($_POST['update'])){
    $name = $_POST['name'];
    $discription = $_POST['discription'];
    $prevention = $_POST['prevention'];  
    $cure = $_POST['cure'];
    $id = $_POST['id'];
    
    $update = "UPDATE `disease` SET `dis_name`='$name', `dis_des`='$discription', `prevention_method`='$prevention', `cure_method`='$cure' WHERE `dis_id`=$id";
    $row = mysqli_query($conn, $update);
}

?>

<div class="container-fluid alert alert-primary">
    <div class="container">
        <h1>Disease_Detail</h1>
    </div>
</div>

<div class="container-fluid">
    <div class="container">
        <form action="diseasedetail.php" method="post">
            <label>Disease_Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo $run['dis_name']; ?>" >
            <input type="hidden" name="id" class="form-control" value="<?php echo $run['dis_id']; ?>">
            <label>Disease_Description</label>
            <input type="text" name="discription" class="form-control" value="<?php echo $run['dis_des']; ?>">
            <label>Prevention_Method</label>
            <input type="text" name="prevention" class="form-control" value="<?php echo $run['prevention_method']; ?>">
            <label>Cure_Method</label>
            <input type="text" name="cure" class="form-control" value="<?php echo $run['cure_method']; ?>">
            <div class="pt-4">
                <input type="submit" name="update" value="Update" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>

<?php include "layout/footer.php"; ?>
