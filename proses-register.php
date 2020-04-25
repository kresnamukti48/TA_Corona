<?php

include 'koneksi.php';

if(isset($_POST['register']))
{
	$nama_admin  = $_POST['nama_admin'];
	$username 	 = $_POST['username'];
	$password	 = $_POST['password'];

	$sql = "INSERT INTO admin (nama_admin, username, password) VALUES ('$nama_admin', '$username', '$password')";
	$res = mysqli_query($koneksi, $sql);
	$count = mysqli_affected_rows($koneksi);

	if ($count == 1) {
		echo "<script>alert('Regristrasi Berhasil! Silahkan Login.');window.location='login.php';</script>";
	}
	else{
		header("Location: register.php");
	}

}
else{
	header("Location: register.php");
}



  ?>