<?php

session_start();

//if(isset($_SESSION['username'])){
 //header("location:login.php");
 //}

   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .box{
            height: 262px;
            width: 1110; 
        }
    </style>
</head>
<body style="background:grey">
    <div class="container mt-5">
    <h1 class="text-black">LAPORAN PENGADUAN</h1>
    <h4 class="text-black">pengaduan masyarakat</h4>
    <div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link text-dark" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="masyrakat.php">masyrakat</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="petugas.php">petugas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="logout.php">logout</a>
      </li>
  </div>
</div>
<div class="container mt-3 text-center">
    <div class="box border border-light bg-white">
        <h4 class="mt-5">Selamat Datang</h4>
    </div>
</div>
</body>
</html>