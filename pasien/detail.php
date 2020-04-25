<?php
include '../aset/font.php';
include '../koneksi.php';

$id_pasien = $_GET['id_pasien'];

$sql = "SELECT * FROM pasien where id_pasien = '$id_pasien'";
$res = mysqli_query($koneksi,$sql);
$detail = mysqli_fetch_assoc($res);

?>

<div class="container justify-content-center align-content-center">
	<div class="row mt-5">
		<div class="col-md-7 mx-auto">
			<center><h2>Detail Peminjaman</h2></center>
			<hr class="bg-light">
			<center>
			<table class="table table-bordered">
				<tr>
					<td><strong>Nama Pasien</strong></td>
					<td><?=$detail['nama']?></td>
				</tr>
				<tr>
					<td><strong>Alamat</strong></td>
					<td><?=$detail['alamat']?></td>
				</tr>
				<tr>
					<td><strong>Suhu Tubuh</strong></td>
					<td><?=$detail['suhu']?></td>
				</tr>
				<tr>
					<td><strong>Status</strong></td>
					<td>
						<?php
  						if($detail['id_status'] == 1){
  							echo '<h5><span class ="badge badge-info">ODP</span></h5>';
  						}
  						else if($detail['id_status'] == 2){
  							echo '<h5><span class ="badge badge-warning">PDP</span></h5>';
  						}
          				else if($detail['id_status'] == 3){
          					  echo '<h5><span class ="badge badge-danger">Positif</span></h5>';
         				 }
          				else if($detail['id_status'] == 4){
          					  echo '<h5><span class ="badge badge-success">Sembuh</span></h5>';
         				 }
  						?>
					</td>
				</tr>
				<tr>
					<td><strong>Tanggal Cek</strong></td>
					<td><?=date('d F Y', strtotime($detail['tanggal']))?></td>
				</tr>
				<tr>
					<td class="center" colspan="2">
						<center>
						<a href="index.php" class="badge badge-dark">Kembali</a>
						</center>
					</td>
				</tr>

			</table>
		</center>
		</div>
	</div>
</div>
