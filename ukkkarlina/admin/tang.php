<?php

session_start();
$db = mysqli_connect("localhost","root","","pengaduan_masyarakat");

$result = mysqli_query($db, "SELECT * FROM pengaduan");

// if(isset($_GET['caper'])){
//   $z = $_GET['caper'];
//   $result =mysqli_query($db,"SELECT * FROM pengaduan ORDER BY `$z` ASC");}


// var_dump($result);
?>
<!DOCTYPE html>
<html lang="en">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<head>

    <title>admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
      @media print{
        .kolom_aksi,#button_print{
          displey: none;
        }
      }
      </style>
</head>
<body style="background:grey;">
    <div class="container mt-5">
    <h1 class="text-black">masyarakat</h1>
    <div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
    <li class="nav-item">
        <a class="nav-link text-dark" href="home.php">home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="tang.php">tanggapi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="kaluar.php">logout</a>
      </li>
    </ul>
  </div>
</div>
<div class="container">
<!-- <div class="card">
        <div class="row fw-bold card-body">
          <form>
            <div class="row">
            <div class="container mt-4">
        <div class="row fw-bold">
          <form>
            <div class="row">  
                <div class="col-auto">
                <span class="text-dark fs-4">Sort By :</span>
             </div>
             <div class="col-auto">
                  <select name="caper" class="form-control" style="width:120px" id="">
                    <option value="tgl_pengaduan">Tanggal</option>
                    <option value="status">status</option>
                  </select>
             </div> -->
    <div class="card my-4 mt-3">
    <div class="d-grip gap-2 col-12 mt-2">
    <button class="btn btn-warning" id="button_print">print</button>
    <div class="container mt-5">
    <table class="table table-light table-hover table-borderless">
  <thead>
    <tr style="text-align:center;">
      <th scope="col">No</th>
      <th scope="col">id_pengaduan</th>
      <th scope="col">tgl_pengaduan</th>
      <th scope="col">nik</th>
      <th scope="col">isi_laporan</th>
      <th scope="col">foto</th>
      <th scope="col">status</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <?php $i=1;?>
  <?php while($row = mysqli_fetch_assoc($result)):?>
  <tbody>
    <tr class="text-center">
      <th scope="row"><?= $i ?></th>
      <td><?=$row['id_pengaduan'];?></td>
      <td><?=$row['tgl_pengaduan'];?></td>
      <td><?=$row['nik'];?></td>
      <td><?=$row['isi_laporan'];?></td>
      <td><img src="img/<?=$row['foto']; ?>" width="100" height="100" style="border-radius: 10px;" /></td>
      <td><?=$row['status'];?>
    </td>
    <td>
    <a href="tanggapan.php?id_pengaduan=<?=$row['id_pengaduan'];?>" class="btn btn-sm btn-success ml-auto">tanggapi</a>
    </td>
    <?php endwhile ?>
    </tbody>
    <?php $i++; ?>
    </table>
    <script>
      var button_print = document.getElementById('button_print');
      button_print.addEventListener('click',function(){
        window.print();
      });
      </script>
</body>
</html>