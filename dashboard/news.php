<?php session_start() ?>
<?php include "layout/header.php";
include "redirection.php";

if($_SESSION['role_id'] == '1') {

} ?>

<?php include "layout/slider.php"
 ?>
<?php include "config/connection.php"; 

if(isset($_POST['submit'])){
    $News_Title = $_POST['News_Title'];
    $News_Description = $_POST['News_Description'];
    $insert = "INSERT INTO `news`(`news_title`, `news_des`) VALUES ('$News_Title','$News_Description')";
    $row = mysqli_query($conn,$insert);   
}
?>
<a href="/dashboard/user.php"></a>
<div class="container-fluid alert alert-primary text-center">
    <div class="container">
    <h1>Medical_News_Form</h1>
    </div>
</div>
<form action="" method="post">
    <div class="container-fluid">
        <div class="container">
        <div class="mb-3">
          
  <label for="exampleFormControlTextarea1" class="form-label">News_Title</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" name="News_Title" rows="3"></textarea>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">News_Description</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" name="News_Description" rows="3"></textarea>
</div>
<div class="pt-4">
    <input type="submit" name="submit" value="submit" class="btn btn-primary">
</div>
        </div>
    </div>
</form>
<?php include "layout/footer.php" ?>