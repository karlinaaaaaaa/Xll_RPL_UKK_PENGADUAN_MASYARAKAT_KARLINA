<?php
session_start();
$db = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat", 'root', '');
$query = $db->query("SELECT * FROM pengaduan ");
$data = $query->fetch();
//cek apakah session ada atau tidak
// if (isset($_SESSION['nama'])) {
//     header("location:loginf.php");
// }
// ?>
<style>
    body {
        background-image: url();
        background-size: cover;

    }
</style>
<title>Pengaduan Masyarakat - Edit Data</title>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
< <div class="Kotak_isi">
        <table border="1" align="center" width="50%" height="40%">
        <form action="update.php?id_pengaduan=<?= $_GET['id_pengaduan'] ?>" method="POST">
                <td>
                    <table align="center">
                    <tr>
                        <td>tanggal</td>
                            <td><input type="date" name="tgl_pengaduan" required></td>
                        </tr>
                        <tr>
                            <td>isi laporan</td>
                            <td><input type="text" name="isi_laporan" required></td>
                        </tr>
                        <tr>
                        <td>foto</td>
                        <td><div class="mb-3">
                        <label for="formFileSm" class="form-label"></label>
                        <input class="form-control form-control-sm" id="formFileSm" type="file">
                        </div></td>
                    </tr>
                        <tr>
                        <td><div class="mb-3">
                            <label for="status" class="form-label">Status:</label>
                            <select name="status" id="status">
                            <option value="proses">Proses</option>
                            <option value="selesai">Selesai</option>
                        </select>
                        </tr>
                        
                        <tr>
                            <td><td align="right">
                            <div class="text-end">

                                <button class="btn btn-primary">Simpan</button>
                                </a>
                            </div>
                        </td></td>
                           
                        </tr>
                       
                    </table>
                     
            </form>
            </td>
        </table>
</body>
</html>