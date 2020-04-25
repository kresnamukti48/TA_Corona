<?php

include '../koneksi.php';

if(isset($_POST['simpan']))
{
	$nama 		 = $_POST['nama'];
	$alamat 	 = $_POST['alamat'];
	$suhu		 = $_POST['suhu'];
	$id_status 	 = $_POST['id_status'];
	$tanggal	 = $_POST['tanggal'];

	$sql = "INSERT INTO pasien (nama, alamat, suhu, id_status, tanggal) VALUES ('$nama', '$alamat', '$suhu', '$id_status', '$tanggal')";
	$res = mysqli_query($koneksi, $sql);
	$count = mysqli_affected_rows($koneksi);

	if ($count == 1) {
		echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
	}
	else{
		header("Location: tambah.php");
	}

}
else{
	header("Location: tambah.php");
}



  ?>