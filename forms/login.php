<?php
	unset($_SESSION['username']);
	unset($_SESSION['nama']);
	unset($_SESSION['level']);
?>
<body style="background: url(images/add_img.jpg); no-repeat scroll; background-size: 100% 100%; min-length: 700px">
<form method="POST" action="cek_login.php">
	<center>
		<img width='300px' height='300px' src='images/login.png'>
		<br><br>
		<b style="color:white">Username<br>
		<font color='black'><input type='text' name='user' required></font><br><br>
		Password</b><br>
		<input type='password' name='pass' required><br>
		<br>
		<br>
		<button style="background:grey; color:white; width:100px" class="btn btn-default" name='login'>Login</button>
		&nbsp
		<button style="background:grey; color:white; width:100px" class="btn btn-default" type='reset' name='batal'>Batal</button>
		<br><br><br>
		<h4 style="color:white">Belum punya akun? daftar <a href="?page=regis" style="color:#ffd62c">disini</a></h4>

</form>
<br><br>