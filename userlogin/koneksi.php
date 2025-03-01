<?php 
$koneksi = mysqli_connect("localhost","aryamedi_user","syfrlardi1@","aryamedi_gudang");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>