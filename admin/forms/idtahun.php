<form method="POST">
<h3>Tambah Tahun</h3>
		<br>
			<table>
				<tr>
					<td height="110" width="250"><input class="form-control" type="text" name="tahun" placeholder="Tambah Tahun" maxlength="4" style="width:220"></td>
					<td width="25"></td>
					<td><button class="btn btn-success" type="submit" name="simpan" style="width:75">Simpan</button></td>
				</tr>
				<tr>
					<td>
						<select class="form-control" style="width:220" name="idtahun" >
				<?php 
					$sql=$conn->query("SELECT * FROM tb_tahun ORDER BY tahun DESC");
						while ($row=$sql->fetch_assoc()) {
							?>
							<option value="<?php echo $row['id_tahun']; ?>"><?php echo $row['tahun']; ?> </option>
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
		$tahun=$_POST['tahun'];
		$sql=$conn->query("INSERT INTO tb_tahun VALUES('','$tahun')");
			if($sql){
				echo "<script>alert('Berhasil');</script>
							<meta http-equiv='refresh' content='0;URL=?id=th'>";
					}			
			else{
				echo "<script>alert('Gagal');</script>
							<meta http-equiv='refresh' content='0;URL=?id=th'>";
					}
			}
	else if (isset($_POST['hapus'])) {
		$idtahun = $_POST['idtahun'];
		$sql=$conn->query("DELETE FROM tb_tahun WHERE id_tahun='$idtahun'");
		if($sql){
			echo "<script>alert('Data berhasil dihapus');</script>
				<meta http-equiv='refresh' content='0;URL=?id=th'>";
			}
		else{
			echo "<script>alert('Gagal');</script>
				<meta http-equiv='refresh' content='0;URL=?id=th'>";
			}

	}

