<?php 
 
//$koneksi = mysqli_connect("server","user","sandi","database");
$koneksi = mysqli_connect("localhost","root","","pencatatan_penjualan");
 
// cek koneksi
if (mysqli_connect_errno())
{
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>