<?php  
$random="SELECT kode_voucher FROM voucher ORDER BY RAND()LIMIT 1;";
$resultRandom =mysqli_query($connect,$random);
if(mysqli_num_rows($resultRandom)>0){
	while($row = mysqli_fetch_array($resultRandom))
	{
		$_SESSION['kode']=$row["kode_voucher"];
	}
}
?>