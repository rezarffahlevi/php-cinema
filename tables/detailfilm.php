<section id="contentSection">
	<form>
		<h2 style="text-align: center;"><b>Detail Film</b></h2>
		<br><br>

<?php
$kode=$_GET['detail'];
$sql=$conn->query("SELECT * FROM tb_jadwal a JOIN tb_film b ON a.kode = b.kode JOIN tb_tahun c ON b.id_tahun = c.id_tahun JOIN tb_negara d ON b.id_negara = d.id_negara JOIN tb_genre e ON b.id_genre = e.id_genre JOIN tb_harga f ON b.id_harga = f.id_harga WHERE b.kode = '$kode'");
$row=$sql->fetch_assoc();
?>
	<!-- ISINYA -->
	
<table>
	<tr height="40">
		<td rowspan="8" width="320"><img height="400" width="300" src="<?php echo "upload/".$row['cover']; ?>"></td>
		<td width="210">Kode</td>
		<td width="20">:</td>
		<td width=""><?php echo strtoupper($row['kode']) ?></td>
	</tr>
	<tr height="40">
		<td width="210">Judul</td>
		<td width="20">:</td>
		<td width=""><strong><?php echo strtoupper($row['judul']) ?></strong></td>
	</tr>
	<tr height="40">
		<td width="210">Genre</td>
		<td width="20">:</td>
		<td width=""><?php echo $row['genre'] ?></td>
	</tr>
	<tr height="40">
		<td width="210">Tahun</td>
		<td width="20">:</td>
		<td width=""><?php echo $row['tahun'] ?></td>
	</tr>
	<tr height="40">
		<td width="210">Negara</td>
		<td width="20">:</td>
		<td width=""><?php echo $row['negara'] ?></td>
	</tr>
	<tr height="40">
		<td width="210">Tanggal Tayang</td>
		<td width="20">:</td>
		<td width=""><?php echo $row['tgl_tayang'] ?></td>
	</tr>
	<tr height="40">
		<td width="210">Jam</td>
		<td width="20">:</td>
		<td width=""><?php echo $row['jam'] ?></td>
	</tr>
	<tr height="40">
		<td width="210">Harga</td>
		<td width="20">:</td>
		<td width=""><?php echo $row['harga'] ?></td>
	</tr>
</table>
<br><br>
<h3>Sinopsis</h3>

<?php echo $row['sinopsis'] ?>
	</tr>

<br><br><br>
	</form>
</section>