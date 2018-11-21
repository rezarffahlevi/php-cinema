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
	

	$sql="INSERT INTO tb_login VALUES('$username', md5('$password'), 'admin', '$nama', '$lahir', '$notelp', '$email', '$alamat')";
	$insert=$conn->query($sql);
	if($insert){
				echo "<script>alert('Data berhasil disimpan');</script>
						<meta http-equiv='refresh' content='0;URL=?tables=akun'>";
			}
	else{
		echo "<script>alert('Username sudah ada, Data tidak tersimpan');</script>
				<meta http-equiv='refresh' content='0;URL=?tambah=akun'>";
	}
}