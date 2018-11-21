<form method="POST">
<h3>Tambah Genre</h3>
		<br>
			<table>
				<tr>
					<td height="110" width="250"><input class="form-control" type="text" name="genre" placeholder="Tambah genre" maxlength="20" style="width:220"></td>
					<td width="25"></td>
					<td><button class="btn btn-success" type="submit" name="simpan" style="width:75">Simpan</button></td>
				</tr>
				<tr>
					<td>
						<select class="form-control" style="width:220" name="idgenre" >
				<?php 
					$sql=$conn->query("SELECT * FROM tb_genre ORDER BY genre ASC");
						while ($row=$sql->fetch_assoc()) {
							?>
							<option value="<?php echo $row['id_genre']; ?>"><?php echo $row['genre']; ?> </option>
						<?php } ?>
						</select>
					</td>	
					<td width="25"></td>	
					<td><button class="btn btn-danger" onclick="return confirm('Yakin?')" name="hapus" style="width:75">Hapus</button></td>
				</tr>
			</table>
			<br><br><br><br />
</form>
</div>
<?php

	if(isset($_POST['simpan'])){
		$genre=$_POST['genre'];
		$sql=$conn->query("INSERT INTO tb_genre VALUES('','$genre')");
			if($sql){
				echo "<script>alert('Berhasil');</script>
					<meta http-equiv='refresh' content='0;URL=?id=gr'>";
					}			
			else{
				echo "<script>alert('Gagal');</script>
					<meta http-equiv='refresh' content='0;URL=?id=gr'>";
					}
	}
	else if (isset($_POST['hapus'])) {
		$idgenre = $_POST['idgenre'];
		$sql=$conn->query("DELETE FROM tb_genre WHERE id_genre='$idgenre'");
		if($sql){
			echo "<script>alert('Data berhasil dihapus');</script>
				<meta http-equiv='refresh' content='0;URL=?id=gr'>";
			}
		else{
			echo "<script>alert('Gagal');</script>
				<meta http-equiv='refresh' content='0;URL=?id=gr'>";
			}

	}
