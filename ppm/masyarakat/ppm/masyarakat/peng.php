<?php 

session_start();

//$id = $_POST['id_pengaduan'];
$tgl = $_POST['tgl_pengaduan'];
$nik = "012";
$isi = $_POST['isi_laporan'];
$foto = $_POST['foto'];
$status = '0';

$db = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat","root","");
$query = $db->query("INSERT INTO `pengaduan` VALUES (, '$tgl', '$nik', '$isi', '$foto','$status')");

if($query){
    header('location:pengaduan.php');
}