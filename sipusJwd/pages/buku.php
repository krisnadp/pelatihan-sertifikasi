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
							<a class="btn btn-danger" href="proses/buku-hapus.php?id=<?php echo $r_tampil_buku['idbuku']; ?>">Hapus</a>
						</td>
					</tr>

					<?php } ?>

				</tbody>
			</table>
		</div>
	</div>
</div>