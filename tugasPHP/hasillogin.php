<html>
<head>
	<meta http-equiv="refresh" content="10; url=http://localhost/praktikum5/tugas/halamanbiodata.php">
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<?php
if(empty($_POST['nama'])){
	header('Location:kosong.php');
}
elseif (empty($_POST['email'])) {
	header('Location:kosong.php');
}
else
{
	echo "<center><h3>Login Sukses</h3></center>";
	echo "<center>Nama : ".$_POST['nama']."<center><br>";
	echo "<center>Email : ".$_POST['email']."<center><br>";
	date_default_timezone_set('Asia/jakarta');
	echo date("l-d-m-y, g:i:s a");
	echo "<br><br>"; 
	echo "<center><h2>Dalam 10 detik anda akan dialihkan ke halaman biodata</h2></center>";
}
?>