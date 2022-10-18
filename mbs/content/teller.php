<?php
	if(!defined('INDEX')) die("");
?>

<h2 class="judul">Data Tabungan Nasabah</h2>
<a class="tombol" href="?hal=setoran">Setoran</a>
<a class="tombol" href="?hal=penarikan">Penarikan</a>

<table class="table">
	<thead>
		<tr>
			<th>No</th>
			<th>Nomor Rekening</th>
			<th>Nama</th>
			<th>Jenis Tabungan</th>
			<th>Saldo</th>
			<th>Opsi</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$no = 1;
			$data = mysqli_query ($con, "SELECT transaksi.id_saldo,
											transaksi.id_tabungan,
											transaksi.id_nasabah,
											transaksi.setor,
											transaksi.tarik,
											transaksi.saldo,
											sum(transaksi.tarik) as jumlah_penarikan,
											sum(transaksi.setor) as jumlah_setoran,
																  
											nasabah.id_nasabah,
											nasabah.nomor_rekening,
											nasabah.nama_nasabah,
											nasabah.jenis_kelamin,
											nasabah.tgl_lahir
																		
											FROM
											nasabah, transaksi
											WHERE
											transaksi.id_nasabah = nasabah.id_nasabah
											group by siswa.nama ASC");
			WHILE ($row = mysqli_fetch_array ($data))
			{
		?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['nomor_rekening']; ?></td>
				<td><?php echo $row['nama_nasabah']; ?></td>
				<td><?php echo $row['jns_tabungan']; ?></td>
				<td><?php echo format_rupiah($row['jumlah_setoran'] - $row['jumlah_penarikan']); ?></td>
				<td><a href="detail-<?php echo $row['id_nasabah'] ; ?>.html" class="btn btn-success btn-xs">Detail</a></td>
			</tr>
		<?php
			}
		?>
	</tbody>
</table>