<div class="x_panel">
	<form>
		<h1 style="text-align: center; font-family: Comic Sans MS"><b>Detail Komentar</b></h1>
		<br><br>

<?php
$kode=$_GET['detail-komen'];
$sql=$conn->query("SELECT * FROM komen a JOIN tb_login b ON a.username = b.username WHERE b.username = '$kode'");
$row=$sql->fetch_assoc();
?>
	<!-- ISINYA -->
	
<table>
	<tr height="40">
		<!-- <td rowspan="8" width="320"><img height="400" width="300" src="<?php echo "../upload/".$row['cover']; ?>"></td> -->
		<td width="210">Nama</td>
		<td width="20">:</td>
		<td width=""><?php echo $row['nama'] ?></td>
	</tr>
	<tr height="40">
		<td width="210">Username</td>
		<td width="20">:</td>
		<td width=""><strong><?php echo $row['username'] ?></strong></td>
	</tr>
	<tr height="40">
		<td width="210">Email</td>
		<td width="20">:</td>
		<td width=""><?php echo $row['email'] ?></td>
	</tr>
	<tr height="40">
		<td width="210">No Telpon</td>
		<td width="20">:</td>
		<td width=""><?php echo $row['notelp'] ?></td>
	</tr>
	<tr height="40">
		<td width="210">Tanggal Lahir</td>
		<td width="20">:</td>
		<td width=""><?php echo $row['lahir'] ?></td>
	</tr>
	<tr height="40">
		<td width="210">Alamat</td>
		<td width="20">:</td>
		<td width=""><?php echo $row['alamat'] ?></td>
	</tr>
<!-- 	<tr height="40">
		<td width="210">ID Komentar</td>
		<td width="20">:</td>
		<td width=""><?php echo $row['id_komen'] ?></td>
	</tr>
	<tr height="40">
		<td width="210">Komentar</td>
		<td width="20">:</td>
		<td width=""><?php echo $row['komen'] ?></td>
	</tr> -->
</table>
<br><br>
<h3>Komentar</h3>

<?php echo $row['komentar'] ?>
	</tr>

<br><br><br>
	</form>
</div>