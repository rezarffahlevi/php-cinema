<div class="x_panel">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="contact_area">
<form method="POST" enctype="multipart/form-data">
</center><h1 style="font-family:Comic Sans MS"><b>Edit Data Film</b></h1>
<br>
<table border="0">
	<tr height="70">
		<td width="130">Kode Film</td>
		<td width="20">:</td>
		<td width="400"><input class="form-control" type="text" name="kode"  placeholder="Masukkan Kode" required maxlength="11" value="<?php echo $row['kode'] ?>" readonly></td>
	</tr>
	<tr height="70">
		<td width="">Judul Film</td>
		<td width="">:</td>
		<td width=""><input class="form-control" type="text" name="judul" placeholder="Masukkan Judul" required maxlength="50" value="<?php echo $row['judul'] ?>"></td>
	</tr>
	<tr height="70">
		<td width="">Genre</td>
		<td width="">:</td>
		<td width="">
			<select class="form-control" name="idgenre" required>
				<option value="<?php echo $row['id_genre'] ?>"><?php echo $row['genre']; ?></option>
				<?php
				$sql=$conn->query("SELECT * FROM tb_genre WHERE NOT id_genre='".$row['id_genre']."' ORDER BY genre ASC");
				while($roww=$sql->fetch_assoc()){
					?>
				<option value="<?php echo $roww['id_genre'] ?>"><?php echo $roww['genre']; ?></option>
				<?php } ?>
			</select>
		</td>
	</tr>
	<tr height="70">
		<td width="">Tahun</td>
		<td width="">:</td>
		<td width="400">
			<select class="form-control" name="idtahun" required>
				<option value="<?php echo $row['id_tahun'] ?>"><?php echo $row['tahun']; ?></option>
				<?php
				$sql=$conn->query("SELECT * FROM tb_tahun WHERE NOT id_tahun='".$row['id_tahun']."' ORDER BY tahun DESC");
				while($roww=$sql->fetch_assoc()){
					?>
				<option value="<?php echo $roww['id_tahun'] ?>"><?php echo $roww['tahun']; ?></option>
				<?php } ?>
			</select>
		</td>
	</tr>
	<tr height="70">
		<td width="">Negara</td>
		<td width="">:</td>
		<td width="">
			<select class="form-control" name="idnegara" required>
				<option value="<?php echo $row['id_negara'] ?>"><?php echo $row['negara']; ?></option>
				<?php
				$sql=$conn->query("SELECT * FROM tb_negara WHERE NOT id_negara='".$row['id_negara']."' ORDER BY negara ASC");
				while($roww=$sql->fetch_assoc()){
					?>
				<option value="<?php echo $roww['id_negara'] ?>"><?php echo $roww['negara']; ?></option>
				<?php } ?>
			</select>
		</td>
	</tr>
	<tr height="70">
		<td width="">Tanggal Tayang</td>
		<td width="">:</td>
		<td width=""><input class="form-control" type="date" name="tayang" placeholder="Masukkan Tanggal Tayang" value="<?php echo $row['tgl_tayang'] ?>" required></td>
	</tr>
	<tr height="70">
		<td width="">Jam</td>
		<td width="">:</td>
		<td width=""><input  type="text" class="form-control" name="jam" placeholder="Masukkan Jam Tayang" value="<?php echo $row['jam']; ?>" required></td>
	</tr>
	<tr height="70">
		<td width="">Harga</td>
		<td width="40">:&nbsp;Rp.</td>
		<td width="">
			<select class="form-control" name="idharga" required>
				<option value="<?php echo $row['id_harga'] ?>"><?php echo $row['harga']; ?></option>
				<?php
				$sql=$conn->query("SELECT * FROM tb_harga WHERE NOT id_harga='".$row['id_harga']."' ORDER BY harga ASC");
				while($roww=$sql->fetch_assoc()){
					?>
				<option value="<?php echo $roww['id_harga'] ?>"><?php echo $roww['harga']; ?></option>
				<?php } ?>
			</select>
		</td>
	</tr>
	<tr height="70">
		<td>Sinopsis</td>
		<td>:</td>
		<td><textarea class="form-control" name="sinopsis" placeholder="Masukkan Sinopsis" required><?php echo $row['sinopsis']; ?></textarea></td>
	</tr>
<!-- 	<tr height="70">
		<td>Cover</td>
		<td>:</td>
		<td>
		<input type="file" class="form-control" name="cover" /></td>
<?php
	if (isset($_FILES['cover'])) {
		move_uploaded_file($_FILES['cover']['tmp_name'], "upload/{$_FILES['cover']['name']}");
		$cover=$_FILES['cover']['name'];
		$c=$conn->query("UPDATE tb_film SET cover = '$cover' WHERE kode ='".$row['kode']."' ");
}

?>
	</tr>

	<tr>	
		<td></td>
		<td></td>
		<td><input class="form-control" name="cov" value="<?php echo $row['cover'] ?>"></td>
	</tr> -->

</table>
<br><br>
		<button style="background:grey; color:white; width:100px" class="btn btn-default" type="submit" name="ubah-film">Ubah</button>&nbsp &nbsp
		<button style="background:grey; color:white; width:100px" class="btn btn-default" type="reset" name="back" title="kembali">Batal</button>
</form>
<br><br>
			</div>
		</div>
	</div>
</div>
