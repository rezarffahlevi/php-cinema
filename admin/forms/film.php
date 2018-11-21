
<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="x_panel">
		<div class="x_title">
<form enctype="multipart/form-data" method="POST" action="">
</center><h1 style="font-family:Comic Sans MS"><b>Tambah Data Film</b></h1>
<br>
<table border="0">
	<tr height="70">
		<td width="130">Kode Film</td>
		<td width="20">:</td>
		<td width="400"><input class="form-control" type="text" name="kode"  placeholder="Masukkan Kode" required maxlength="11"></td>
	</tr>
	<tr height="70">
		<td width="">Judul Film</td>
		<td width="">:</td>
		<td width=""><input class="form-control" type="text" name="judul" placeholder="Masukkan Judul" required maxlength="50"></td>
	</tr>
	<tr height="70">
		<td width="">Genre</td>
		<td width="">:</td>
		<td width="">
			<select class="form-control" name="idgenre" required>
				<option hidden="">-- Genre --</option>
				<?php
				$sql=$conn->query("SELECT * FROM tb_genre ORDER BY genre ASC");
				while($row=$sql->fetch_assoc()){
					?>
				<option value="<?php echo $row['id_genre'] ?>"><?php echo $row['genre']; ?></option>
				<?php } ?>
			</select>
		</td>
	</tr>
	<tr height="70">
		<td width="">Tahun</td>
		<td width="">:</td>
		<td width="400">
			<select class="form-control" name="idtahun" required>
				<option hidden="">-- Tahun --</option>
				<?php
				$sql=$conn->query("SELECT * FROM tb_tahun ORDER BY tahun DESC");
				while($row=$sql->fetch_assoc()){
					?>
				<option value="<?php echo $row['id_tahun'] ?>"><?php echo $row['tahun']; ?></option>
				<?php } ?>
			</select>
		</td>
	</tr>
	<tr height="70">
		<td width="">Negara</td>
		<td width="">:</td>
		<td width="">
			<select class="form-control" name="idnegara" required>
				<option hidden="">-- Negara --</option>
				<?php
				$sql=$conn->query("SELECT * FROM tb_negara ORDER BY negara ASC");
				while($row=$sql->fetch_assoc()){
					?>
				<option value="<?php echo $row['id_negara'] ?>"><?php echo $row['negara']; ?></option>
				<?php } ?>
			</select>
		</td>
	</tr>
	<tr height="70">
		<td width="">Tanggal Tayang</td>
		<td width="">:</td>
		<td width=""><input class="form-control" type="date" name="tayang" placeholder="Masukkan Tanggal Tayang" required></td>
	</tr>
	<tr height="70">
		<td width="">Jam</td>
		<td width="">:</td>
		<td width=""><input  type="time" name="jam" placeholder="Masukkan Jam Tayang" required>
			<input type="time" name="jamm" placeholder="Masukkan Jam Tayang"s>
			<input  type="time" name="jammm" placeholder="Masukkan Jam Tayang"></td>
	</tr>
	<tr height="70">
		<td width="">Harga</td>
		<td width="40">:&nbsp;Rp.</td>
		<td width="">
			<select class="form-control" name="idharga" required>
				<option hidden="">-- Harga --</option>
				<?php
				$sql=$conn->query("SELECT * FROM tb_harga ORDER BY harga ASC");
				while($row=$sql->fetch_assoc()){
					?>
				<option value="<?php echo $row['id_harga'] ?>"><?php echo $row['harga']; ?></option>
				<?php } ?>
			</select>
		</td>
	</tr>
	<tr height="70">
		<td>Sinopsis</td>
		<td>:</td>
		<td><textarea class="form-control" name="sinopsis" placeholder="Masukkan Sinopsis" required></textarea></td>
	</tr>
	<tr height="70">
		<td>Cover</td>
		<td>:</td>
		<td>
		<input type="file" class="form-control" name="cover" /></td>
<?php
	if (isset($_FILES['cover'])) {
		move_uploaded_file($_FILES['cover']['tmp_name'], "../upload/{$_FILES['cover']['name']}");
	}
?>
	</tr>
</table>
<br><br>
		<button style="background:grey; color:white; width:100px" class="btn btn-default" type="submit" name="simpan-film">Simpan</button>&nbsp &nbsp
		<button style="background:grey; color:white; width:100px" class="btn btn-default" type="reset" name="back" title="
		kembali">Batal</button>
</form>
<br><br>
			</div>
		</div>
	</div>
