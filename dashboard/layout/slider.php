<!-- Main Sidebar Container -->
<aside class="main-sidebar bg-primary text-light elevation-4">
  <!-- Brand Logo -->
  <a href="/dashboard/index.php" class="brand-link">
    <img src="dist/img/Capture.PNG" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-bold">CARE</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <!-- <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div> -->
      <!-- <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div> -->
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <!-- <li class="nav-item menu-open">
            <a href="index.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Profile
              </p>
            </a>
          </li> -->
        <li class="nav-item menu-open">
          <a href="profile.php" class="nav-link active">
            <i class="nav-icon fa-solid fa-user"></i>
            <p>
              Profile
            </p>
          </a>
        </li>
        <?php
        if ($_SESSION['role_id'] == '1') {
          
        ?>
          <li class="nav-item menu-open">
            <a href="index.php" class="nav-link active">
              <i class="nav-icon fa-solid fa-hospital"></i>
              <p>
                Hospital Managment
              </p>
            </a>
          </li>
           <?php } ?> 
          <?php
                if ($_SESSION['role_id'] == '1') {
                  
                ?> 
          <li class="nav-item menu-open">
            <a href="doctordetail.php" class="nav-link active">
              <i class="nav-icon fa-solid fa-user-doctor"></i>
              <p>
                Doctor
              </p>
            </a>
          </li>
          <?php } ?> 
          <!-- <li class="nav-item menu-open">
            <a href="doctordetail.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
               Creat_Doctor_Detail
              </p>
            </a>
          </li> -->
          <?php
                if ($_SESSION['role_id'] == '1') {
                
                ?>
          <li class="nav-item menu-open">
            <a href="diseasedetail.php" class="nav-link active">
              <i class="nav-icon fa-solid fa-square-virus"></i>
              <p>
                Disease
              </p>
            </a>
          </li>
          <?php } ?>
          <?php
                if ($_SESSION['role_id'] == '1') {
                
                ?>
          <li class="nav-item menu-open">
            <a href="newsdetail.php" class="nav-link active">
              <i class="nav-icon fa-solid fa-square-plus"></i>
              <p>
                Medical_News
              </p>
            </a>
          </li>
          <?php } ?>
          <?php
                if ($_SESSION['role_id'] == '1') {
                 
                ?>
          <li class="nav-item menu-open">
            <a href="inventiondetail.php" class="nav-link active">
              <i class="nav-icon fa-sharp fa-solid fa-virus"></i>
              <p>

                Invention
              </p>
            </a>
          </li>
          </li>
          <?php } ?>
          <?php
                if ($_SESSION['role_id'] == '1') {
               
                ?>
          <li class="nav-item menu-open">
            <a href="sheduledetail.php" class="nav-link active">
              <i class="nav-icon fa-solid fa-calendar-days"></i>
              <p>
                Doctoe_Schedule_Table
              </p>
            </a>
          </li>
          <?php } ?>
          
          <li class="nav-item menu-open">
            <a href="appointment.php" class="nav-link active">
              <i class="nav-icon fa-solid fa-calendar-check"></i>
              <p>
                Appointment_Form
              </p>
            </a>
          </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">

        </div><!-- /.col -->
        <div class="col-sm-6">

        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">