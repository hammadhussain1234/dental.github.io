<?php  
include "dashboard/config/connection.php";
$select = "SELECT * FROM `invention`";
$row = mysqli_query($conn,$select);
$select1 = "SELECT * FROM `disease`";
$row1 = mysqli_query($conn,$select1);
$select2 = "SELECT * FROM `news`";
$row2 = mysqli_query($conn,$select2);
$select3 = "SELECT
she_id,
careuser.user_name,
day.day_name,
week.week_name,
month.month_name
FROM
`shedule`
INNER JOIN `careuser` ON shedule.user_id = careuser.user_id
INNER JOIN `day` ON shedule.day_id = day.day_id
INNER JOIN `week` ON shedule.week_id = week.week_id
INNER JOIN `month` ON shedule.month_id = month.month_id ";
$row3 = mysqli_query($conn,$select3);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  </head>
<body> 
   <div class="container-fluid fixed-top" style="background-color: darkblue;" id="">
   <nav class="navbar navbar-expand-lg bg-body-tertiary">
<div class="container-fluid">
<a href=""><img src="image/Capture-removebg-preview.png" width="150px" alt=""></a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
    <ul class="navbar-nav ">
      <li class="nav-item">
        <a class="nav-link text-light" href="home.php">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="services.php">SERVICES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  text-light" href="#">DOCTOR</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  text-light" href="#">BLOG</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  text-light" href="#">SHOP</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  text-light" href="#">CONTACT</a>
      </li>
    </ul>
  </div>
  <!-- <a href="#" class="btn btn-outline-light" >VIEW SHEDEULE</a> -->
  <div class="d-grid gap-2 d-md-block"><a href="register.php" class="btn btn-outline-light">Sign Up</a>
<a href="login.php" class="btn btn-outline-light">Sign In</a></div>
  
</div>
</nav>

   
  </div>
<div class="">
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="bg1">
         <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h1>We Create Perfect Smiles</h1>
                    <p>A better Life start a beautifull smile</p>
                    <!-- <a href="#" class="btn btn-outline-light">Make a Appointment</a> -->
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                  View Shedule
                </button>
               

      <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Doctor Shedule</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body ">
             <table class="table table-striped">
               <tr>
                <th>S:no</th>
                <th>Name</th>
                <th>Day</th>
                <th>Week</th>
                <th>Month</th>
               </tr>
               <tr>
                <?php
                $i = 1;
                while($run3 = mysqli_fetch_assoc($row3)){
                ?>
                <td><?php echo $i?></td>
                <td><?php echo $run3['user_name'] ?></td>
                <td><?php echo $run3['day_name'] ?></td>
                <td><?php echo $run3['week_name'] ?></td>
                <td><?php echo $run3['month_name'] ?></td>
               </tr>
               <?php $i++; }?>
             </table>
            </div>
            <div class="modal-footer justify-content-end">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

      <!-- /.modal -->
                </div>
            </div>
         </div>
      </div>
    </div>
    <div class="carousel-item">
    <div class="bg2">
         <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h1>We Create Perfect Smiles</h1>
                    <p>A better Life start a beautifull smile</p>
                   <div class="text-center">
                    <a href="#" class="btn btn-outline-light">Make a Appointment</a>
                   </div>
                </div>
            </div>
         </div>
      </div>
    </div>
    <div class="carousel-item">
    <div class="bg3">
         <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  
                   </div>
                </div>
            </div>
         </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="container-fluid " style="padding-top: 10%;" >
    <div class="container">
        <div class="heading">
            <p>DENTAL SERVICES</p>
             <h1>Medical Invention</h1>
        </div>
    </div>
</div>
<!-- <div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="care1">
                    <div class="">
                        <div class="card_body text-center m-2">
                            <a href=""><img src="image/dental-laser.jpg" width="100%" alt=""></a>
                            <h1>Laser Treatment</h1>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis deserunt quia, rerum ad alias ea dolor. Nesciunt inventore ut, reiciendis deleniti repellat, eligendi earum quis minima corporis tenetur laboriosam libero!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="care1">
                    <div class="">
                        <div class="card_body text-center m-2">
                           <a href=""><img src="image/pexels-anna-shvets-3845766.jpg" width="100%" alt=""></a>
                            <h1>Teeth Whitening</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum sequi molestiae rem, dignissimos laudantium exercitationem possimus! Quidem, enim quia nemo alias maxime accusantium ut, placeat exercitationem sunt dignissimos odio qui?</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="care1">
                    <div class="">
                        <div class="card_body text-center m-2">
                            <a href="dentalimplament.php"><img src="image/pexels-anna-shvets-3845548.jpg" width="100%" alt=""></a>
                            <h1>Dental  Implant</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci officiis voluptas provident aliquid, temporibus itaque inventore suscipit ipsum eos ut iusto nam perspiciatis consequuntur iste ipsam culpa? Doloremque, tenetur similique.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="container-fluid">
  <div class="container">
  <table class="table table-striped">
    <tr>
      <th>S:no</th>
      <th>Name</th>
      <th>Deccription</th>
    </tr>
    <tr>
      <?php
      $i = 1;
      while($run = mysqli_fetch_assoc($row)){ 
      ?>
      <td><?php echo $i ?></td>
      <td><?php echo $run['inv_title'] ?></td>
      <td><?php echo $run['inv_dec'] ?></td>
    </tr>
    <?php $i++; } ?>
  </table>
  </div>
</div>

<div class="" style="padding-top: 10%;">
<div class="container-fluid  bg-light">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
      <img src="image/pexels-anna-shvets-3845735.jpg" width="100%" alt="">
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="container">
        <div class="chekup">
          <h1 style="font-size: 7vmin; font-weight: bold;">The Best Technique Immediate & Efficient Result</h1>
          <br>
          <p style="font-weight: bold; font-size: 2vmin;">We offer a total scope of dental and cleanliness medications, performed by talented and energetic experts in our reality class medical procedure. Our medications run from protection dentistry (counting dental cleanliness, the treatment of jaw issues.</p>
          <br>
          <p style="font-weight: bold; font-size: 2vmin;">Our motivation is to separate ourselves as a medical procedure that gives far-reaching dentistry of the extremely most astounding quality that upgrades our patients’ lives.</p>
          <br>
          <a href="#" class="btn btn-outline-dark">READ MORE </a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="container-fluid " style="padding-top: 10%;" >
    <div class="container">
        <div class="heading">
            <p>DENTAL SERVICES</p>
             <h1>Medical Disease</h1>
        </div>
    </div>
</div>
<div class="container-fluid">
  <div class="container">
  <table class="table table-striped">
    <tr>
      <th>S:no</th>
      <th>Name</th>
      <th>Description</th>
      <th>Prevantion_Methode</th>
      <th>Cure_Methode</th>
    </tr>
    <tr>
      <?php 
      $i = 1;
      while($run1 = mysqli_fetch_assoc($row1)){
      ?>
      <td><?php echo $i ?></td>
      <td><?php echo $run1['dis_name'] ?></td>
      <td><?php echo $run1['dis_des'] ?></td>
      <td><?php echo $run1['prevention_method'] ?></td>
      <td><?php echo $run1['cure_method'] ?></td>
    </tr>
    <?php $i++; } ?>
  </table>
  </div>
</div>
<div class="container-fluid " style="padding-top: 10%;">
    <div class="container">
        <div class="heading"> 
           <h1>How We Work</h1>
            <p>Our experts always provide the best teeth care service. Why TruSmile service is best for the dental treatments of all types of patients like children, elders etc...</p>
           
        </div>
    </div>
</div>

<div class="container-fluid">
<div class="container">
  <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-12">
       <img src="image/work1.PNG" width="100%" height="270px"  alt="">
       <div class="">
        <h3 style="text-align: center; ">Book an Appointment</h3>
        <p style="text-align: center; ">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
       </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12">
      <img src="image/work2.PNG" width="100%" alt="">
      <div class="">
        <h3 style="text-align: center; ">Dental check-ups</h3>
        <p style="text-align: center; ">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip .</p>
       </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12">
      <img src="image/work3.PNG" width="100%" alt="">
      <div class="">
        <h3 style="text-align: center; ">Dental treatment</h3>
        <p style="text-align: center; ">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
       </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12">
     <img src="image/work4.PNG" width="100%" alt="">
     <div class="">
        <h3 style="text-align: center; ">Home Care</h3>
        <p style="text-align: center; ">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium. </p>
       </div>
    </div>
  </div>
</div>
</div>
<div class="" style="padding-top: 10%;">
  <div class="container-fluid bg-light">
    <div class="row">   
      <div class="col-lg-6 col-md-6 col-sm-12">
       <img src="image/services.PNG" width="100%" alt="">
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="container">
        <div class="p">
          <h1 style="font-size: 7vmin; font-weight: bold;">My Best ServicesFor Your Dental Health!</h1>
<br>

<p style="font-size: 2vmin; font-weight: bold;">Teeth whitening is one of the quickest ways to improve your smile. Many patients are amazed that one trip to Medilab can change their teeth dramatically.</p>
<br>
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-12">
        <img src="image/teeth.PNG" width="100px" alt="">
      </div>
      <div class="col-lg-9 col-md-9 col-sm-12">
        <h3 style="font-size: vmin; font-weight: bold;">Limits Bleeding</h3>
        <p style="font-size: 2vmin; font-weight: bold;">Lorem ipsum dolor sit ametc onsectetur adipiscing.</p>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12">
        <img src="image/file.PNG" width="100px" alt="">
      </div>
      <div class="col-lg-9 col-md-9 col-sm-12">
        <h3 style="font-size: vmin; font-weight: bold;">Limits Bleeding</h3>
        <p style="font-size: 2vmin; font-weight: bold;">Lorem ipsum dolor sit ametc onsectetur adipiscing.</p>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12">
        <img src="image/teeth.2.PNG" width="100px" alt="">
      </div>
      <div class="col-lg-9 col-md-9 col-sm-12">
        <h3 style="font-size: vmin; font-weight: bold;">Limits Bleeding</h3>
        <p style="font-size: 2vmin; font-weight: bold;">Lorem ipsum dolor sit ametc onsectetur adipiscing.</p>
      </div>
    </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid " style="padding-top: 10%;" >
    <div class="container">
        <div class="heading">
            <p>DENTAL SERVICES</p>
             <h1>Medical News</h1>
        </div>
    </div>
</div>
<div class="container-fluid">
  <div class="container">
  <table class="table table-striped">
    <tr>
      <th>S:no</th>
      <th>Name</th>
      <th>Description</th>
    </tr>
    <tr>
      <?php
      $i = 1;
      while($run2 = mysqli_fetch_assoc($row2)){
      ?>
      <td><?php echo $i ?></td>
      <td><?php echo $run2['news_title'] ?></td>
      <td><?php echo $run2['news_des'] ?></td>
    </tr>
    <?php $i++; }?>
  </table>
  </div>
</div>
<div class="container-fluid " style="padding-top: 10%;">
    <div class="container">
        <div class="heading"> 
           <h1>Meet The Specialist Team</h1>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
           
        </div>
    </div>
</div>
<div class="container-fluid" >
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12 pt-2">
        <img src="image/doctor.1.PNG" width="100%" alt="">
        <h1>Dr. Mona Abaza</h1>
        <p>GENERAL DENTIST</p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 pt-2">
       <img src="image/doctor.2.PNG" width="100%" alt="">
       <h1>Dr. Froster Collings</h1>
       <p>ORTHODONTIST</p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 pt-2"> 
        <img src="image/doctor.3.PNG" width="100%" alt="">
        <h1>Dr. Maria Andaloro</h1>
       <p>DENTAL ASSISTANTS</p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 pt-2">
        <img src="image/doctor.4.PNG" width="100%" alt="">
        <h1>Dr. Mark Hoffman</h1>
       <p>ORTHODONTIST</p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 pt-2">
        <img src="image/doctor.5.PNG" width="100%" alt="">
        <h1>Dr. Emily Taylor</h1>
       <p>DENTAL SPECIALIST</p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 pt-2">
        <img src="image/doctor.6.PNG" width="100%" alt="">
        <h1>Dr. Maria Mitchell</h1>
       <p>DENTAL TECHNICIAN</p>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid  bg-light"  style="padding-top: 10%; padding-bottom: 10%;">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 text-center">
        <h1 style="font-size: 8vmin; font-weight: bold;">What Our Patients Say</h1>
        <p style="font-size: 3vmin; font-weight: bold;">"Very happy to have met with Dr. Benjamin Lee. He was thorough about what to expect regarding my procedure and was very empathetic during our whole conversation. I left his office with great hope and know that I am in great hands. The staff was amazing and professional. It was a very good experience. I only wish there were more facilities that give a patient the attention that’s needed."
Nancy Calo
Source: Google</p>
      </div>
    </div>
  </div>
</div>
<div class="contianer-fluid pb-5 " style="padding-top: 10%;">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <h1 style="font-size: 7vmin; font-weight: bold;">Working Hours</h1>
        <p style="font-weight: bold;">Molestie am perpetua efficiendi vix no. Ad vel inani putent electram, eu quo nostrud accommodare. Cum accusata temporibus, atqui munere legendos.</p>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <h1>Mon - Fri</h1>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 pt-2">
            <h4> 8AM - 6PM</h4>
          </div>
          <p>________________________________________________</p>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <h1>Sat - Sun</h1>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 pt-2">
            <h4> 9AM - 5PM</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 ">
        <img src="image/teeth.3.PNG" width="100%" alt="">
      </div>
    </div>
  </div>
</div>
<footer>
    <div class="container-fluid text-light pb-5" style="background-color: darkblue;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <img src="image/Capture-removebg-preview.png"  alt="">
                    <br>
                    <p style="color: whitesmoke ;">Professional WP theme made for dentists, clinics and everyone else in the dental health industry.</p>
                    <h4>+ 09999111 888</h4>
                    <i class="fa-brands fa-facebook"></i>   <i class="fa-brands fa-twitter"></i>  <i class="fa-brands fa-square-instagram"></i>  <i class="fa-brands fa-youtube"></i>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 pt-5">
                       <h3>Quick Links</h3>
                    <h6 href="#">Home</h6>
                    
                    <h6 href="#">Services</h6>
                    
                    <h6 href="#">Doctor</h6>
                    
                    <h6 href="#">Appointment</h6>
                    
                    <h6 href="#">Contact us</h6>
                    
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 pt-5">
                <h3>Working Hours</h3>
                    <h6 href="#">Mon – Fri: 8am – 6pm</h6>
                    
                    <h6 href="#">Saturday: 8am – 5pm</h6>
                    
                    <h6 href="#">Sunday: Closed</h6>
                   
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 pt-5">
                <h3>Contact Us</h3>
                    <h6 href="#"><i class="fa-solid fa-phone"></i> Phone: 01995 888 777</h6>
                    
                    <h6 href="#"><i class="fa-solid fa-envelope"></i>  contact.hammad@gmail.com</h6>
                    
                    <h6 href="#"><i class="fa-solid fa-location-dot"></i>  95 Brooklyn, NY 11213, US</h6>
                   
                </div>
            </div>
        </div>
    </div>
   </footer>
</body>
</html>
<script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
<script src="home.js"></script>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    $('.swalDefaultSuccess').click(function() {
      Toast.fire({
        icon: 'success',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultInfo').click(function() {
      Toast.fire({
        icon: 'info',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
   
  });