<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="styleVoucher.css">
</head>
<body>

	<font face="Bahnschrift">
		<table>
			<tr>
				<td colspan="3" align="center" style="padding-bottom: 40px;padding-top: 50px"><b>HASIL TRANSAKSI</b></td>
			</tr>
			<tr>
				<td style="background-color: #0ec1bb;color:white;padding : 10px 10px 10px 10px;box-shadow: 3px 3px 3px 3px grey;border-radius: 5px;" align="center">
					<?php
					if(empty($_SESSION['username'])){
						header ("Location: login.php");
					}else{
						echo $_SESSION['hasil'];
					}
					?>
				</td>
			</tr>
			
			<tr>
				<td colspan="3" align="center" style="padding-top: 70px"><a style="border-radius: 20px;background-color: #0ec1bb;padding: 6px 6px 6px 6px;text-decoration: none;color: white" class="item" href="index.php">Beranda</a></td>

			</tr>
			<tr>
				<table>
					<tr>
						<td style="padding-top: 130px;padding-right: 20px" align="center">
							<img src="image/cart.png" width="60px"><br>
							<font style="font-size: 12px">
								<b>Terlengkap dan Termudah</b><br>
								Produk voucher game tersedia di <br>E-Voucher. <br> Termasuk barang langka <br> dari game kesayangan kamu.</font>
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
											Sudah pembeli baru <br>telah menjadi pelanggan <br> setia di E-Voucher <br> Jangan ngaku gamer <br> kalau belum belanja disini</font>
										</td>
									</tr>
								</table>
							</tr>
						</table>
					</font>

				</body>
				</html>