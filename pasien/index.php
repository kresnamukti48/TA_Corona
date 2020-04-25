<?php

session_start();

if(!isset($_SESSION['username'])){
    header("location : ../login.php");

}
include '../koneksi.php';
?>

<?php
$sql = "SELECT * FROM pasien ORDER BY nama";

$res = mysqli_query($koneksi, $sql);

$pasien = array();

while ($data = mysqli_fetch_assoc($res)) {
  $pasien[] = $data;
}
?>


<?php
include '../aset/font.php';
?>

<br>
<br>

<div class="container">
	<div class="row mt-4">
		<div class="col-md">
			
		</div>
	</div>
</div>

<div class="card">
  <div class="card-header">
    <center>
    <h2 class="card-title"><i class="fas fa-hospital-user"></i> Data Pasien
    </h2></center>

    <center>
      <a href="tambah.php"><i class="fad fa-users-medical"></i> Tambah</a>
    </center>

  </div>
  <div class="card-body">
  	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Pasien</th>
      <th scope="col">Alamat</th>
      <th scope="col">Suhu</th>
      <th scope="col">Status</th>
      <th scope="col">Tanggal Terakhir Cek</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  	<?php
  		$no = 1;
  		foreach ($pasien as $p ) {
  		?>

  		<tr>
  			<th scope = "row"><?= $no ?></th>
  			<td><?= $p['nama'];?></td>
  			<td><?= $p['alamat'];?> </td>
  			<td><?= $p['suhu'];?></td>
  			<td>
  				<?php
  				if($p['id_status'] == 1){
  					echo '<h5><span class ="badge badge-info">ODP</span></h5>';
  				}
  				else if($p['id_status'] == 2){
  					echo '<h5><span class ="badge badge-warning">PDP</span></h5>';
  				}
          else if($p['id_status'] == 3){
            echo '<h5><span class ="badge badge-danger">Positif</span></h5>';
          }
          else if($p['id_status'] == 4){
            echo '<h5><span class ="badge badge-success">Sembuh</span></h5>';
          }
  				?>
  				
  			</td>
        <td>
          <?= date('d F Y', strtotime($p['tanggal'])); ?>
        </td>
  			<td>
  				<a href="detail.php?id_pasien=<?= $p['id_pasien'] ?>  " class="badge badge-success">Detail</a>
				<a href="edit.php?id_pasien=<?= $p['id_pasien'] ?>" class="badge badge-warning">Edit</a>
				<a href="hapus.php?id_pasien=<?= $p['id_pasien'] ?>" class="badge badge-danger">Hapus</a>
  			</td>

  		</tr>

  		<?php
  			$no++;
  		}
  		?>
  	

    
  </tbody>
</table>
  </div>
</div>

<center>
<a href="../setelahlogin/index.php" class="badge badge-primary">Kembali ke home</a>
</center>

<?php
include '../aset/footer.php';
?>