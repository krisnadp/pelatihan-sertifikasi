<div class="container">
	<div class="container">
		<h2 class="px-5 pb-4 fw-bold">Tampil Data Anggota</h2>
		<a class="ms-5 btn btn-primary" href="index.php?p=anggota-input">Tambah Anggota</a>
		<div class="container-fluid px-5">
			<table class="table table-striped ">
				<thead>
					<tr>
						<th scope="col">No</th>
						<th scope="col">ID Anggota</th>
						<th scope="col">Nama</th>
						<th scope="col">Jenis Kelamin</th>
						<th scope="col">Alamat</th>
						<th scope="col">Opsi</th>
					</tr>
				</thead>
				<tbody>

					<?php
						$sql = "SELECT * FROM tbanggota ORDER BY idanggota DESC";
						$q_tampil_anggota = mysqli_query($db, $sql);
						$nomor = 1;
						while ($r_tampil_anggota = mysqli_fetch_array($q_tampil_anggota)) {
					?>

					<tr>
						<td><?= $nomor++; ?></td>
						<td><?= $r_tampil_anggota['idanggota']; ?></td>
						<td><?= $r_tampil_anggota['nama']; ?></td>
						<td><?= $r_tampil_anggota['jeniskelamin']; ?></td>
						<td><?= $r_tampil_anggota['alamat']; ?></td>
						<td>
							<a class="btn btn-warning" href="index.php?p=anggota-edit&id=<?php echo $r_tampil_anggota['idanggota']; ?>">Ubah</a>
							<a class="btn btn-danger" href="proses/anggota-hapus.php?id=<?php echo $r_tampil_anggota['idanggota']; ?>">Hapus</a>
						</td>
					</tr>

					<?php } ?>

				</tbody>
			</table>
		</div>
	</div>
</div>