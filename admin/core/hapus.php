<?php
if(isset($_GET['hapus-film'])){
	$kode=$_GET['hapus-film'];
	$hapus=$conn->query("DELETE FROM tb_film WHERE kode='$kode'");
	$apus=$conn->query("DELETE FROM tb_jadwal WHERE kode='$kode'");
	if($hapus){
		echo "<script>alert('Data berhasil dihapus');</script>
				<meta http-equiv='refresh' content='0;URL=?tables=film'>";
	}	
	else{
		echo "<script>alert('Gagal');</script>
				<meta http-equiv='refresh' content='0;URL=?tables=film'>";
	}
}

else if(isset($_GET['hapus-komen'])){
  $id=$_GET['hapus-komen'];
  $hapus=$conn->query("DELETE FROM komen WHERE id_komen = '$id' ");
  if($hapus){
    echo "<script>alert('Data berhasil dihapus');</script>
        <meta http-equiv='refresh' content='0;URL=?tables=komen'>";
  } 
  else{
    echo "<script>alert('Gagal');</script>
        <meta http-equiv='refresh' content='0;URL=?tables=komen'>";
  }
}

else if(isset($_GET['hapus-akun'])){
	$id=$_GET['hapus-akun'];
	$hapus=$conn->query("DELETE FROM tb_login WHERE username =  '$id' ");
	if($hapus){
		echo "<script>alert('Data berhasil dihapus');</script>
				<meta http-equiv='refresh' content='0;URL=?tables=akun'>";
	}	
	else{
		echo "<script>alert('Gagal');</script>
				<meta http-equiv='refresh' content='0;URL=?tables=akun'>";
	}
}