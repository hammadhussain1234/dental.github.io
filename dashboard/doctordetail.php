<?php session_start() ?>
<?php include "layout/header.php";
include "redirection.php";

if($_SESSION['role_id'] == '1') {

} ?>

<?php include "layout/slider.php"?>
<?php include "config/connection.php";
 $select = "SELECT
 *
 FROM
     `careuser`
 INNER JOIN role ON careuser.role_id= role.role_id
 INNER JOIN city ON careuser.city_id = city.city_id";
 $row = mysqli_query($conn,$select);

//  if(isset ($_GET['File is Not Image'])){
//     echo "Sorry File is Not Image";
//  }
//  if(isset ($_GET['Error File Exist'])){
//     echo "Sorry Error File Exist";
//  }
//  if(isset ($_GET['Error File Size'])){
//     echo "Sorry Error File Size";
//  }
//  if(isset ($_GET["Error Image 'png' 'jpg' 'jpeg'"])){
//     echo "Sorry Error Image 'png' 'jpg' 'jpeg'";
//  }
//  if(isset ($_GET['File Not Upload'])){
//     echo "File Not Upload";
//  }
//  if(isset ($_GET['Error File Loading'])){
//     echo "Sorry Error File Loading";
//  }
//  if(isset ($_GET['Success'])){
//     echo "Success";
//  }
?>

<div class="container-fluid alert alert-primary text-center">
    <div class="container">
        <h1>Doctor_Detail</h1>
    </div>
</div>
<p style="text-align: end;">
                    <a href="user.php"  class="btn btn-primary">Doctor_Creat_Form</a>
              </p>
<div class="container-fluid">
    <div class="">
        <table class="table table-striped">
          <tr>
            <th>S:no</th>
            <th>Name</th>
            <th>Email</th>
            <th>Image</th>
            <!-- <th>Role_id</th> -->
            <th>Role_name</th>
            <!-- <th>City_id</th> -->
            <th>City_name</th>
            <th>Action</th>
          </tr>
          <tr>
            <?php 
             $i = 1;
             while($run = mysqli_fetch_assoc($row)){
            ?>
            <td><?php echo $i ?></td>
            <td><?php echo $run['user_name']; ?></td>
            <td><?php echo $run['user_email'] ?></td>
            <td><?php echo $run['user_image']?></td>
            <!-- <td><?php echo $run['role_id'] ?></td> -->
            <td><?php echo $run['role_name'] ?></td>
            <!-- <td><?php echo $run['city_id'] ?></td> -->
            <td><?php echo $run['city_name'] ?></td>
            <td>
              <a href="doctorview.php?id=<?php echo $run['user_id']?>" class="btn btn-secondary">View</a>
              <a href="doctoredit.php?id=<?php echo $run['user_id']?>" class="btn btn-success">Edit</a>
              <a href="doctordelete.php?id=<?php echo $run['user_id']?>" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          <?php $i++; }?>
        </table>
    </div>
</div>
<?php include "layout/footer.php" ?>