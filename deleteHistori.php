<?php  
	session_start();
	include "koneksi.php";
	$user = $_SESSION['username'];
	$query="DELETE FROM histori WHERE username='$user'";
	$result=mysqli_query($connect,$query);
	if($result){
		echo "berhasil";
		header('location: index.php?page=histori');
	}else{
		echo "gagal";
	}
	
?>