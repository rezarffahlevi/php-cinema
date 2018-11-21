<form method="POST">
<h3>Tambah Negara</h3>
		<br>
			<table>
				<tr>
					<td height="110" width="250"><input class="form-control" type="text" name="negara" placeholder="Tambah negara" maxlength="20" style="width:220"></td>
					<td width="25"></td>
					<td><button class="btn btn-success" type="submit" name="simpan" style="width:75">Simpan</button></td>
				</tr>
				<tr>
					<td>
						<select class="form-control" style="width:220" name="idnegara" >
				<?php 
					$sql=$conn->query("SELECT * FROM tb_negara ORDER BY negara ASC");
						while ($row=$sql->fetch_assoc()) {
							?>
							<option value="<?php echo $row['id_negara']; ?>"><?php echo $row['negara']; ?> </option>
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
		$negara=$_POST['negara'];
		$sql=$conn->query("INSERT INTO tb_negara VALUES('','$negara')");
			if($sql){
				echo "<script>alert('Berhasil');</script>
							<meta http-equiv='refresh' content='0;URL=?id=ng'>";
					}			
			else{
				echo "<script>alert('Gagal');</script>
							<meta http-equiv='refresh' content='0;URL=?id=ng'>";
				}
	}
	else if (isset($_POST['hapus'])) {
		$idnegara = $_POST['idnegara'];
		$sql=$conn->query("DELETE FROM tb_negara WHERE id_negara='$idnegara'");
		if($sql){
			echo "<script>alert('Data berhasil dihapus');</script>
				<meta http-equiv='refresh' content='0;URL=?id=ng'>";
			}
		else{
			echo "<script>alert('Gagal');</script>
				<meta http-equiv='refresh' content='0;URL=?id=ng'>";
			}
}