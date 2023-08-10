<?php 
include 'connection.php';
session_start();
include 'auth.php';
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Samparksetu Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
  <style>
    td,th{
      text-align:center;
    }
    </style>
</head>

<body>
<div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="../../pages/forms/index.php"><img src="../../images/log1.png" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="../../pages/forms/index.php"><img src="../../images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
            </div></div> 
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">    
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
               
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
               
              </a>
              <a class="dropdown-item">
                
              </a>
            </div>
</li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">   
      </div>
      <div id="right-sidebar" class="settings-panel">
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">  
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">  
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
              </ul>
            </div>         
          </div>
        </div>
      </div>
      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="../../pages/forms/index.php">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Activity</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/forms/activity.php">Add Activity</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="ti-plus menu-icon"></i>
              <span class="menu-title">Magazine</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="../../pages/forms/magazine.php">Add Magazine</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="ti-briefcase menu-icon"></i>
              <span class="menu-title">Program</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/forms/program.php">Add Program</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Setu Person</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/forms/setuperson.php">Add Setu Person</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
              <i class="ti-hand-point-right menu-icon"></i>
              <span class="menu-title">Reports</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="error">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/forms/see_reports.php">Information</a></li>   
              </ul>
            </div>
          </li>
        </ul>
      </nav>
       <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
        <div class="container">
              <div class="card">
                <div class="card-body"><center>
                  <h4 class="card-title">Setu Person</h4>
                  <p class="card-description">
                   Information About Setu Person
                  </p>
                  <div class="table-responsive"><center>
                    <table class="table table-bordered">
                      <tbody> 
                        <?php
                         $id = $_POST['sname']; 
                              include 'connection.php';
                              $sql = "SELECT * FROM setu_person WHERE setu_id=$id";
                               $result = $conn->query($sql);
                               while($row = $result->fetch(PDO::FETCH_ASSOC)) {?>
                               <tr>
                                <th>
                         Name
                          </th>
                          <td>
                         <?php echo $row['setu_person_name']; ?>
                          </td>
                        </tr>
                        <tr>
                          <th>
                         Age
                          </th>
                          <td>
                         <?php echo $row['age']; ?>
                          </td>
                        </tr>
                        <tr>
                      <th>
                         Sex
                          </th>
                          <td>
                         <?php echo $row['sex']; ?>
                          </td>
                        </tr>
                      <tr>
                        <th>
                          Mobile Number
                          </th>
                          <td>
                         <?php echo $row['mobile_no']; ?>
                          </td>
                        </tr>
                        <tr>
                        <th>
                          Whatsapp number
                          </th>
                          <td>
                         <?php echo $row['wpmono']; ?>
                          </td>
                        </tr>
                        <tr>
                        <th>
                          EmailID
                          </th>
                          <td>
                         <?php echo $row['email']; ?>
                          </td>
                        </tr>
                         <tr>
                        <th>
                        Department  
                          </th>
                          <td>
                         <?php echo $row['department']; ?>
                          </td>
                        </tr>
                         <?php }?>
                       </tbody>
                        </table> <center> 
                </div>
                </div><center>
              </div>
          </div>
              </div> 
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
         
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>
