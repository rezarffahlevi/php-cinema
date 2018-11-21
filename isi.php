<?php
if($_SESSION['level']=='user'){
	if (isset($_GET['page'])){
		if ($_GET['page']=='login'){
			include_once ('forms/login.php');
			}
		else if ($_GET['page']=='jadwal'){
			include_once ('tables/jadwal.php');
			}
		else if ($_GET['page']=='regis'){
			include_once ('forms/regis.php');
			include_once ('core/regis.php');
			}
		else if ($_GET['page']=='kontak-kami'){
			include_once ('forms/kontak.php');
			include_once ('core/pesan.php');
			}
		else if ($_GET['page']=='artikel'){
			include_once ('isi/artikel.php');
			}
		}

	else if(isset($_GET['galeri'])){
		include_once ('menu/galeri.php');
		}
	else if (isset($_GET['detail'])){
		include_once ('tables/detailfilm.php');
		}
	else if(isset($_GET['donwload'])){
		include_once('isi/download.php');
	}
	else{
		include_once ('isi/video.php');
		include_once ('isi/daftar_video.php');
		}
	}
else{
	if (isset($_GET['page'])){
		if ($_GET['page']=='login'){
			include_once ('forms/login.php');
				unset($_SESSION['username']);
				unset($_SESSION['nama']);
				unset($_SESSION['level']);
			}
		else if ($_GET['page']=='regis'){
			include_once ('forms/regis.php');
			include_once ('core/regis.php');
			}
		else if ($_GET['page']=='kontak-kami'){
			include_once ('forms/kontak.php');
			include_once ('core/pesan.php');
			}
		else if ($_GET['page']=='artikel'){
			include_once ('isi/artikel.php');
			}
		}

	else if(isset($_GET['galeri'])){
		include_once ('menu/galeri.php');
		}
	else if(isset($_GET['donwload'])){
		include_once('isi/download.php');
	}
	else{
		include_once ('isi/artikel.php');
		}
	}
