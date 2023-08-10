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
    <script>
   function hide()
        {
            document.getElementById('village').style.display="";
            document.getElementById('villagesetu').style.display="none";
            document.getElementById('setu').style.display="none";
            document.getElementById('activity').style.display="none";
           document.getElementById('program').style.display="none";
            document.getElementById('magazine').style.display="none";
            document.getElementById('setupersoninfo').style.display="none";
            document.getElementById('total').style.display="none";
        }
        function reportvalue()
        {  
          var selectedvalue = document.getElementById('report').value;
          console.log(selectedvalue);
         if(selectedvalue=="1")
          {
            document.getElementById('village').style.display="";
            document.getElementById('villagesetu').style.display="none";
            document.getElementById('setu').style.display="none";
            document.getElementById('activity').style.display="none";
             document.getElementById('program').style.display="none";
             document.getElementById('magazine').style.display="none";
            document.getElementById('setupersoninfo').style.display="none";
            document.getElementById('total').style.display="none";
          }
          if(selectedvalue=="2")
          {
            document.getElementById('village').style.display="none";
            document.getElementById('villagesetu').style.display="";
            document.getElementById('setu').style.display="none";
            document.getElementById('activity').style.display="none";
             document.getElementById('program').style.display="none";
            document.getElementById('magazine').style.display="none";
             document.getElementById('setupersoninfo').style.display="none";
            document.getElementById('total').style.display="none";
          }
          if(selectedvalue=="3")
          {
            document.getElementById('village').style.display="none";
            document.getElementById('villagesetu').style.display="none";
            document.getElementById('setu').style.display="";
            document.getElementById('activity').style.display="none";
            document.getElementById('program').style.display="none";
             document.getElementById('magazine').style.display="none";
             document.getElementById('setupersoninfo').style.display="none";
            document.getElementById('total').style.display="none";
          }
          if(selectedvalue=="4")
          {
            document.getElementById('village').style.display="none";
            document.getElementById('villagesetu').style.display="none";
            document.getElementById('setu').style.display="none";
            document.getElementById('activity').style.display="";
            document.getElementById('program').style.display="none";
            document.getElementById('magazine').style.display="none";
            document.getElementById('setupersoninfo').style.display="none";
            document.getElementById('total').style.display="none";
          }
          if(selectedvalue=="5")
          {
            document.getElementById('village').style.display="none";
            document.getElementById('villagesetu').style.display="none";
            document.getElementById('setu').style.display="none";
            document.getElementById('activity').style.display="none";
            document.getElementById('program').style.display="";
             document.getElementById('magazine').style.display="none";
             document.getElementById('setupersoninfo').style.display="none";
             document.getElementById('total').style.display="none";
          }
          if(selectedvalue=="6")
          {
            document.getElementById('village').style.display="none";
            document.getElementById('villagesetu').style.display="none";
            document.getElementById('setu').style.display="none";
            document.getElementById('activity').style.display="none";
            document.getElementById('program').style.display="none";
             document.getElementById('magazine').style.display="";
            document.getElementById('setupersoninfo').style.display="none";
            document.getElementById('total').style.display="none";
          }
          if(selectedvalue=="7")
          {
            document.getElementById('village').style.display="none";
            document.getElementById('villagesetu').style.display="none";
            document.getElementById('setu').style.display="none";
            document.getElementById('activity').style.display="none";
            document.getElementById('program').style.display="none";
             document.getElementById('magazine').style.display="none";
            document.getElementById('setupersoninfo').style.display="";
             document.getElementById('total').style.display="none";
          }
          if(selectedvalue=="8")
          {
            document.getElementById('village').style.display="none";
            document.getElementById('villagesetu').style.display="none";
            document.getElementById('setu').style.display="none";
            document.getElementById('activity').style.display="none";
            document.getElementById('program').style.display="none";
             document.getElementById('magazine').style.display="none";
            document.getElementById('setupersoninfo').style.display="none";
             document.getElementById('total').style.display="";
          }
        }

        
          </script> 
  </head>
<body onload="hide()">
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
                  <h4 class="card-title">Sampark Person</h4>
                  <p class="card-description">
                   Information About Sampark Person And Setu Person
                  </p>
                  <form method="post">
                 <label for="report" class="form-label">Reports:</label> </center>
               <select class="form-control" name="report" id="report" onchange="reportvalue()">
                <option value="1">Villagewise</option>
                <option value="2">Village and setu person wise</option>
                <option value="3">Setu person wise</option>
                <option value="4">Activity wise</option>
                <option value="5">Program wise</option>
                <option value="6">Magazine wise</option>
                <option value="7">Setu persone information</option>
                <option value="8">Total number of sampark person village wise</option>
                 </select> <br/>
               </form>

               <div class="table-responsive"  id="village">  
                <table class="table table-striped">
                <form method="post" action="villagewise.php">
                      <tr>
                 <td>  <input type="text" class="form-control"  placeholder="Enter village name to search" name="village" required autocomplete="off"> </td>
            <td>  <input type="submit" value="Search" name="search" class="btn btn-info" style="margin-right:20px"> </td>
       </tr>
       </form>   </table> 
                </div>
                <div class="table-responsive" id="villagesetu"> <center>
                 <table class="table table-striped">
                 <form method="post" action="villagesetu.php">
                      <tr>
                 <td>  <input type="text" class="form-control"  placeholder="Enter village name to search" name="village1" required autocomplete="off"> </td>
                 <td>  <input type="text" class="form-control"  placeholder="Enter setu person name to search" name="setuperson" id="setuperson"required autocomplete="off"> </td>
            <td>  <input type="submit" value="Search" name="search1" class="btn btn-info" style="margin-right:20px"> </td>
       </tr></form>
      </table>
      </center>
                </div>
                <div class="table-responsive" id="setu"> <center>
                 <table class="table table-striped">
                 <form method="post" action="setu.php">
                      <tr>
                   <td>  <input type="text" class="form-control"  placeholder="Enter setu person name to search" name="setuperson1" id="setuperson" required autocomplete="off"> </td>
            <td>  <input type="submit" value="Search" name="search3" class="btn btn-info" style="margin-right:20px"> </td>
       </tr></form>
      </table></center>
      </div>
      <div class="table-responsive" id="activity"> <center>
                 <table class="table table-striped">
                 <form method="post" action="actiview.php">
                      <tr>
                   <td>  <input type="text" class="form-control"  placeholder="Enter activity name to search" name="activity" id="activity" required autocomplete="off"> </td>
            <td>  <input type="submit" value="Search" name="search4" class="btn btn-info" style="margin-right:20px"> </td>
       </tr></form>
      </table></center>
      </div>
      <div class="table-responsive" id="program"> <center>
                 <table class="table table-striped">
                 <form method="post" action="progview.php">
                      <tr>
                   <td>  <input type="text" class="form-control"  placeholder="Enter program name to search" name="program" id="program" required autocomplete="off"> </td>
            <td>  <input type="submit" value="Search" name="search5" class="btn btn-info" style="margin-right:20px"> </td>
       </tr></form>
      </table></center>
      </div>
      <div class="table-responsive" id="magazine"> <center>
                 <table class="table table-striped">
                 <form method="post" action="magview.php">
                      <tr>
                   <td>  <input type="text" class="form-control"  placeholder="Enter magazine name to search" name="magazine" id="magazine" required autocomplete="off"> </td>
            <td>  <input type="submit" value="Search" name="search6" class="btn btn-info" style="margin-right:20px"> </td>
       </tr></form>
      </table></center>
      </div>
      <div class="table-responsive" id="setupersoninfo"> <center>
      <table class="table table-striped">
                      <tbody>
                        <tr><form method="post" action="moreinfosetuperson.php">
                               <td>
                               <select class="form-control" name="sname" id="sname">
                               <?php 
                              include 'connection.php';
                              $sql = "SELECT * FROM setu_person";
                               $result = $conn->query($sql);
                               while($row = $result->fetch(PDO::FETCH_ASSOC)) {?>
        <option value="<?php echo $row['setu_id']; ?>"><?php echo $row['setu_person_name']; ?></option><?php }?> 
      </select>
                          </td>    
                          <td>
                            <button type="submit" class="btn btn-info" >More Info</button>
                               </form>
                          </td>
                        </tr>
                        
                        </tbody>
                        </table>     </center>
      </div>
      <div class="table-responsive" id="total"> <center>
                    <table class="table table-bordered">
                      <thead>
                        <tr> 
                        <th>
                        Total sampark person
                               </th>
                        <th>
                        Village
                          </th>
                         </tr>
                      </thead>
                      <tbody>
                        <tr>
                        <?php 
                              include 'connection.php';
                              $sql = "SELECT mukam,COUNT(*) AS total FROM sampark_form GROUP BY mukam";
                               $result = $conn->query($sql);
                               while($row = $result->fetch(PDO::FETCH_ASSOC)) {?>
                               <td>      
                         <?php echo $row['total']; ?>
                          </td>    
                          <td>      
                         <?php echo $row['mukam']; ?>
                          </td>  
                        </tr>
                         <?php }?>
                        </tbody>
                        </table>  </center>
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
