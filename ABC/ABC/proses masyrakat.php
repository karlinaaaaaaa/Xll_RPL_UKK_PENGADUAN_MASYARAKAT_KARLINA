<?php 

session_start();

include('conn.php');

$usn = $_POST['username'];
$Pwd = $_POST['password'];     

$query = $conn->query("SELECT * FROM petugas WHERE username='$usn',  AND password='$pwd'");
$data = $query->fetch();

if($query->rowCount() > 0){
  
  if($data['level']=="admin"){

  

    $_SESSION["password"] = $_POST['password'];
    $_SESSION["username"] = $_POST['username'];
    header("location:masyrakat.php");
   }else
    header("location:home.php");
  }                                            