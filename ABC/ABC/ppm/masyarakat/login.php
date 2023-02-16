<?php

session_start();

$nik = $_POST['nik'];
$username = $_POST['username'];
$password = $_POST['password'];

$db = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat",'root','');
$query = $db->query("INSERT INTO `masyarakat`VALUES ('','$nik','$username','$password')");
 
if($query){
header ("location:loginf.php");
}