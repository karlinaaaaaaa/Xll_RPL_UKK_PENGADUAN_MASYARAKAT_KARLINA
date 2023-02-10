<?php 

//session_start();
//$username = $_POST['username'];
//$password = $_POST['password'];     

$koneksi = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat","root","");
$query = $koneksi->query("SELECT * FROM login WHERE username='$username' AND password='$password   '");
//if($query->rowCount() > 0){
   //();

    $_SESSION["password"] = $_POST['password'];
    $_SESSION["username"] = $_POST['username'];
    header("location:from login.php");
   //}else{
    header("location:home.php");
   //}                                            