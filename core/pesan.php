<?php
function anti_injection($data){
  $filter = stripcslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));
  return $filter;
}
if (isset($_POST['kirimpesan'])){
	if($_SESSION['level']=='gaada'){
		echo "<script>alert('Anda harus login dulu');</script>
				<meta http-equiv='refresh' content='0;URL=?page=login'>";
	}
	// $nama=$_POST['nama'];
	// $email=$_POST['email'];
	// $status=$_POST['status'];
	else{
	$pesan=anti_injection($_POST['pesan']);

// $carikode = $conn ->query("select max(kode_pesan) from buku_tamu") or die (mysql_error());
//   // menjadikannya array
//   $datakode = mysqli_fetch_array($carikode);
//   // jika $datakode
//   if ($datakode) {
//    $nilaikode = substr($datakode[0], 1);
//    // menjadikan $nilaikode ( int )
//    $kode = (int) $nilaikode;
//    // setiap $kode di tambah 1
//    $kode = $kode + 1;
//    $kode_otomatis = "P-".str_pad($kode, 4, "0", STR_PAD_LEFT);
//   } else {
//    $kode_otomatis = "P-0001";
//   }

$sql="INSERT INTO komen VALUES('','".$_SESSION['username']."', '$pesan', SYSDATE())";
//$stmt="";

$insert=$conn->query($sql);
//$ber=$conn->query($stmt);

	if($insert){
		echo "<script>alert('Pesan Terkirim');</script>
				<meta http-equiv='refresh' content='0;URL=?else'>";
	}	
	else{
		echo "<script>alert('Maaf sedang terjadi error');</script>
				<meta http-equiv='refresh' content='0;URL=?page=kontak-kami'>";
	}
}
}
