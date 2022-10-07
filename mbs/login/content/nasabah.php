<?php 
if(!defined('INDEX')) die("");
?>
<h2 class="judul">Data Nasabah</h2>
<a class="tombol" href="?hal=nasabah_tambah">Tambah</a>

<table class="table">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Nasabah</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
<?php 
	$query = mysqli_query($con, "SELECT * FROM jabatan ORDER BY id_jabatan DESC");
	$no = 0;
	while($data = mysqli_fetch_array($query)){
		$no++;
?>
		<tr>
			<td><= $no?></td>
			<td><?= $data['nama_nasabah']?></td>
			<td>
				<a class="tombol edit" href="?hal=nasabah_edit&id=<?= $data['id_nasabah'] ?>">Edit</a>
				<a class="tombol hapus" href="?hal=nasabah_hapus&id=<?$data['id_nasabah']?>">Hapus</a>
			</td>
		</tr>
<?php 
	}
?>
	</tbody>
</table>