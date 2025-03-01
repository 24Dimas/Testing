<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$pppoe = $_POST['pppoe'];
$pass = $_POST['pass'];
$name = $_POST['name'];

 
// menginput data ke database
mysqli_query($koneksi,"insert into user_login values('','$pppoe','$pass','$name')");
 
// mengalihkan halaman kembali ke index.php
header("location:tables.php");
 
?>