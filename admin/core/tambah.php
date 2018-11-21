<?php
if (isset($_POST['simpan-film'])){
	$kode=htmlspecialchars($_POST['kode']);
	$judul=htmlspecialchars($_POST['judul']);
	$sinopsis=htmlspecialchars($_POST['sinopsis']);
	$cover=$_FILES['cover']['name'];
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

$sql="INSERT INTO tb_film VALUES('$kode', '$judul', '$sinopsis', '$cover', $idtahun, $idnegara, $idgenre, $idharga)";
$insert=$conn->query($sql);
$query="INSERT INTO tb_jadwal VALUES('','$tayang','$jam, $jamm dan $jammm','$kode','".$_SESSION['nama']."')";
$query=$conn->query($query);

	if($insert){
		echo "<script>alert('Data berhasil disimpan');</script>
				<meta http-equiv='refresh' content='0;URL=?tables=film'>";
	}	
	else{
		echo "<script>alert('Kode sudah ada, Data tidak tersimpan');</script>
				<meta http-equiv='refresh' content='0;URL=?tambah=film'>";
	}

}

else if(isset($_POST['regist'])){
	$username=htmlspecialchars($_POST['username']);
	$password=htmlspecialchars($_POST['password']);
	$nama=htmlspecialchars($_POST['nama']);
	$lahir=htmlspecialchars($_POST['lahir']);
	$notelp=htmlspecialchars($_POST['notelp']);
	$email=htmlspecialchars($_POST['email']);
	$alamat=htmlspecialchars($_POST['alamat']);
	$level=htmlspecialchars($_POST['level']);
	$kode=md5(htmlspecialchars($_POST['kode']));
	

	$sql="INSERT INTO tb_login VALUES('$username', md5('$password'), '$level', '$nama', '$lahir', '$notelp', '$email', '$alamat')";
	$insert=$conn->query($sql);
	if($insert){
		if($level=='admin'){
			$st=$conn->query("SELECT * FROM tb_login WHERE username='admin'");
			$code=$st->fetch_array();
				if($kode==$code['password']){
				echo "<script>alert('Data berhasil disimpan');</script>
						<meta http-equiv='refresh' content='0;URL=admin/layout.php'>";
						session_start();

							$_SESSION['username']=$username;
							$_SESSION['nama']=$nama;
							$_SESSION['level'] =$level;
				}
				else{
				echo "<script>alert('Kode Verifikasi salah');</script>
					<meta http-equiv='refresh' content='0;URL=?page=regis'>";
				}	
			}
		else if($level=='user'){
			echo "<script>alert('Data berhasil disimpan');</script>
					<meta http-equiv='refresh' content='0;URL=member.php'>";
					session_start();

							$_SESSION['username']=$username;
							$_SESSION['nama']=$nama;
							$_SESSION['level'] =$level;
		}
		else{
			echo "<script>alert('Pilih Level Terlebih dahulu');</script>
				<meta http-equiv='refresh' content='0;URL=?page=regis'>";
		}
	}
	else{
		echo "<script>alert('Username sudah ada, Data tidak tersimpan');</script>
				<meta http-equiv='refresh' content='0;URL=?page=login'>";
	}

}
