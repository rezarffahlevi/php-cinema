<?php
if (isset($_POST['tamu'])){
	$nama=$_POST['nama'];
	$email=$_POST['email'];
	$status=$_POST['status'];

$sql="INSERT INTO buku_tamu VALUES('','$nama','$email','$status',SYSDATE())";

$insert=$conn->query($sql);

session_start();
$_SESSION['tamu'] = $_POST['nama'];
$_SESSION['email'] = $_POST['email'];
	if($insert){
		echo "<script>alert('Data tersimpan');
				document.location='tamu.php';
				</script>";
	}	
	else{
		echo "<script>alert('Maaf sedang terjadi error');</script>
				<meta http-equiv='refresh' content='0;URL=?page=kontak-kami'>";
	}
}
