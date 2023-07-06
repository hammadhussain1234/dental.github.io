<?php session_start() ?>
<?php include "layout/header.php";
include "redirection.php";

if($_SESSION['role_id'] == '1') {

} ?>

<?php include "layout/slider.php"?>
<?php include "config/connection.php";
if(isset($_POST['submit'])){
    $name = $_POST ['name'];
    $Disease_Description = $_POST ['Disease_Description'];
    $Prevention_Method = $_POST ['Prevention_Method'];   
    $Cure_Method = $_POST ['Cure_Method'];
    $insert = "INSERT INTO `disease`(`dis_name`, `dis_des`, `prevention_method`, `cure_method`)
     VALUES ('$name','$Disease_Description','$Prevention_Method','$Cure_Method')";
     $row = mysqli_query($conn,$insert);
}
  
?>
<div class="container-fluid alert alert-primary text-center">
    <div class="container">
         <h1>Disease Form</h1> 
    </div>
</div>
<form action="disease.php?Success" method="post">
<div class="container-fluid">
    <div class="container">
      
        <div class="">
        <label>Disease_Name</label>
        <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Disease_Description</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" name="Disease_Description" rows="3"></textarea>
</div>
        <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Prevention_Method</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" name="Prevention_Method" rows="3"></textarea>
</div>
        <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Cure_Method</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" name="Cure_Method" rows="3"></textarea>
</div>
<div class="">
    <input type="submit" class="btn btn-primary" name="submit" value="submit">
</div>
    </div>
</div>
</form>
<?php include "layout/footer.php" ?>