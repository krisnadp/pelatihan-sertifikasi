<?php
	$id_buku=$_GET['id'];
	$q_tampil_buku=mysqli_query($db,"SELECT * FROM tbbuku WHERE idbuku='$id_buku'");
	$r_tampil_buku=mysqli_fetch_array($q_tampil_buku);

?>
<div class="container">
	<div class="container">
		<h2 class="px-5 pb-4 fw-bold">Edit Data Buku</h2>
		<div class="container-fluid px-5">
			<form action="proses/buku-edit-proses.php" method="post">
				<div class="mb-3 row">
					<label for="id_buku" class="col-sm-2 col-form-label">ID Buku</label>
					<div class="col-sm-9">
						<input type="text" name="id_buku" value="<?php echo $r_tampil_buku['idbuku']; ?>" readonly class="form-control-plaintext" id="id_buku">
					</div>
				</div>
				<div class="mb-3 row">
					<label for="judul_buku" class="col-sm-2 col-form-label">Judul Buku</label>
					<div class="col-sm-9">
						<input type="text" name="judul_buku" value="<?php echo $r_tampil_buku['judulbuku']; ?>" class="form-control" id="judul_buku" required>
					</div>
				</div>
				<div class="mb-3 row">
					<label class="col-sm-2 col-form-label">Kategori</label>
					<div class="col-sm-9">
						<select class="form-select" name="kategori" required>
							<option <?php if( $r_tampil_buku['kategori'] !== "Ilmu Komputer" || "Ilmu Agama" || "Karya Sastra") echo 'selected';?> >Pilih Kategori</option>
							<option value="Ilmu Komputer" <?php if( $r_tampil_buku['kategori']=="Ilmu Komputer") echo 'selected';?> >Ilmu Komputer</option>
							<option value="Ilmu Agama" <?php if( $r_tampil_buku['kategori']=="Ilmu Agama") echo 'selected';?> >Ilmu Agama</option>
							<option value="Karya Sastra" <?php if( $r_tampil_buku['kategori']=="Karya Sastra") echo 'selected';?> >Karya Sastra</option>
						</select>
					</div>
				</div>
				<div class="mb-3 row">
					<label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
					<div class="col-sm-9">
						<input type="text" name="pengarang" value="<?php echo $r_tampil_buku['pengarang']; ?>" class="form-control" id="pengarang" required>
					</div>
				</div>
				<div class="mb-3 row">
					<label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
					<div class="col-sm-9">
						<input type="text" name="penerbit" value="<?php echo $r_tampil_buku['penerbit']; ?>" class="form-control" id="penerbit" required>
					</div>
				</div>
				<button type="submit" class="btn btn-primary" name="simpan" value="Simpan">Simpan</button>
			</form>
		</div>
	</div>
</div>