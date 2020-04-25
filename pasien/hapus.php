<?php

include '../koneksi.php';
$id_pasien = $_GET["id_pasien"];

$query = "DELETE FROM pasien WHERE id_pasien = '$id_pasien' ";
$pasien = mysqli_query($koneksi,$query);


	echo "<script>alert('Data berhasil dihapus.');window.location='index.php';</script>";
	


?>