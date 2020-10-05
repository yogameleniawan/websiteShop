<?php
session_start();

include "koneksi.php";
$user = $_SESSION['username'];
$kode = $_POST['kode'];
$jenis = "Top Up";
$voucher = "SELECT * FROM topup WHERE voucher='$kode'";
$qvoucher = mysqli_query($connect,$voucher);
$rvoucher = mysqli_fetch_array($qvoucher);
$saldoVoucher = $rvoucher['saldo_topup'];
$u = "SELECT * FROM user WHERE username='$user'";
$qU = mysqli_query($connect,$u);
$rU = mysqli_fetch_array($qU);
$waktu = date("Y-m-d");
if(empty($_POST['kode'])){
        header('Location: index.php?page=kodeEmpty');
}else if($_POST['kode'] == $rvoucher['voucher']){
  $query="SELECT * FROM topup WHERE username='$user'";
  $result=mysqli_query($connect,$query);
  $row = mysqli_fetch_array($result);
      if($row['voucher'] == $rvoucher['voucher']){
        header('location: index.php?page=kodeKadaluarsa');
      }else{
      $jumlah = $rU['saldo'] + $rvoucher['saldo_topup'];
      $historiVoucher = "INSERT INTO topup(id,username,voucher,saldo_topup)
        VALUE('','$user','$kode','$saldoVoucher')";
      $update = "UPDATE user SET saldo='$jumlah' WHERE username='$user'";
      $sql="INSERT INTO histori(username,jenis,harga,tanggal,nomer,voucher)
        VALUE('$user','$jenis','$saldoVoucher','$waktu','$nomer','$kode')";
        $res_s = mysqli_query($connect,$sql); 
        $berhasil=mysqli_query($connect,$update);
        $historiBerhasil =mysqli_query($connect,$historiVoucher);
        header('Location: index.php?page=topUpBerhasil');
      }
}else{
  header('Location: index.php?page=kodeSalah');
}
?>