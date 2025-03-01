<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$name = $_POST['name'];
$pppoe = $_POST['pppoe'];
$pass = $_POST['pass'];

 
// update data ke database
mysqli_query($koneksi,"update user_login set pppoe='$pppoe', pass='$pass', name='$name' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:tables.php");
 
?>