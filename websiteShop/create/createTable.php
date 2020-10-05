<?php
	$namaHost = "localhost";
	$username = "wp550_project";
	$password = "rahasiagan27";
	$database = "wp550897_project";

	$connect = mysqli_connect($namaHost,$username,$password,$database);

	if($connect){
		echo "Koneksi dengan MYSQL berhasil";
	}else{
		echo "Koneksi dengan MYSQL gagal.".mysqli_connect_error();
	}

	$sql ="CREATE TABLE user(
			username VARCHAR(30) PRIMARY KEY,
			nama VARCHAR(30) NOT NULL,
			password VARCHAR(50) NOT NULL,
			saldo INT(11) NOT NULL";
	if(mysqli_query($connect,$sql)){
		echo " Tabel berhasil dibuat";
	}
	else{
		echo "Tabel gagal dibuat <br>".mysqli_error($connect);
	}
	mysqli_close($connect);
?>
