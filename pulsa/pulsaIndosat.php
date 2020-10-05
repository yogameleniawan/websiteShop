<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="styleVoucher.css">
</head>
<body>

	<font face="Bahnschrift">
		<table align="left" width="100%">
		<tr>
				<td width="10px" style="padding-top: 20px;padding-left: 10px;padding-right: 10px"><a style="border-radius: 20px;background-color: #303e49;padding: 6px 6px 6px 6px;text-decoration: none;color: white;font-size: 14px;padding-right:" class="item" href="index.php">Beranda</a></td>
				<td width="10px" align="center" style="padding-top: 20px;font-size: 18px"> <b>></b> </td>
				<td width="100px" style="padding-top: 20px;padding-left: 7px"><a style="border-radius: 20px;background-color: #303e49;padding: 6px 6px 6px 6px;text-decoration: none;color: white;font-size: 14px" class="item" href="index.php?page=pulsa">Top Up Pulsa</a></td>
				<td width="10px" align="center" style="padding-top: 20px;font-size: 18px"> <b>></b> </td>
				<td  style="padding-top: 20px;padding-left: 7px"><a style="border-radius: 20px;background-color: #0ec1bb;padding: 6px 6px 6px 6px;text-decoration: none;color: white;font-size: 14px" class="item" href="index.php?page=pulsaIndosat">Pulsa Indosat</a></td>
			
		</tr>
	</table>
	<table>
		<tr>
			<td colspan="3" align="center" style="padding-bottom: 40px;padding-top: 50px"><b>PULSA INDOSAT</b></td>
		</tr>
		
		<tr>
			<td colspan="3" style="padding-bottom: 10px">
					<form method="POST">
					<label>Masukan nomer telepon anda : </label>
					<input type="number" name="nomer">
					<input type="submit" name="submit" value="Konfirm">
					</form>
					<?php
					echo "<br>";
					echo "Nomer yang akan anda isi : ";
					echo $_POST['nomer'];
					$_SESSION['pulsa']=$_POST['nomer'];
					if(empty($_POST['nomer'])){
						?><i style="color:red">Nomor tidak boleh kosong</i><?php
					}
					?>
			</td>
		</tr>
		<tr>
			<td>
				<a href="index.php?page=PULSAINDOSAT1" style="text-decoration: none;color: black" onclick="javascript:return confirm('Anda yakin ingin membeli?')">
				<table class="item" style="border-radius: 5px;background-color: white;margin-right: 10px">
					<tr>
						<td ><img src="image/indosat.jpg" width="160px"></td>
					</tr>
					<tr>
						<td align="center">5.000 Pulsa<br>Rp. 5.300</td>
					</tr>
				</table>
				</a>
			</td>
			<td >
				<a href="index.php?page=PULSAINDOSAT2" style="text-decoration: none;color: black"  onclick="javascript:return confirm('Anda yakin ingin membeli?')">
				<table class="item" style="border-radius: 5px;background-color: white;margin-right: 10px">
					<tr>
						<td ><img src="image/indosat.jpg" width="160px"></td>
					</tr>
					<tr>
						<td align="center">20.000 Pulsa<br>Rp. 19.800</td>
					</tr>
				</table>
				</a>
			</td>
			<td >
				<a href="index.php?page=PULSAINDOSAT3" style="text-decoration: none;color: black"  onclick="javascript:return confirm('Anda yakin ingin membeli?')">
				<table class="item" style="border-radius: 5px;background-color: white;margin-right: 10px">
					<tr>
						<td ><img src="image/indosat.jpg" width="160px"></td>
					</tr>
					<tr>
						<td align="center">50.000 Pulsa<br>Rp. 49.000</td>
					</tr>
				</table>
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
		</form>
	</table>
	</font>

</body>
</html>