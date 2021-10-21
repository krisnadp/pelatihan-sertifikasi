<div class="container">
	<div class="container">
		<h2 class="px-5 pb-4 fw-bold">Input Transaksi Peminjaman</h2>
		<div class="container-fluid px-5">
			<form action="proses/transaksi-peminjaman-input-proses.php" method="post">
				<div class="mb-3 row">
					<label for="id_buku" class="col-sm-2 col-form-label">ID Transaksi</label>
					<div class="col-sm-9">
						<input type="text" name="id_transaksi" class="form-control" id="id_buku">
					</div>
				</div>
				<div class="mb-3 row">
					<label class="col-sm-2 col-form-label">Anggota</label>
					<div class="col-sm-9">
						<select class="form-select" name="kategori" required>
							<option selected">Pilih Anggota</option>
							<?php
								$q_tampil_anggota=mysqli_query($db,
								"SELECT * FROM tbanggota
								WHERE status='Tidak Meminjam'
								ORDER BY idanggota"
								);
								while($r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota)){
									echo"<option value='$r_tampil_anggota[idanggota]'>$r_tampil_anggota[idanggota] | $r_tampil_anggota[nama]</option>";
								}
							?>
						</select>
					</div>
				</div>
				<div class="mb-3 row">
					<label class="col-sm-2 col-form-label">Buku</label>
					<div class="col-sm-9">
						<select class="form-select" name="kategori" required>
							<option selected">Pilih Buku</option>
							<?php
								$q_tampil_buku=mysqli_query($db,
								"SELECT * FROM tbbuku
								WHERE status='Tersedia'
								ORDER BY idbuku"
								);
								while($r_tampil_buku=mysqli_fetch_array($q_tampil_buku)){
									echo"<option value='$r_tampil_buku[idbuku]'>$r_tampil_buku[idbuku] | $r_tampil_buku[judulbuku]</option>";
								}
							?>
						</select>
					</div>
				</div>
				<div class="mb-3 row">
					<label for="inputIdAnggota" class="col-sm-2 col-form-label">Tanggal Pinjam</label>
					<div class="col-sm-9">
						<input type="text" name="tgl_pinjam" value="<?php echo $tgl; ?>" readonly class="form-control-plaintext">
					</div>
				</div>
				<button type="submit" class="btn btn-primary" name="simpan" value="Simpan">Simpan</button>
			</form>
		</div>
	</div>
</div>