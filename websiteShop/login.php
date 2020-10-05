<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LOGIN</title>
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
  <font face="Bahnschrift">
  <table align="center" style="margin-top: 100px;">
    <tr>
      <td style="width:250px;height: 400px;background-color:white;border-radius:8px;" align="center">
          <a href="index.php"><img src="image/tumbas.png" width="200px"></a>
          <h3 align="center">Login</h3>
          <?php  
            if(isset($_GET['log'])){
              echo '<label style="color:red;font-size: 12px">Username/Password salah</label>';
            }
          ?>

          <form method="POST" action="loginProses.php" style="margin-bottom: 17px;margin-top: 10px">
              <input type="text" name="username" placeholder="Username" style="border:none;border-bottom:2px solid #091523;">
              <input type="password" name="password" placeholder="Password" style="border:none;border-bottom:2px solid #091523;margin-top:30px">
              <input class="submit" type="submit" value="Login">
          </form>
          <label style="font-size:12px;">Belum punya akun? <a href="register.php">Daftar</a></label>
      </td>
    </tr>
  </table>
  </font>
  </body>
</html>
