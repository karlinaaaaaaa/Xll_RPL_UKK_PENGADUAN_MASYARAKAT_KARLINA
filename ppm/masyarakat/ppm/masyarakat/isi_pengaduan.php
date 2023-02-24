<!DOCTYPE html>
<html lang="en">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<head>
    <title>isi pengaduan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <h1 class="text-white">L A P O R A N    P E N G A D U A N</h1>
    <h4 class="text-white">laporan pengaduan</h4>
    <div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
    <li class="nav-item">
        <a class="nav-link text-dark" href="pengaduan.php">lihat pengaduan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="isi pengaduan.php">isi pengaduan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="pengaduan.php">kembali</a>
      </li>
    </ul>
  </div>
</div> 
<div class="col">
    <div style="padding: 10px;">
        <form action="peng.php"  method="POST">
        <div class="">
    <h3 class="text-white">Isi Laporan</h3>
</div>
        <div class="container mt-2">
            <div class="mb-3">
               <label for="exampleFormControlInput1" class="form-label fw-bold text-white">Tanggal</label>
                <input type="date" name="tgl_pengaduan" class="form-control" style="width: 30%;" placeholder="Tanggal">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label fw-bold text-white">Isi Laporan</label>
                <textarea type="text" name="isi_laporan" placeholder="Silahkan Disini......." class="form-control"  rows="5"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label fw-bold text-white">Foto</label>
                <input type="file" name="foto" class="form-control" style="width: 30%;" >
            </div>
            <div class="text-end mt-3"> 
                <button type="submit" class="btn btn-primary px-3 mb-3 fw-bold" style="width: 100px;">Selesai</button> `
            </div>
        </div>
</form>
</div>
</div>
</div>
</body>
</html>