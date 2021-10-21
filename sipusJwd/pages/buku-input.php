<div class="container">
	<div class="container">
		<h2 class="px-5 pb-4 fw-bold">Input Data Buku</h2>
		<div class="container-fluid px-5">
			<form action="proses/buku-input-proses.php" method="post">
				<div class="mb-3 row">
					<label for="id_buku" class="col-sm-2 col-form-label">ID Buku</label>
					<div class="col-sm-9">
						<input type="text" name="id_buku" class="form-control" id="id_buku">
					</div>
				</div>
				<div class="mb-3 row">
					<label for="judul_buku" class="col-sm-2 col-form-label">Judul Buku</label>
					<div class="col-sm-9">
						<input type="text" name="judul_buku" class="form-control" id="judul_buku" required>
					</div>
				</div>
				<div class="mb-3 row">
					<label class="col-sm-2 col-form-label">Kategori</label>
					<div class="col-sm-9">
						<select class="form-select" name="kategori" required>
							<option selected">Pilih Kategori</option>
							<option value="Ilmu Komputer">Ilmu Komputer</option>
							<option value="Ilmu Agama">Ilmu Agama</option>
							<option value="Karya Sastra">Karya Sastra</option>
						</select>
					</div>
				</div>
				<div class="mb-3 row">
					<label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
					<div class="col-sm-9">
						<input type="text" name="pengarang" class="form-control" id="pengarang" required>
					</div>
				</div>
				<div class="mb-3 row">
					<label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
					<div class="col-sm-9">
						<input type="text" name="penerbit" class="form-control" id="penerbit" required>
					</div>
				</div>
				<button type="submit" class="btn btn-primary" name="simpan" value="Simpan">Simpan</button>
			</form>
		</div>
	</div>
</div>