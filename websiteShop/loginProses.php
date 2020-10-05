<?php
session_start();
	include "koneksi.php";

	$username=$_POST['username'];
	$password=$_POST['password'];

	$query="SELECT * FROM user WHERE username='$username' AND password='$password'";
	$result=mysqli_query($connect, $query);
	$cek=mysqli_num_rows($result);

	if($cek){
		$_SESSION['username'] = $username;
		header("Location: index.php");
	exit();?>
	<?php
	}else{
		$log="false";
		header("Location: login.php?log=".$log."");
	exit();?>
	<?php
	echo mysqli_error($connect);
	}

?>