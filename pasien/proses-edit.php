<?php
include '../koneksi.php';

if(isset($_POST['simpan'])) {
	$id_pasien	= $_POST['id_pasien'];
	$suhu		= $_POST['suhu'];
	$id_status	= $_POST['id_status'];
	$tanggal	= $_POST['tanggal'];


	$sql="UPDATE pasien SET suhu='$suhu', id_status='$id_status', tanggal='$tanggal' WHERE id_pasien= $id_pasien";

	$res 	= mysqli_query($koneksi, $sql);
	$count	= mysqli_affected_rows($koneksi);

	if($res > 0){
		echo "<script>alert('Data berhasil diedit.');window.location='index.php';</script>";
	}
}