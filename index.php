<!DOCTYPE html>
<html>
<head>
	<title>Situs Jual Beli Voucher Online Terlengkap | Tumbas</title>
	<link rel="shortcut icon" href="logo.png">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="
background : url(image/bg.jpg);
padding: 0;
margin: 0;
height: 100%;
background-repeat: no-repeat;
background-size: cover;">

<?php
session_start();
?>
	
<style>
	
.header {
	padding-right: 50px;
	padding-top: 20px;
}

.isi {
  padding: 16px;
}

.sticky {
	background-color: #191919;
  position: fixed;
  top: 0;
	transition: all 0.6s;
}
	
.sticky + .isi{
	padding-top : 2px;
}
	
</style>
	
<table border="0px" width=100%; style="padding-right: 50px;margin-top: 20px">
	<!-- Heading -->
	<tr class="header" id="myHeader">
		<td width="950px" style="padding-left:50px"><span onclick="openNav()"><img src="image/menu.png" width="20px" style="cursor: pointer;padding-right:15px"></span><font face="Bahnschrift" color="white" size="5" style="font-weight: bold">TUMBAS </font><font face="Bahnschrift" color="white" size="5" >shop.</font></td>
		<td align="center" width="250px">
			<table>
				<td>
					<?php
					if(isset($_SESSION['username'])){
						include"saldo.php";
					}else{
						?> <table style="background-color: white;padding: 3px 15px 3px 15px;border-radius: 30px">
							<tr>
							<td rowspan="2" style="padding-right: 6px"><img src="image/info.png" style="border-radius: 30px" width="40px"></td>
							<td style="font-family: Bahnschrift"> GUEST </td>
						</tr>
						<tr>
						<td style="font-family: Bahnschrift;font-weight: lighter;font-size:12px">Rp. - </td>
						</tr>
						</table><?php
					}
					?>
				</td>
			</table>
		</td>
		<td align="right">
			<div class="login" style="font-size: 16px;font-family: calibri;padding-top: 5px;padding-left: 10px">
				<div style="float: left;padding-right:5px;"><img src="image/logout.png" style="width: 30px;height: 30px;">
				</div>
				<div style="color: white;padding-top: 5px;text-align:left;">
					<?php  
						if(isset($_SESSION['username'])){
						echo '<a href="logout.php" style="text-decoration:none;color:white">Logout</a>';
					}else{
						echo '<a href="login.php" style="text-decoration:none;color:white">Login</a>';
					}
					?>
				</div>
				</div>
		</td>
	</tr>

	<!-- Heading -->

	<!-- Judul -->
	<table align="center" style="padding-top:80px">
		<tr>
			<td align="center" style="padding-top: 20px;padding-bottom:20px">
				<img src="image/tumbas.png" width="300px" style="background-color: white;border-radius: 40px">
			</td>
		</tr>
		<tr>
			<td colspan="5" align="center" style="padding-top: 10px"><font face="Bahnschrift" color="white" style="font-weight: lighter;" size="5">
			NIKMATI LAYANAN</font><font face="Bahnschrift" color="white" size="5"> BEST SELER </font></td>
		</tr>
		<tr>
			<td colspan="5" align="center" style="padding-bottom:20px">
				<font face="Bahnschrift" color="white" size="7" style="font-weight: bold">KAMI SEDIAKAN </font>
				<font class="animation" face="Bahnschrift" color="white" size="7">KEPERLUAN ANDA</font>
			</td>
		</tr>
		<tr></tr>
	</table>
	<!-- Judul -->
	<table width="95%" align="center" height="600px" style="padding-top:40px">
		<tr class="isi">
			<td class="konten" align="center" style="background-color: white;border-radius: 20px;padding-bottom: 50px">
				<?php
				error_reporting(0);
				switch($_GET['page'])
				{
					default:
					include "index.html";
					break;
					case "berhasil";
					include "output.php";
					break;
					case "voucherGame";
					include "voucher/voucherGame.php";
					break;
					case "voucherInternet";
					include "voucher/voucherInternet.php";
					break;
					case "pulsa";
					include "pulsa/pulsa.php";
					break;
					case "akun";
					include "akun.php";
					break;
					case "voucherPB";
					include "voucher/voucherPB.php";
					break;
					case "PB1200";
					include "orderVoucher.php";
					break;
					case "PB2400";
					include "orderVoucher.php";
					break;
					case "PBPromo";
					include "orderVoucher.php";
					break;
					case "PB6000";
					include "orderVoucher.php";
					break;
					case "voucherPUBG";
					include "voucher/voucherPUBG.php";
					break;
					case "UC50";
					include "orderVoucher.php";
					break;
					case "UC250";
					include "orderVoucher.php";
					break;
					case "UC1250";
					include "orderVoucher.php";
					break;
					case "PULSA5";
					include "orderVoucher.php";
					break;
					case "PULSA20";
					include "orderVoucher.php";
					break;
					case "PULSA50";
					include "orderVoucher.php";
					break;
					case "KONFIRMASI";
					include "pulsa/pulsaPromo.php";
					break;
					case "PULSAPROMO";
					include "orderVoucher.php";
					break;
					case "pulsaTelkomsel";
					include "pulsa/pulsaTelkomsel.php";
					break;
					case "pulsaIndosat";
					include "pulsa/pulsaIndosat.php";
					break;
					case "pulsaSmart";
					include "pulsa/pulsaSmart.php";
					break;
					case "pulsaAxis";
					include "pulsa/pulsaAxis.php";
					break;
					case "30GB";
					include "orderVoucher.php";
					break;
					case "voucherTelkomsel";
					include "voucher/voucherTelkomsel.php";
					break;
					case "voucherIndosat";
					include "voucher/voucherIndosat.php";
					break;
					case "voucherSmart";
					include "voucher/voucherSmart.php";
					break;
					case "voucherAxis";
					include "voucher/voucherAxis.php";
					break;
					case "TELKOMSEL1";
					include "orderVoucher.php";
					break;
					case "TELKOMSEL2";
					include "orderVoucher.php";
					break;
					case "TELKOMSEL3";
					include "orderVoucher.php";
					break;
					case "INDOSAT1";
					include "orderVoucher.php";
					break;
					case "INDOSAT2";
					include "orderVoucher.php";
					break;
					case "INDOSAT3";
					include "orderVoucher.php";
					case "PULSAINDOSAT1";
					include "orderVoucher.php";
					break;
					case "PULSAINDOSAT2";
					include "orderVoucher.php";
					break;
					case "PULSAINDOSAT3";
					include "orderVoucher.php";
					break;
					case "SMART1";
					include "orderVoucher.php";
					break;
					case "SMART2";
					include "orderVoucher.php";
					break;
					case "SMART3";
					include "orderVoucher.php";
					case "PULSASMART1";
					include "orderVoucher.php";
					break;
					case "PULSASMART2";
					include "orderVoucher.php";
					break;
					case "PULSASMART3";
					include "orderVoucher.php";
					break;
					case "AXIS1";
					include "orderVoucher.php";
					break;
					case "AXIS2";
					include "orderVoucher.php";
					break;
					case "AXIS3";
					include "orderVoucher.php";
					break;
					case "PULSAAXIS1";
					include "orderVoucher.php";
					break;
					case "PULSAAXIS2";
					include "orderVoucher.php";
					break;
					case "PULSAAXIS3";
					include "orderVoucher.php";
					break;
					case "UCPROMO";
					include "orderVoucher.php";
					break;
					case "histori";
					include "histori.php";
					break;
					case "infoAkun";
					include "infoAkun.php";
					break;
					case "updateBerhasil";
					include "infoAkun.php";
					break;
					case "updateGagal";
					include "infoAkun.php";
					break;
					case "usernameEmpty";
					include "infoAkun.php";
					break;
					case "nameEmpty";
					include "infoAkun.php";
					break;
					case "fieldEmpty";
					include "infoAkun.php";
					break;
					case "ubahPassword";
					include "ubahPassword.php";
					break;
					case "passwordBerubah";
					include "ubahPassword.php";
					break;
					case "passwordLamaKosong";
					include "ubahPassword.php";
					break;
					case "passwordBaruKosong";
					include "ubahPassword.php";
					break;
					case "passwordTidakCocok";
					include "ubahPassword.php";
					break;
					case "topUp";
					include "topUp.php";
					break;
					case "kodeEmpty";
					include "topUp.php";
					break;
					case "kodeKadaluarsa";
					include "topUp.php";
					break;
					case "kodeSalah";
					include "topUp.php";
					break;
					case "topUpBerhasil";
					include "topUp.php";
					break;
				}
				?>
			</td>
		</tr>
	</table>
	<!-- SideMenu -->
	<div id="mySidenav" class="sidenav">
		<img src="image/tumbas.png" width="100px" style="background-color: white;border-radius: 40px;margin-left: 30px;margin-bottom: 10px;cursor: pointer;" onclick="document.location='index.php';return false;">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="index.php?page=voucherGame">Voucher Game</a>
		<a href="index.php?page=voucherInternet">Voucher Internet</a>
		<a href="index.php?page=pulsa">Pulsa</a>
		<?php  
			if(isset($_SESSION['username'])){
				?><a href="index.php?page=akun">Akun</a><?php
			}else{
				?><a href="login.php">Akun</a><?php
			}
		?>
	</div>

	<div id="main">
		<script type="text/javascript">
			function openNav() {
				document.getElementById("mySidenav").style.width = "250px";
				document.getElementById("main").style.marginLeft = "250px";
				document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
			}
			function closeNav() {
				document.getElementById("mySidenav").style.width = "0";
				document.getElementById("main").style.marginLeft = "0";
				document.body.style.backgroundColor = "white";
			}

		</script>
		<script>
		window.onscroll = function() {myFunction()};

		var header = document.getElementById("myHeader");
		var sticky = header.offsetTop;

		function myFunction() {
		  if (window.pageYOffset > sticky) {
			header.classList.add("sticky");
		  } else {
			header.classList.remove("sticky");
		  }
		}
		</script>
	</div>
	<!-- SideMenu -->
	<table width="100%" style="background-color: #191919;height: 50px;padding-top: 10px;padding-bottom: 10px">
		<tr>
			<td align="center">
				<img src="image/tumbas.png" width="80px" style="background-color: white;border-radius: 10px;">
			</td>	
		</tr>
		<tr>
			<td align="center" width="50%" style="color: white;font-family: Bahnschrift;font-weight: lighter;">
				Copyright © 2020 - Developed by <a style="color:#0ec1bb;text-decoration: none;" href="http://www.instagram.com/yogameleniawan" target="_blank">Yoga MP.</a>
			</td>
		</tr>
	</table>
</body>
</html>
