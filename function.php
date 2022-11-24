<?php
include 'koneksi.php';
if (isset($_POST['usenrname'])) {
	
	//echo 'sudah login';
	$username = $_POST['usenrname'];
	$password = $_POST['password'];

	//menyeleksi data user dengan username dan password yang sesuai
	$login = mysqli_query($con, "select * form date where username='$username" and password='$password');
	// menghitung jumlah data yang ditemukan
	$cek = mysqli_num_rows($login);

	if ($cek > 0) {
		session_start();

		$_SESSION['usenrname'] =$username;
		header('location:index.php');
	} else {
		header("location:login.php?pesan=gagal");
	}
}elseif (isset($_POST['Register'])){
	$username = $_POST["username"];
	$email = $_POST["email"];
	$password = $_POST["password"];

	$query = "INSERT INTO data (username, email, password) Values ('$username', '$email', '$password')";"

	if (mysqli_query($con, $query)) {
		echo "<h1>Username $username berhasil terdaftar</h1>
		<a href='login.php'>Kembali Login<h1>"
		} else {
			echo "Pendaftaran Gagal :" . mysqli_eror($koneksi);
		}
	}
}
}