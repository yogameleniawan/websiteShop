<<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>REGISTER</title>
	<link rel="shortcut icon" href="logo.png">
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
      if(isset($_GET['error'])){
        $error=$_GET['error'];
      }
      else{
        $error="";
      }

      $pesan="";
      if($error=="username_kosong"){
        $pesan="Username harus diisi";
      }else if($error=="nama_kosong"){
        $pesan="Nama harus diisi";
      }else if($error=="password_kosong"){
        $pesan="Password harus diisi";
      }

      if(isset($_GET['nama']) AND isset ($_GET['username']) AND isset($_GET['password'])){
        $nama=$_GET['nama'];
        $username=$_GET['username'];
        $password=$_GET['password'];
      }
      else{
        $nama="";
        $username="";
        $password="";
      }
  ?>
  <font face="Bahnschrift">
  <table align="center" style="margin-top: 100px;">
    <tr>
      <td style="width:250px;height: 400px;background-color:white;border-radius:8px;" align="center">
        <a href="index.php"><img src="image/tumbas.png" width="200px"></a>
          <h3 align="center">Register</h3>
          <label style="color: #FF0000;font-size: 12px;"><?php echo $pesan; ?></label>
          <form method="POST" action="prosesRegister.php">
              <input type="text" name="nama" placeholder="Nama Lengkap" style="border:none;border-bottom:2px solid #091523;margin-top:5px">
              <input type="text" name="username" placeholder="Username" style="border:none;border-bottom:2px solid #091523;margin-top:30px">
              <input type="password" name="password" placeholder="Password" style="border:none;border-bottom:2px solid #091523;margin-top:30px">
              <input class="submit" type="submit" value="Register">
          </form>
          <label style="font-size:12;">Sudah punya akun? <a href="login.php">Login</a></label>
      </td>
    </tr>
  </table>
  </font>
  </body>
</html>
