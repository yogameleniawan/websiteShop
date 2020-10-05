<?php
session_start();

include "koneksi.php";
$user = $_SESSION['username'];
$pwlama = $_POST['passwordlama'];
$pwbaru = $_POST['passwordbaru'];
$sql = "SELECT password FROM user WHERE username='$user'";
$rsql = mysqli_query($connect,$sql);
$row = mysqli_fetch_array($rsql);
    if(empty($_POST['passwordbaru'])){
      header('Location: index.php?page=passwordBaruKosong');
    }else if(empty($_POST['passwordlama'])){
      header('Location: index.php?page=passwordLamaKosong');
    }else if($row['password'] != $_POST['passwordlama']){
      header('Location: index.php?page=passwordTidakCocok');  
    }
    else{
      $update="UPDATE user SET password='$pwbaru' WHERE username='$user'";
      $result=mysqli_query($connect,$update);
      header('Location: index.php?page=passwordBerubah');
    }
?>