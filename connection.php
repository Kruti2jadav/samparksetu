<?php
//header('Access-Control-Allow-Origin : http://localhost:3000');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "samparksetu";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
     
}
catch(PDOException $e) {
    echo "msg:" . "<br>" . $e->getMessage();
  }
  ?>
