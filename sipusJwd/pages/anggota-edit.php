<?php
	$id_anggota=$_GET['id'];
	$q_tampil_anggota=mysqli_query($db,"SELECT * FROM tbanggota WHERE idanggota='$id_anggota'");
	$r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota);
?>

<div class="container">
	<div class="container">
		<h2 class="px-5 pb-4 fw-bold">Edit Data Anggota</h2>
		<div class="container-fluid px-5">
			<form action="proses/anggota-input-proses.php" method="post">
				<div class="mb-3 row">
					<label for="inputIdAnggota" class="col-sm-2 col-form-label">ID Anggota</label>
					<div class="col-sm-9">
						<input type="text" name="id_anggota" readonly class="form-control-plaintext" value="<?php echo $r_tampil_anggota['idanggota']; ?>" id="inputIdAnggota">
					</div>
				</div>
				<div class="mb-3 row">
					<label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
					<div class="col-sm-9">
						<input type="text" name="nama" class="form-control" value="<?php echo $r_tampil_anggota['nama']; ?>" id="inputNama" required>
					</div>
				</div>
				<div class="mb-3 row">
					<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
					<div class="col-sm-9">
						<select class="form-select" name="jenis_kelamin" required>
							<option <?php if( $r_tampil_anggota['jeniskelamin'] !== "Pria" || "Wanita") echo 'selected';?> >Pilih Jenis Kelamin</option>
							<option value="Pria" <?php if( $r_tampil_anggota['jeniskelamin']=="Pria") echo 'selected';?> >Pria</option>
							<option value="Wanita" <?php if( $r_tampil_anggota['jeniskelamin']=="Wanita") echo 'selected';?> >Wanita</option>
						</select>
					</div>
				</div>
				<div class="mb-3 row">
					<label for="inputNama" class="col-sm-2 col-form-label">Alamat</label>
					<div class="col-sm-9">
						<textarea class="form-control" name="alamat" rows="3" required><?php echo $r_tampil_anggota['alamat']; ?></textarea>
					</div>
				</div>
				<button type="submit" class="btn btn-primary" name="simpan" value="Simpan">Simpan</button>
			</form>
		</div>
	</div>
</div>