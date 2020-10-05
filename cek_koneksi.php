<?php
	$namaHost = "localhost";
	$username = "root";
	$password = "";

	$connect = mysqli_connect($namaHost,$username,$password);

	if($connect){
		echo "Koneksi dengan MYSQL berhasil";
	}else{
		echo "Koneksi dengan MYSQL gagal.".mysqli_connect_error();
	}
?>
