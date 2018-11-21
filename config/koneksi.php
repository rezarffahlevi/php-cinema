<?php
	$conn=new mysqli('localhost','root','','db_cinema');
		if($conn->connect_errno){
			echo "Gagal";
		}