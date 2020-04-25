<?php

session_start();

include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];


$query = "SELECT * FROM admin WHERE username = '$username' and password = '$password' ";
$hasil = mysqli_query($koneksi,$query);

$cek = mysqli_num_rows($hasil);

if ($cek > 0) {

	$data = mysqli_fetch_array($hasil);
	$_SESSION['username'] = $username;

	header("Location: setelahlogin/index.php");

} else {
	echo "<script type='text/javascript'>window.alert('Username / Password salah! Silahkan coba lagi');window.location.href='login.php';</script>";
}
?>