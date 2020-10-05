<?php
session_start();

include "koneksi.php";
$user = $_SESSION['username'];
$username = $_POST['username'];
$nama = $_POST['nama'];
$pwlama = $_POST['passwordlama'];
$pwbaru = $_POST['passwordbaru'];
$sql = "SELECT * FROM user WHERE username='$username'";
$rsql = mysqli_query($connect,$sql);
$row = mysqli_fetch_array($rsql);
if(empty($_POST['username'])){
  header('Location: index.php?page=usernameEmpty');
  exit;
}else if(empty($_POST['nama'])){
  header('Location: index.php?page=nameEmpty');
}else if(empty($_POST['username']) && empty($_POST['nama'])){
  header('Location: index.php?page=fieldEmpty');
}else{
  if($row['username'] == $username){
    echo "gagal";
    header('Location: index.php?page=updateGagal');
    exit;
  }else if($sql != $username){
    $update="UPDATE user SET username='$username' , nama='$nama' WHERE username='$user'";
    $result=mysqli_query($connect,$update);
    if(isset($result)){
      $_SESSION['username'] = $username;
      echo "beerhasil";
      header('Location: index.php?page=updateBerhasil');
    }
  }
}
?>