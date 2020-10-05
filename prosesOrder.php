<?php  
include "koneksi.php";
error_reporting(0);
switch($_GET['page'])
{
	case "PB1200";
	$harga = 10000;
	$voucher = 1200;
	$jenis = "PB CASH";
	break;
	case "PB2400";
	$harga = 20000;
	$voucher = 2400;
	$jenis = "PB CASH";
	break;
	case "PBPromo";
	$harga = 92500;
	$voucher = 12000;
	$jenis = "PB CASH PROMO";
	break;
	case "PB6000";
	$harga = 50000;
	$voucher = 6000;
	$jenis = "PB CASH";
	break;
	case "UC50";
	$harga = 15000;
	$voucher = 50;
	$jenis = "UC PUBG";
	break;
	case "UC250";
	$harga = 59500;
	$voucher = 250;
	$jenis = "UC PUBG";
	break;
	case "UC1250";
	$harga = 252500;
	$voucher = 1250;
	$jenis = "UC PUBG";
	break;
	case "UCPROMO";
	$harga = 100000;
	$voucher = 500;
	$jenis = "UC PUBG";
	break;
	case "PULSA5";
	$harga = 5300;
	$voucher = 5000;
	$pulsa = "PULSA TELKOMSEL";
	break;
	case "PULSA20";
	$harga = 19800;
	$voucher = 20000;
	$pulsa = "PULSA TELKOMSEL";
	break;
	case "PULSA50";
	$harga = 49000;
	$voucher = 50000;
	$pulsa = "PULSA TELKOMSEL";
	break;
	case "PULSAINDOSAT1";
	$harga = 5300;
	$voucher = 5000;
	$pulsa = "PULSA INDOSAT";
	break;
	case "PULSAINDOSAT2";
	$harga = 19800;
	$voucher = 20000;
	$pulsa = "PULSA INDOSAT";
	break;
	case "PULSAINDOSAT3";
	$harga = 49000;
	$voucher = 50000;
	$pulsa = "PULSA INDOSAT";
	break;
	case "PULSASMART1";
	$harga = 5300;
	$voucher = 5000;
	$pulsa = "PULSA SMARTFREN";
	break;
	case "PULSASMART2";
	$harga = 19800;
	$voucher = 20000;
	$pulsa = "PULSA SMARTFREN";
	break;
	case "PULSASMART3";
	$harga = 49000;
	$voucher = 50000;
	$pulsa = "PULSA SMARTFREN";
	break;
	case "PULSAAXIS1";
	$harga = 5300;
	$voucher = 5000;
	$pulsa = "PULSA AXIS";
	break;
	case "PULSAAXIS1";
	$harga = 19800;
	$voucher = 20000;
	$pulsa = "PULSA AXIS";
	break;
	case "PULSAAXIS1";
	$harga = 49000;
	$voucher = 50000;
	$pulsa = "PULSA AXIS";
	break;
	case "PULSAPROMO";
	$harga = 97500;
	$voucher = 100000;
	$pulsa = "PULSA TELKOMSEL";
	break;
	case "30GB";
	$harga = 500;
	$voucher = "INTERNET";
	$jenis = "INDOSAT 30 GB";
	break;
	case "TELKOMSEL1";
	$harga = 20500;
	$voucher = "INTERNET";
	$jenis = "TELKOMSEL 3.5 GB";
	break;
	case "TELKOMSEL2";
	$harga = 61000;
	$voucher = "INTERNET";
	$jenis = "TELKOMSEL 6 GB";
	break;
	case "TELKOMSEL3";
	$harga = 72000;
	$voucher = "INTERNET";
	$jenis = "TELKOMSEL 11 GB";
	break;
	case "INDOSAT1";
	$harga = 24900;
	$voucher = "INTERNET";
	$jenis = "INDOSAT 1 GB";
	break;
	case "INDOSAT2";
	$harga = 57450;
	$voucher = "INTERNET";
	$jenis = "INDOSAT 3 GB";
	break;
	case "INDOSAT3";
	$harga = 95950;
	$voucher = "INTERNET";
	$jenis = "INDOSAT 10 GB";
	break;
	case "SMART1";
	$harga = 30000;
	$voucher = "INTERNET";
	$jenis = "SMARTFREN 10 GB";
	break;
	case "SMART2";
	$harga = 40000;
	$voucher = "INTERNET";
	$jenis = "SMARTFREN 30 GB";
	break;
	case "SMART3";
	$harga = 100000;
	$voucher = "INTERNET";
	$jenis = "SMARTFREN 60 GB";
	break;
	case "AXIS1";
	$harga = 16785;
	$voucher = "INTERNET";
	$jenis = "AXIS 1,5 GB";
	break;
	case "AXIS2";
	$harga = 30750;
	$voucher = "INTERNET";
	$jenis = "AXIS 5 GB";
	break;
	case "AXIS3";
	$harga = 66900;
	$voucher = "INTERNET";
	$jenis = "AXIS 12GB";
	break;
}
include "generateCode.php";
$user = $_SESSION['username'];
$nomer = $_SESSION['pulsa'];
$kode = $_SESSION['kode'];
$query="SELECT saldo FROM user WHERE username='$user'";
$result=mysqli_query($connect,$query);
if(mysqli_num_rows($result)>0){
	while($row = mysqli_fetch_array($result))
	{		
		$saldo = $row[saldo];
		if($pulsa){
			if(empty($_SESSION['pulsa'])){
				echo "Nomer tidak boleh kosong<br>";
				?><a href="javascript:history.back()">Kembali</a>
				<?php
			}else if($saldo > $harga){
				$waktu = date("Y-m-d");
				$hasil = $row["saldo"] - $harga;
				$update = "UPDATE user SET saldo='$hasil' WHERE username='$user'";
				$sql="INSERT INTO histori(username,jenis,harga,tanggal,nomer,voucher)
				VALUE('$user','$pulsa','$harga','$waktu','$nomer','')";
				$res_s = mysqli_query($connect,$sql);  
				$berhasil=mysqli_query($connect,$update);
			}
			else if($saldo < $harga){
				echo "Maaf saldo anda kurang";
			}
		}
		else if($saldo > $harga){
			$waktu = date("Y-m-d");
				$hasil = $row["saldo"] - $harga;
				$update = "UPDATE user SET saldo='$hasil' WHERE username='$user'";
				$sql="INSERT INTO histori
				(username,jenis,harga,tanggal,nomer,voucher)
				VALUE('$user','$jenis','$harga','$waktu','','$kode')";
				$res_s = mysqli_query($connect,$sql);  
				$berhasil=mysqli_query($connect,$update);
			if($jenis){
				
			}
		}
		else if($saldo < $harga){
			echo "Maaf saldo anda kurang";
		}
	}
}
if(isset($berhasil)){

	$a="";
	if($jenis){
		$a= "Kode voucher = ".$_SESSION['kode']."<br> Pembelian ".$voucher." ".$jenis." berhasil <br>"."------- Harga Rp. ".$harga." -------<br><br>";
	}else if($pulsa){
		$a= "Pembelian pulsa ".$voucher." berhasil <br>"."Ke Nomer : ".$_SESSION['pulsa']."<br>"."------- Harga Rp. ".$harga." -------<br><br>";
	}

	$_SESSION['hasil'] = "-------------------------------"
		."<br>"
		.$a
		."<br>"
		."Terimakasih sudah belanja";
	header('location: index.php?page=berhasil');

}
?>