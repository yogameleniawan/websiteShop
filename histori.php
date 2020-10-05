<link rel="stylesheet" type="text/css" href="styleAkun.css">
<font face="Bahnschrift">
<table align="left" width="100%" style="margin-bottom: 80px">
		<tr>
				<td width="10px" style="padding-top: 20px;padding-left: 10px;padding-right: 10px"><a style="border-radius: 20px;background-color: #303e49;padding: 6px 6px 6px 6px;text-decoration: none;color: white;font-size: 14px;padding-right:" class="item" href="index.php">Beranda</a></td>
				<td width="10px" align="center" style="padding-top: 20px;font-size: 18px"> <b>></b> </td>
				<td width="10px" style="padding-top: 20px;padding-left: 10px;padding-right: 10px"><a style="border-radius: 20px;background-color: #303e49;padding: 6px 6px 6px 6px;text-decoration: none;color: white;font-size: 14px;padding-right:" class="item" href="index.php?page=akun">Akun</a></td>
				<td width="10px" align="center" style="padding-top: 20px;font-size: 18px"> <b>></b> </td>
				<td  style="padding-top: 20px;padding-left: 7px"><a style="border-radius: 20px;background-color: #0ec1bb;padding: 6px 6px 6px 6px;text-decoration: none;color: white;font-size: 14px" class="item" href="index.php?page=histori">Histori Transaksi</a></td>
			
		</tr>
		
	</table>
<table style="box-shadow: 2px 2px 2px 2px grey;padding:10px 10px 10px 10px;border-radius: 8px">
	<tr>
		<td colspan="5" align="center" style="padding-bottom : 12px">HISTORI TRANSAKSI</td>
	</tr>
	<tr style="background-color: #0ec1bb">
		<th>Jenis</th>
		<th>Nominal</th>
		<th>Tanggal</th>
		<th>Nomer HP</th>
		<th>Voucher</th>
	</tr>
	<?php
	session_start();

	include "koneksi.php";
	$user = $_SESSION['username'];
	$query="SELECT * FROM histori WHERE username='$user'";
	$result=mysqli_query($connect,$query);
	if(mysqli_num_rows($result)>0){
		while($row = mysqli_fetch_array($result))
		{
			?>

			<tr>
				<td style="font-family: Bahnschrift;font-weight: lighter;"><?php echo $row["jenis"] ?></td>
				<td style="font-family: Bahnschrift;font-weight: lighter;"><?php echo $row["harga"] ?></td>
				<td style="font-family: Bahnschrift;font-weight: lighter;"><?php echo $row["tanggal"] ?></td>
				<td style="font-family: Bahnschrift;font-weight: lighter;"><?php echo $row["nomer"] ?></td>
				<td style="font-family: Bahnschrift;font-weight: lighter;"><?php echo $row["voucher"] ?></td>
			</tr>
			<?php 
		}?>
			<tr>
				<td style="font-family: Bahnschrift" colspan="5"  align="center">
					<form method="POST" action="deleteHistori.php">
						<input style="background-color: #303e49;border-radius: 10px;color: white;cursor: pointer;" type="submit" name="delete" value="Hapus Histori Transaksi" onclick="javascript:return confirm('Anda yakin ingin menghapus?')">
					</form>
				</td>
			</tr>
	<?php
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