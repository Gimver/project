<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<div id="main">
	

	<form method="POST" action="function.php">
		<input type="text" name="username" placeholder="Username"><br>
		<input type="password" name="password" placeholder="password" minlength="8" maxlength="20"><br>
		<button type="submit" name="login">Login</button>
		<p>Belum punya akun ? <a href="Register.php">Daftar disini</a></p> 
	<?php
		if (isset($_GET['pesan'])){
			if($_GET['pesan'] == "gagal"){
				echo "<p>Usenrname dan Password tidak sesuai !</p> 
				<p><a href='login.php'>Refersh Page</a></p>;
			}
		} 
		session_start();
		if (isset($_SESSION['usenrname'])) {
			header('Location:index.php');
		}

		?>
		
	</form><br>

</body>
</html>