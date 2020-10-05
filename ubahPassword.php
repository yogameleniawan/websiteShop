<!DOCTYPE html>
<html>
<head>
	<title>Informasi Akun</title>
	<link rel="stylesheet" type="text/css" href="styleAkun.css">
</head>
<body>
	<?php  
	$user = $_SESSION['username'];
	$query="SELECT * FROM user WHERE username='$user'";
	$result=mysqli_query($connect,$query);
	?>

	<font face="Bahnschrift">
		<table align="left" width="100%">
			<tr>
				<td width="10px" style="padding-top: 20px;padding-left: 10px;padding-right: 10px"><a style="border-radius: 20px;background-color: #303e49;padding: 6px 6px 6px 6px;text-decoration: none;color: white;font-size: 14px;padding-right:" class="item" href="index.php">Beranda</a></td>
				<td width="10px" align="center" style="padding-top: 20px;font-size: 18px"> <b>></b> </td>
				<td width="10px" style="padding-top: 20px;padding-left: 10px;padding-right: 10px"><a style="border-radius: 20px;background-color: #303e49;padding: 6px 6px 6px 6px;text-decoration: none;color: white;font-size: 14px;padding-right:" class="item" href="index.php?page=akun">Akun</a></td>
				<td width="10px" align="center" style="padding-top: 20px;font-size: 18px"> <b>></b> </td>
				<td  style="padding-top: 20px;padding-left: 7px"><a style="border-radius: 20px;background-color: #0ec1bb;padding: 6px 6px 6px 6px;text-decoration: none;color: white;font-size: 14px" class="item" href="index.php?page=infoAkun">Informasi Akun</a></td>
			</tr>
		</table>
		<table>
			<tr>
				<td colspan="5" align="center" style="padding-top: 40px;padding-bottom: 30px">UBAH PASSWORD</td>
			</tr>
		</table>
		<table width="250px" style="padding: 5px 5px 5px 5px; border-radius: 10px;box-shadow: 3px 3px 3px grey;">
			<?php
			session_start();

			include "koneksi.php";
			$user = $_SESSION['username'];
			$query="SELECT * FROM user WHERE username='$user'";
			$result=mysqli_query($connect,$query);
			if(mysqli_num_rows($result)>0){
				while($row = mysqli_fetch_array($result))
				{
					?>
					<form method="POST" action="prosesUbahPassword.php">
					<tr align="left">			
						<th>Password Lama</th>
						<td style="font-family: Bahnschrift;font-weight: lighter;padding-left: 20px"><input type="password" name="passwordlama"></td>
					</tr>
					<tr align="left">
						<th>Password Baru</th>
						<td style="font-family: Bahnschrift;font-weight: lighter;padding-left: 20px"><input type="password" name="passwordbaru"></td>
					</tr>
					<tr>
						<td align="center" colspan="2"><input style="background-color: #303e49;border-radius: 10px;color: white;cursor: pointer;" type="submit" name="kirim" value="UBAH" >
					</form></td>
					</tr>
					<tr>
						<td colspan="2" align="center" style="color: red;font-size: 13px">
							<?php

							switch($_GET['page'])
				{
					case "passwordLamaKosong";
					echo "Password Lama Kosong";
					break;
					case "passwordBaruKosong";
					echo "Password Baru Kosong";
					break;
					case "passwordTidakCocok";
					echo "Password Lama tidak cocok";
					break;
					case "passwordBerubah";
					echo "Password berhasil diubah";
					break;
				}
							?>
						</td>
					</tr>
					<?php 
				}
			}
			?>
			<tr>
				<table>
					<tr>
						<td style="padding-top: 130px;padding-right: 20px" align="center">
							<img src="image/cart.png" width="60px"><br>
							<font style="font-size: 12px">
								<b>Terlengkap dan Termudah</b><br>
								Produk voucher game tersedia di <br>TUMBAS. <br> Termasuk barang langka <br> dari game kesayangan kamu.</font>
							</td>
							<td style="padding-top: 130px;padding-right: 20px" align="center">
								<img src="image/dollar.png" width="60px"><br>
								<font style="font-size: 12px">
									<b>Lebih Murah dari yang Lain</b><br>
									Terbukti lebih murah dari <br>Steam Market <br> dan situs jual-beli lainnya <br> Cek aja langsung dan bandingkan</font>
								</td>
								<td style="padding-top: 130px;padding-right: 20px" align="center">
									<img src="image/car.png" width="60px"><br>
									<font style="font-size: 12px">
										<b>Pengiriman Cepat</b><br>
										Tersedia produk dengan pengiriman <br>instan <br> dan juga pengiriman 10 menit <br> Ga perlu nunggu lama.</font>
									</td>
									<td style="padding-top: 130px;padding-right: 20px" align="center">
										<img style="" src="image/trust.png" width="60px"><br>
										<font style="font-size: 12px">
											<b>Terpercaya dan Aman</b><br>
											Sudah pembeli baru <br>telah menjadi pelanggan <br> setia di TUMBAS <br> Jangan ngaku gamer <br> kalau belum belanja disini</font>
										</td>
									</tr>
								</table>
							</tr>
						</table>
					</font>

				</body>
				</html>