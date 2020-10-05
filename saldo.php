<?php
include "koneksi.php";
		$user = $_SESSION['username'];
		$query="SELECT * FROM user WHERE username='$user'";
		$result=mysqli_query($connect,$query);
		if(mysqli_num_rows($result)>0){
			while($row = mysqli_fetch_array($result))
			{
				?>
				<tr>
					<td style="background-color: white;padding: 3px 15px 3px 15px;border-radius: 30px">
					<table>
						<tr>
							<td rowspan="2" style="padding-right: 6px"><img src="image/info.png" style="border-radius: 30px" width="40px"></td>
							<td style="font-family: Bahnschrift"> <?php echo $row["username"] ?></td>
						</tr>
						<tr>
						<td style="font-family: Bahnschrift;font-weight: lighter;font-size:12px">Rp. <?php echo $row["saldo"] ?></td>
						</tr>
					</table>
					
					<?php 
				}
			}
?>