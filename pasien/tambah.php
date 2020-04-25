<?php

session_start();

if(!isset($_SESSION['username'])){
    header("location : ../login.php");

}
include '../aset/font.php';
include '../aset/footer.php';
include '../koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM status");
?>

<br>
<br>
<div class="container">
	<div class ="row mt-4">
		<div class="col-md">
			<center>
			<div class="card" style="width: 100%;">
				<div class="card-header" style="width:100%;">
					<h2 class="card-tittle"><i class="fad fa-user-plus"> </i>Tambah Data Pasien</h2>
				</div>
				<div class="card-body">
					<form class="form-horizontal" method="post" action="proses-tambah.php">


          			<div class="form-group">
            			<label class="col-md-4 control-label">Nama</label>
            		<div class="col-md-6">
              			<input type="text" class="form-control" name="nama">
            	</div>
          	</div>

          	          <div class="form-group">
            			<label class="col-md-4 control-label">Alamat</label>
            		<div class="col-md-6">
              			<input type="text" class="form-control" name="alamat" >
            	</div>
          	</div>

          			<div class="form-group">
            			<label class="col-md-4 control-label">Suhu</label>
            		<div class="col-md-6">
              			<input type="text" class="form-control" name="suhu">
            	</div>
          	</div>

          			<div class="form-group">
            			<label class="col-md-4 control-label">Status</label>
            		<div class="col-md-6">
              			<select class="form-control" style="width: 200px" name="id_status">
                
                      <option value="">-- Pilih Status --</option>

                       <?php

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
                    <input type="date" class="form-control" name="tanggal">
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