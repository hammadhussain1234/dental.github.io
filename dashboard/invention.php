<?php session_start() ?>
<?php include "layout/header.php";
include "redirection.php";

if($_SESSION['role_id'] == '1') {

} ?>

<?php include "layout/slider.php"
?>
<?php include "config/connection.php";

if(isset($_POST['submit'])){
    $Invention_Title = $_POST['Invention_Title'];
    $Invention_Description = $_POST['Invention_Description'];
    $insert = "INSERT INTO `invention`( `inv_title`, `inv_dec`) VALUES ('$Invention_Title','$Invention_Description')";
    $row = mysqli_query($conn,$insert);
}
?>
<div class="container-fluid alert alert-primary text-center">
    <div class="container">
    <h1>Invention_Form</h1>
    </div>
</div>
<form action="" method="post">
    <div class="container-fluid">
        <div class="container">
        <div class="mb-3">
          
  <label for="exampleFormControlTextarea1" class="form-label">Invention_Title</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" name="Invention_Title" rows="3"></textarea>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Invention_Description</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" name="Invention_Description" rows="3"></textarea>
</div>
     <div class="pt-4">
        <input type="submit" name="submit" value="submit" class="btn btn-primary">
     </div>      
        </div>
    </div>
</form>
<?php include "layout/footer.php" ?>