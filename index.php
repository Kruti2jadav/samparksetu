<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Sampark Setu</title>
    <link href="vendor/bootstrap.min.css" rel="stylesheet">
    <script src="vendor/jquery-3.4.1.min.js"></script>
    <script src="vendor/bootstrap.min.js"></script>
    <script src="vendor/sweetalert2.all.js"></script>
    <script>
        function hide()
        {
    document.getElementById("mono1").style.display="none";
    document.getElementById("wpmono1").style.display="none";
    document.getElementById("email1").style.display="none"; 
        }
        function mobiletype()
        {  
          var selectedvalue = document.getElementById('mobile').value;
          console.log(selectedvalue);
          if(selectedvalue=="smartphone")
          {
            document.getElementById("wpmono1").style.display="";
            document.getElementById("email1").style.display="";
            document.getElementById("mono1").style.display="";
          }
           else{
             document.getElementById("mono1").style.display="";
            document.getElementById("wpmono1").style.display="none";
            document.getElementById("email1").style.display="none";
           }
        }
        </script>
        <style>
 @media (max-width: 992px) {
  
    .login100-form {
      width: 50%;
    }
  }
  
  @media (max-width: 768px) {
     
    .login100-form {
      width: 100%;
    }
  }
  
  @media (max-width: 576px) {
    .login100-form {
      width: 100%;
    }
  }
          </style>
</head>
<body style="margin-top:40px;" onload="hide()">
 <div class="container" class="login100-form">
<form method="post" class="row g-3">
    <h2 style="text-align:center;">SamparkSetu Form</h2>
    <br/>
    <div class="col-md-6">
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Full Name" autocomplete="off" required>
  </div>
  <div class="col-md-6"> 
    <input type="number" class="form-control" id="age" name="age" placeholder="Enter Age" autocomplete="off" required>
  </div>  
  <div class="col-md-6">
   <select name="gender" id="gender" class="form-select">
    <option value=""hidden> Gender </option>
       <option value="male">Male</option>
  <option value="female">Female</option>
</select>
  </div>
<div class="col-md-6"> 
    <input type="text" class="form-control" id="faliyaname" name="faliyaname" placeholder="Enter Faliya Name" autocomplete="off" required>
  </div>
  <div class="col-md-6"> 
    <input type="text" class="form-control" id="mukam" name="mukam" placeholder="Enter Mukam" autocomplete="off" required>
  </div>
  <div class="col-md-6"> 
    <input type="text" class="form-control" id="post" name="post" placeholder="Enter Post" autocomplete="off" required>
  </div>
  <div class="col-md-6"> 
    <input type="text" class="form-control" id="taluko" name="taluko" placeholder="Enter Taluko" autocomplete="off" required>
  </div>
  <div class="col-md-6"> 
    <input type="text" class="form-control" id="dist" name="dist" placeholder="Enter District" autocomplete="off" required>
  </div>
  <div class="col-md-6"> 
    <input type="text" class="form-control" id="pincode" name="pincode" placeholder="Enter PinCode" autocomplete="off" required pattern="[0-9]{6}" title="Pincode must be 6 digit">
  </div>
  <div class=" col-md-6">  
    <input type="text" class="form-control" id="occupation" name="occupation" placeholder="Enter Occupation" autocomplete="off" required>
  </div>
  <div class=" col-md-6">
  <select class="form-select" name="mobile" id="mobile" onchange="mobiletype()" autocomplete="off" required>
  <option value="" disabled selected hidden>Select Mobile Type</option>
        <option value="ordinary" id="1">Ordinary</option> 
        <option value="smartphone" id="2">Smartphone</option> 
      </select> 
  </div>
<div class="col-md-6" id="mono1"> 
    <input type="text" class="form-control" id="mono" name="mono" placeholder="Enter mobile number" autocomplete="off" required pattern="[0-9]{10}" title="Mobile number must be of 10 digits">
  </div>
  <div class="col-md-6" id="wpmono1"> 
    <input type="text" class="form-control" id="wpmono" name="wpmono" placeholder="Enter whatsapp number" autocomplete="off"  pattern="[0-9]{10}" title="Whatsapp number must be of 10 digits">
  </div>
  <div class="col-md-6" id="email1"> 
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter emailid" autocomplete="off"  >
  </div>
  <div class="col-md-6">
  <select class="form-select" name="activity" id="activity1"  autocomplete="off" required>
  <option hidden>Helpful in which activities?</option>
    <?php 
                              include 'connection.php';
                              $sql = "SELECT * FROM activity";
                               $result = $conn->query($sql);
                               while($row = $result->fetch(PDO::FETCH_ASSOC)) {?>
    <option><?php echo $row['actname'];?></option>
            <?php }?> 
                               </select>
  </div>
  <div class="col-md-6" > 
    <input type="text" class="form-control" id="presentact" name="presentact" placeholder="Person Presently Involved In which Activity?" autocomplete="off" required>
  </div>
  <div class="col-md-6" >  
  <select class="form-select" name="magazine" id="magazine1" autocomplete="off" required>
  <option hidden>  Which magazine to be given?</option>
  <?php 
                              include 'connection.php';
                              $sql = "SELECT * FROM magazine";
                               $result = $conn->query($sql);
                               while($row = $result->fetch(PDO::FETCH_ASSOC)) {?> 
   <option><?php echo $row['magazine_name'];?></option>
            <?php }?> 
                               </select>
  </div>
  <div class="col-md-6">
  <select class="form-select" name="program" id="program1"  autocomplete="off" required>
  <option hidden> Invitation in which program?</option>
  <?php 
                              include 'connection.php';
                              $sql = "SELECT * FROM program";
                               $result = $conn->query($sql);
                               while($row = $result->fetch(PDO::FETCH_ASSOC)) {?> 
   <option value="<?php echo $row['program_name']; ?>"><?php echo $row['program_name'];?></option>
            <?php }?> 
                               </select>
  </div>
  <div class="col-md-6"> 
    <input type="text" class="form-control" id="setuname" name="setuname" placeholder="Enter name of setu person" autocomplete="off" required>
  </div>
  <div class="col-md-6"> 
  <input type="text" class="form-control" id="department" name="department" placeholder="Enter department name of setu person" autocomplete="off" required>
  </div>
  
  <div class="col-md-6"> 
    <input type="text" class="form-control" id="date" name="date" placeholder="Enter date of visit" onfocus="(this.type='date')" autocomplete="off" required>
  </div>
  <div class="col-md-6"> 
    <input type="text" class="form-control" id="operatername" name="operatername" placeholder="Enter name of data entry operator" autocomplete="off" required>
  </div>
  <input type="submit" class="btn btn-primary" name="save" value="Save">  
</form></div>
<?php 
try{
  if(isset($_POST['save']))
  {
    include 'connection.php';
   // echo "<script>alert('hii')</script>";
   $name = $_POST['name'];
$age = $_POST['age'];
$sex = $_POST['gender'];
$faliyaname = $_POST['faliyaname'];
$mukam= $_POST['mukam'];
$post= $_POST['post'];
$taluko = $_POST['taluko'];
$dist = $_POST['dist'];
$pincode = $_POST['pincode'];
$occupation = $_POST['occupation'];
$mono = $_POST['mono'];
$wpmono = $_POST['wpmono'];
$email = $_POST['email'];
$activity = $_POST['activity'];
$presentact = $_POST['presentact'];
$magazine = $_POST['magazine'];
$program = $_POST['program'];
$setuname = $_POST['setuname'];
$dname = $_POST['department'];
$date = $_POST['date'];
$operatorname = $_POST['operatername'];
//echo $program;
$que = "SELECT * FROM sampark_form WHERE fullname='$name' AND mobileno='$mono'";
$result = $conn->query($que);
$row_count=$result->rowCount();
if($row_count==0){
  $sql = "INSERT IGNORE INTO sampark_form(fullname,age,sex,faliyu,mukam,post,taluko,district,pincode,occupation,mobileno,whatsappno,emailid,activity,present_activity,magazine,program,setuperson_name,department,visit_date,name_operator) VALUES('$name',$age,'$sex','$faliyaname','$mukam','$post','$taluko','$dist','$pincode','$occupation','$mono','$wpmono','$email','$activity','$presentact','$magazine','$program','$setuname','$dname','$date','$operatorname')";
  if($conn->exec($sql))
  {
  echo "<script>
     Swal.fire({
    icon:'success',
    text:' Added Successfully'
    })</script>" ;
    
  }
}
else{
echo "<script>
Swal.fire({
icon:'error',
text:'Already Exixts '
})</script>" ;
}}}
catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?>
</body>
</html>