<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "pengaduan_masyarakat";

$koneksi = mysqli_connnect($server,$username,$password,$dbname) or die("koneksi ke data");