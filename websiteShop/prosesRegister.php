<<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
	<link rel="shortcut icon" href="logo.png">
  <title>REGISTER</title>
  <link rel="stylesheet" type="text/css" href="styleLogin.css">
</head>
<body style="
background : url(image/loginbg.jpg);
padding: 0;
margin: 0;
height: 100%;
background-repeat: no-repeat;
background-size: cover;
">

<?php
include "koneksi.php";

$nama=$_POST['nama'];
$username=$_POST['username'];
$password=$_POST['password'];
$sql_u = "SELECT * FROM user WHERE username='$username'";
$res_u = mysqli_query($connect,$sql_u); 

  if(empty($nama) OR empty($username) OR empty($password)){
  }else{
    $sql="INSERT INTO user(username,nama,password)
  VALUE('$username','$nama','$password')";
  $res_s = mysqli_query($connect,$sql);   
  }

mysqli_close($connect);
?>

<font face="Bahnschrift">
  <table align="center" style="margin-top: 100px;">
    <tr>
      <td style="width:250px;height: 400px;background-color:white;border-radius:8px;" align="center">
        <h3 align="center">Register</h3>
        <form method="POST" action="login.php">
          <label style="padding-left: 47;padding-right: 50">            
           <?php 
           if(isset($_GET['nama']) AND isset($_GET['username'])){
            $nama=$_GET['nama'];
            $username=$_GET['username'];
            $password=$_GET['password'];
            $isi_form="&nama=$nama&username=$username$password=$password";
          }

          if(empty($nama)){
            header("Location:register.php?error=nama_kosong".$isi_form);
          }else if(empty($username)){
            header("Location:register.php?error=username_kosong".$isi_form);

          }else if(empty($password)){
            header("Location:register.php?error=password_kosong".$isi_form);
          }
          ?>

          <?php
          if(mysqli_num_rows($res_u) > 0){
            echo "Username sudah ada";
            echo '<br><a style="padding-left:94px;font-family:Bahnschrift;text-decoration:none" href="register.php">Kembali</a>';
          }else{
            echo "Registrasi akun berhasil";
          }
          ?>

        </label>
        <input class="submit" type="submit" value="Login">
      </form>
    </td>
  </tr>
</table>
</font>
</body>
</html>