<?php
if($_SESSiON['level']='admin'){
	if(isset($_GET['page'])){
		if($_GET['page']=='konten'){
			 include_once('modul/konten.php');
		}
	}
	else if(isset($_GET['tables'])){
		if($_GET['tables']=='film'){
			include_once('function/paging.php');
			include_once('tables/film.php');
		}
		else if($_GET['tables']=='komen'){
			include_once('tables/komen.php');
		}
		else if($_GET['tables']=='akun'){
			include_once('tables/member.php');
		}
	}
	else if (isset($_GET['tambah'])){
		if ($_GET['tambah']=='film'){
			include_once ('forms/film.php');
			include_once ('core/tambah.php');
			}
		else if ($_GET['tambah']=='id'){
			include_once ('menu/tambahid.php');
			include_once('forms/idtahun.php');
			}
		else if ($_GET['tambah']=='akun'){
			include_once('forms/regis-a.php');
			include_once('core/regis-a.php');
			}

		}
	else if(isset($_GET['edit'])){
		include_once ('core/edit.php');
		include_once ('forms/edit_film.php');
		}
	else if(isset($_GET['hapus-film']) or isset($_GET['hapus-komen']) or isset($_GET['hapus-akun'])){
			 include_once('core/hapus.php');
		}
	else if(isset($_GET['galeri'])){
		include_once ('menu/galeri.php');
		}
	else if (isset($_GET['detail'])){
			include_once ('tables/detailfilm.php');
		}
	else if(isset($_GET['detail-komen'])){
			include_once ('tables/detailkomen.php');
		}
	else if(isset($_GET['id'])){
		if ($_GET['id']=='ng') {
			include_once ('menu/tambahid.php');
			include_once('forms/idnegara.php');
		}
		else if ($_GET['id']=='gr') {
			include_once ('menu/tambahid.php');
			include_once('forms/idgenre.php');
		}
		else if ($_GET['id']=='hg') {
			include_once ('menu/tambahid.php');
			include_once('forms/idharga.php');
		}
		else{
			include_once ('menu/tambahid.php');
			include_once('forms/idtahun.php');
		}
	}
	else{
		include_once('modul/konten.php');
	}
}
else{
	 echo "<script>
         document.location='../index.php?page=login';
         </script>";
}