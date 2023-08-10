
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Sampark Setu</title>
    <link href="vendor/bootstrap.min.css" rel="stylesheet">
    <script src="vendor/jquery-3.4.1.min.js"></script>
    <script src="vendor/bootstrap.min.js"></script>
    <script src="vendor/sweetalert2.all.js"></script>
    </script>
</head>
<body style="margin-top:40px;">
<center>
 <div class="container">
<form method="post" class="row g-3">
    <h2 style="text-align:center;">Login</h2>
    <br/>
    <div class="col-md-12">
    <input type="email" class="form-control" id="uname" name="uname" placeholder=" EmailID" required
    autocomplete="off">
  </div>
  <div class="col-md-12">
  <input type="password" placeholder="Password" id="upassword" name="upassword" autocomplete="off"required pattern="(?=.*\d)(?=.[a-z])(?=.*[A-Z]).{8}" title="Must contain at least one number and one uppercase and lowercase letter, and 8 characters" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary" name="login">Login</button>
</form>
</div></center>

<?php 
try{
    include 'connection.php';
        if(isset($_POST['login']))
  {
    $name = $_POST['uname'];
    $pass = $_POST['upassword'];
 //echo $name,$pass;
    $sql = "SELECT * FROM admin1 WHERE adminname='$name' AND adminpassword='$pass'";
  //  echo $sql;
    $result = $conn->query($sql);
    $row_count=$result->rowCount();
if($row_count!==0){
   while($row = $result->fetch(PDO::FETCH_ASSOC)) {
    session_start();
                    $_SESSION["adminid"] = $row['adminid'];
                    $_SESSION["adminemailid"] = $row['adminname'];
                    header('location:template/pages/forms/index.php');
      }}
else{
    echo "<script>
    Swal.fire({
    icon:'error',
    text:'Invalid username or password'
    })</script>";
}
}}
      
      catch(PDOException $e) {
        echo "msg:" . "<br>" . $e->getMessage();
      }
 ?>
</body>
</html>
