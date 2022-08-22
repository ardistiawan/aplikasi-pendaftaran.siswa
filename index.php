<!DOCTYPE html>
<html>
<head>
	<title>LOGIN SMKN 1 SAYUNG</title>
	<link rel="stylesheet" href="style.css">
</head>
<body class="wallpaper">
	<br>
	<br>
	
	<br>
	<div style="text-align:center;">
	<img src="gambar/logosmk.png" alt="Logo SMKN 1 Sayung">
	<br>
	<br>
	</div>
	<div class="login">
	<h3>LOGIN</h3>
	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	<br/>
	<center>
	<form method="post" action="cek_login.php">
		<table>
			<tr>
				
				<td><input type="text" name="username" placeholder="Username"></td>
				
			</tr>
			<tr>
				
				<td><input type="password" name="password" placeholder="Password"></td>
				
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td><input type="submit" value="LOGIN" class="button"></td>
			</tr>
		</table>			
	</form>
	</center>
	<br>
	</div>
</body>
</html>