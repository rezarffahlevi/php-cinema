<?php
include "config/koneksi.php";

function anti_injection($data){
  $filter = stripcslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));
  return $filter;
}

$user=anti_injection($_POST['user']);
$pass=anti_injection(md5($_POST['pass']));


//$sql=$conn->query("INSERT INTO tb_login VALUES('$user','$pass','user')");
if (!ctype_alnum($user) OR !ctype_alnum($pass)){
  echo "<h1><center><b>Sekarang loginnya tidak bisa di injeksi lho.";
}
else{
	$sql=$conn->query("SELECT * FROM tb_login WHERE username='$user' and password='$pass'");
	$ada=$sql->fetch_assoc();
		if($user=$ada['username'] && $pass=$ada['password']){
			session_start();

				$_SESSION['username']=$ada['username'];
				$_SESSION['password']=$ada['password'];
				$_SESSION['nama']=$ada['nama'];
				$_SESSION['level'] =$ada['level'];

					if($_SESSION['level'] == 'admin'){
						echo "<script>
									alert('Selamat Datang " .$_SESSION['nama']."');
									document.location='admin/index.php';
							</script>";
					}
					else if($_SESSION['level'] == 'user'){
						echo "<script>
									alert('Selamat Datang " .$_SESSION['nama']."');
									document.location='index.php';
							</script>";
						}
					}
				
		else{
			   echo "<center>
				  <link href='css/zalstyle.css' rel='stylesheet' type='text/css'>";

				  echo "
				  </head>
				  <body class='special-page'>
				  <div id='container'>
				  <section id='error-number'>
				  
				  <img src='images/lock.png'>
				  <h1>LOGIN GAGAL</h1>
				  
				  <p><span class style=\"font-size:14px; color:#000;\">Username atau Password anda tidak sesuai.<br>
				  Atau akun anda sedang diblokir.</p></span><br/>
				  
				  </section>
				  
				  <section id='error-text'>
				  <p><a class='button' href='index.php?page=login'>&nbsp;&nbsp; <b>ULANGI LAGI</b> &nbsp;&nbsp;</a></p>
				  </section>
				  </div>";

}
		}

