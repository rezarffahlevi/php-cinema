<?php session_start();

session_destroy();

echo "	<script>
			alert('Anda Keluar Dari Sistem, Ciee keluar');
			document.location='../../index.php'
		</script>";
?>