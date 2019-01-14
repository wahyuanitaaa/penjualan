<?php

	include "db.php";

	session_start();

	$username = $_POST['username'];
	$password = $_POST['password'];


	$data = mysqli_query($koneksi,"select * from admin 
	where username='$username' and password='$password'");

	$cek = mysqli_num_rows($data);

	if($cek > 0)
	{
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		header("location:index.php");
	}
	else
	{
		echo "Login Gagal <br>";
		echo "<a href='login.html'>KEMBALI</a>";
	}
?>