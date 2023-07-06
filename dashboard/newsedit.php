<?php include "layout/header.php" ?>
<?php include "layout/slider.php" ?>
<?php include "config/connection.php";
if(isset($_GET['id'])){
    $get = $_GET['id'];
    $select = "SELECT * FROM `news` WHERE `news_id`=$get";
    $row = mysqli_query($conn,$select);
    $run = mysqli_fetch_assoc($row);
}
if(isset($_POST['update'])){
    $title = $_POST['title']; 
    $des = $_POST['des'];
    $id = $_POST['id'];
    $update = "UPDATE `news` SET `news_title`='$title',`news_des`='$des' WHERE `news_id`=$id";
}
?>
<div class="container-fluid alert alert-primary text-center">
  <div class="conatiner">
    <h1>Upadate_Data</h1>
  </div>
</div>

<div class="container-fluid">
    <div class="container">
        <form action="newsdetail.php" method="post">
            <label>News_Title</label>
            <input type="text" class="form-control" name="title" value="<?php echo $run['news_title'] ?>">
            <input type="hidden" class="form-control" name="id" value="<?php echo $run['news_id'] ?>">
            <label>News_Description</label>
            <input type="text" class="form-control" name="des" value="<?php echo $run['news_des'] ?>">
            <div class="pt-4">
                <input type="submit" name="update" value="submit" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
<?php include "layout/footer.php" ?>