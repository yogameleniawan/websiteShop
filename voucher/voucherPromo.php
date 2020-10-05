<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="styleIndex.css">
</head>
<body>

	<font face="Bahnschrift">
		<table>
			<tr>
				<td colspan="3" align="center" style="padding-bottom: 20px;padding-top: 50px">
					PULSA TELKOMSEL PROMO #DiRumahAja
				</td>
			</tr>
			<tr>
				<td align="center"><img src="image/telkomsel.jpg" width="160px"></td>
			</tr>
			<tr>
				<td align="center" style="padding-bottom: 30px">100.000 Pulsa<br><font style="text-decoration: line-through red">Rp. 100.000</font><br>
					<font style="color: red;font-style: italic;"><b>Rp. 97.500</b></font><br><br>
					<b style="background-color: red;color: white;padding: 2px 2px 2px 2px;border-radius: 15px;font-size: 10px">PROMO #DiRumahAja</b>
				</td>
			</tr>
			<tr>
				<td colspan="3" style="padding-bottom: 15px">
					<form method="POST">
						<label>Masukan nomer telepon anda : </label>
						<input type="text" name="nomer">
						<input type="submit" name="submit" value="Konfirm">
					</form>
					<?php
					echo "<br>";
					echo "Nomer yang akan anda isi : ";
					echo $_POST['nomer'];
					$_SESSION['pulsa']=$_POST['nomer'];
					?>
				</td>
			</tr>
			<tr>
				<td colspan="3" align="center">
				<a href="index.php?page=PULSAPROMO" style="text-decoration: none;color: black;background-color: #0ec1bb;border-radius: 10px;padding: 7px 12px 7px 12px;color: white" onclick="javascript:return confirm('Anda yakin ingin membeli?')">Beli
				</a>
				</td>
			</tr>
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