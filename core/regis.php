<?php
function anti_injection($data){
  $filter = stripcslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));
  return $filter;
}
if(isset($_POST['regist'])){

	$username=anti_injection($_POST['username']);
	$password=anti_injection($_POST['password']);
	$nama=anti_injection($_POST['nama']);
	$lahir=anti_injection($_POST['lahir']);
	$notelp=anti_injection($_POST['notelp']);
	$email=anti_injection($_POST['email']);
	$alamat=anti_injection($_POST['alamat']);
	
	if(!ctype_alnum($username)){
		 echo "<script>alert('Username tidak boles spasi');</script>
	 			<meta http-equiv='refresh' content='0;URL=?page=regis'>";
	}
	else{
		$sql="INSERT INTO tb_login VALUES('$username', md5('$password'), 'user', '$nama', '$lahir', '$notelp', '$email', '$alamat', '$foto')";
		$insert=$conn->query($sql);
		if($insert){
			// if($level=='admin'){
			// 	$st=$conn->query("SELECT * FROM tb_login WHERE username='admin'");
			// 	$code=$st->fetch_array();
			// 		if($kode==$code['password']){
								$_SESSION['username']=$username;
								$_SESSION['nama']=$nama;
								$_SESSION['level'] = 'user';
								$_SESSION['password']=$password;
					// }
					echo "<script>alert('Data berhasil disimpan');
							document.location='index.php'</script>";

					// else{
					// echo "<script>alert('Kode Verifikasi salah');</script>
					// 	<meta http-equiv='refresh' content='0;URL=?page=regis'>";
					// }	
		// 		}
		// 	else if($level=='user'){
		// 		echo "<script>alert('Data berhasil disimpan');</script>
		// 				<meta http-equiv='refresh' content='0;URL=index.php'>";
		// 				session_start();

		// 						$_SESSION['username']=$username;
		// 						$_SESSION['nama']=$nama;
		// 						$_SESSION['level'] =$level;
		// 	}
		// 	else{
		// 		echo "<script>alert('Pilih Level Terlebih dahulu');</script>
		// 			<meta http-equiv='refresh' content='0;URL=?page=regis'>";
		// 	}
		}
		else{
			echo "<script>alert('Username sudah ada, Data tidak tersimpan');</script>
					<meta http-equiv='refresh' content='0;URL=?page=login'>";
		}
	}
}