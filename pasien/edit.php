<?php

session_start();

if(!isset($_SESSION['username'])){
    header("location : ../login.php");

}
include '../aset/font.php';
include '../aset/footer.php';
include '../koneksi.php';
$id_pasien = $_GET["id_pasien"];

$query = mysqli_query($koneksi, "SELECT * FROM pasien INNER JOIN status ON 
         pasien.id_status = status.id_status WHERE id_pasien = '$id_pasien'");

$pasien = mysqli_fetch_assoc($query);
?>

<br>
<br>
<div class="container justify-content-center align-content-center">
	<div class ="row mt-4">
		<div class="col-md">
			<center>
			<div class="card" style="width: 100%;">
				<div class="card-header" style="width:100%;">
					<h2 class="card-tittle"><i class="fad fa-user-edit"> </i> Edit Pasien</h2>
				</div>
				<div class="card-body">
					<form class="form-horizontal" method="post" action="proses-edit.php">

                <input type="hidden" name="id_pasien" value="<?= $pasien['id_pasien']; ?>">

          			<div class="form-group">
            			<label class="col-md-4 control-label">Nama</label>
            		<div class="col-md-6">
              			<input type="text" class="form-control" name="nama" value="<?= $pasien['nama']; ?>" disabled="">
            	</div>
          	</div>

          	          <div class="form-group">
            			<label class="col-md-4 control-label">Alamat</label>
            		<div class="col-md-6">
              			<input type="text" class="form-control" name="alamat" value="<?= $pasien['alamat']; ?>" disabled="" >
            	</div>
          	</div>

          			<div class="form-group">
            			<label class="col-md-4 control-label">Suhu</label>
            		<div class="col-md-6">
              			<input type="text" class="form-control" name="suhu" value="<?= $pasien['suhu']; ?>">
            	</div>
          	</div>

          			<div class="form-group">
            			<label class="col-md-4 control-label">Status</label>
            		<div class="col-md-6">
              			<select class="form-control" style="width: 200px" name="id_status">


                       <?php

                        $query = mysqli_query($koneksi,"SELECT * FROM status");
                        while($status = mysqli_fetch_assoc($query)):

                       ?>

                       <option value="<?php echo $status['id_status'];?>"><?php echo $status['status']; ?></option>

                <?php
                  endwhile;
                ?>
              </select>
            	</div>
          	</div>

              <div class="form-group">
                  <label class="col-md-4 control-label">Tanggal Cek</label>
                <div class="col-md-6">
                    <input type="date" class="form-control" name="tanggal" value="<?= $pasien['tanggal']; ?>">
              </div>
            </div>



 						<button type="submit" name="simpan" class="btn  btn-primary">Simpan</button>

        </form>
	
				</div>
			</div>
		</div>
	</div>
</div>	
			</center>