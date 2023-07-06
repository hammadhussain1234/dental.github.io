<?php include "layout/header.php" ?>
<?php include "layout/slider.php" ?>
<?php include "config/connection.php";
 if(isset($_GET['id'])){
    $get = $_GET['id'];
    $select = "SELECT * FROM `careuser` WHERE user_id=$get ";
    $row = mysqli_query($conn,$select);
    $run = mysqli_fetch_assoc($row);
 }
?>
<section class="content">
      <div class="container-fluid">
      <p style="text-align: end;">
            <a href="doctordetail.php" class="btn btn-primary">Doctor_Detail</a>
          </p>
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="uploads/<?php echo $run['user_image'] ?>"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $run['user_name']?></h3>

                <p class="text-muted text-center"><?php echo $run['user_email'] ?></p>

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

            <!-- About Me Box -->

          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
<?php include "layout/footer.php" ?>