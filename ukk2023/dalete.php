<?php

session_start();

$koneksi = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat",'root','');
$query = $koneksi->query("DELETE FROM `masyarakat` WHERE `nik`= '$nik'");


{
    header("location:masyarakat.php");
}