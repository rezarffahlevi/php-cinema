<?php
if(isset($_GET['edit'])){
	$kode=$_GET['edit'];
		$stmt=$conn->query("SELECT * FROM tb_jadwal a INNER JOIN tb_film b ON a.kode = b.kode INNER JOIN tb_tahun c ON b.id_tahun = c.id_tahun INNER JOIN tb_negara d ON b.id_negara = d.id_negara INNER JOIN tb_genre e ON b.id_genre = e.id_genre INNER JOIN tb_harga f ON b.id_harga = f.id_harga WHERE b.kode='$kode'");
		$row=$stmt->fetch_array();
}
	if (isset($_POST['ubah-film'])){
		$judul=htmlspecialchars($_POST['judul']);
		$sinopsis=htmlspecialchars($_POST['sinopsis']);
		$cover=$_FILES['cover']['name'];
		$cov=htmlspecialchars($_POST['cov']);
		$idtahun=htmlspecialchars($_POST['idtahun']);
		$idnegara=htmlspecialchars($_POST['idnegara']);
		$idgenre=htmlspecialchars($_POST['idgenre']);
		$idharga=htmlspecialchars($_POST['idharga']);

	// JADWAL
	
		$tayang=$_POST['tayang'];
		$jam=$_POST['jam'];
		$jamm=$_POST['jamm'];
		$jammm=$_POST['jammm'];
			session_start();

			$sql="UPDATE tb_film SET judul='$judul', sinopsis='$sinopsis', id_tahun='$idtahun', id_negara='$idnegara', id_genre='$idgenre', id_harga='$idharga' WHERE kode='$kode'";

			$query = "UPDATE tb_jadwal SET tgl_tayang='$tayang', jam = '$jam', username = '".$_SESSION['user']."' WHERE kode='$kode'";
			$edit=$conn->query($sql);
			$ubah=$conn->query($query);

	if($edit){
		echo "<script>alert('Data berhasil diedit');</script>
				<meta http-equiv='refresh' content='0;URL=?tables=film'>";
	}	
	else{
		echo "<script>alert('Gagal');</script>
				<meta http-equiv='refresh' content='0;URL=?tables=film'>";
	}
}
