<?php

session_start();
$koneksi = mysqli_connect("localhost","root","","kasir");

if(isset($_POST["login"])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$check = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
	$hitung = mysqli_num_rows($check);

	if($hitung>0){
		$_SESSION['login']=true;
		header('location:index.php');
	} else {
		echo"
			<script>
				alert('Username atau Password salah')
				window.location.href='login.php'
			</script>
		";
	}
}