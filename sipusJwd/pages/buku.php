<div class="container">
	<div class="container">
		<h2 class="px-5 pb-4 fw-bold">Tampil Data Buku</h2>
		<a class="ms-5 btn btn-primary"  href="index.php?p=buku-input">Tambah Buku</a>
		<div class="container-fluid px-5">
			<table class="table table-striped ">
				<thead>
					<tr>
						<th scope="col">No</th>
						<th scope="col">ID Buku</th>
						<th scope="col">Judul Buku</th>
						<th scope="col">Kategori</th>
						<th scope="col">Pengarang</th>
						<th scope="col">Penerbit</th>
						<th scope="col">Opsi</th>
					</tr>
				</thead>
				<tbody>

					<?php
						$sql="SELECT * FROM tbbuku ORDER BY idbuku DESC";
						$q_tampil_buku = mysqli_query($db, $sql);
				
						$nomor=1;
						while($r_tampil_buku=mysqli_fetch_array($q_tampil_buku)){
					?>

					<tr>
						<td><?= $nomor++; ?></td>
						<td><?= $r_tampil_buku['idbuku']; ?></td>
						<td><?= $r_tampil_buku['judulbuku']; ?></td>
						<td><?= $r_tampil_buku['kategori']; ?></td>
						<td><?= $r_tampil_buku['pengarang']; ?></td>
						<td><?= $r_tampil_buku['penerbit']; ?></td>
						<td>
							<a class="btn btn-warning" href="index.php?p=buku-edit&id=<?php echo $r_tampil_buku['idbuku'];?>">Ubah</a>
							<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Hapus</button>
						</td>
					</tr>

					<!-- Modal -->
					<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<p>Apakah anda yakin ingin menghapus data?</p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
										<a class="btn btn-danger" href="proses/buku-hapus.php?id=<?php echo $r_tampil_buku['idbuku']; ?>">Hapus</a>
									</div>
								</div>
							</div>
						</div>

					<?php } ?>

				</tbody>
			</table>
		</div>
	</div>
</div>