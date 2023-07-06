<?php 
session_start();
?>
<?php include "layout/header.php";
include "redirection.php" ?>
<?php include "layout/slider.php"?>
<?php include "config/connection.php";
$select = "SELECT * FROM `careuser` ";
$run = mysqli_query($conn,$select);
$row = mysqli_fetch_assoc($run);
?>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-sm-12 col-md-12">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <!-- <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="/dashboard/./uploads//"<?php echo $row['user_image'] ?>
                       alt="User profile picture">
                </div> -->

                <h3 class="profile-username text-center"><?php echo $_SESSION['user_id'] ?></h3>

                <p class="text-muted text-center"><?php echo $_SESSION['user_email'] ?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Followers</b> <a class="float-right">1,322</a>
                  </li>
                  <li class="list-group-item">
                    <b>Following</b> <a class="float-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>Friends</b> <a class="float-right">13,287</a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

        
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
<?php include "layout/footer.php" ?>