<?php

session_start();


$username = $_POST['username'];
$password = $_POST['password'];

$koneksi = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat",'root','');
$query = $koneksi->query("SELECT * FROM `petugas` WHERE username='$username' AND password='$password'")->fetchAll();
 
if($query){
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['id_petugas'] = $query['id_petugas'];

header ("location:home.php"); 
}