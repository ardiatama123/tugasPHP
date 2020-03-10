<html>
 <head>
  <title></title>
<link rel="stylesheet" type="text/css" href="css.css">
 </head>
 </html>
<?php

$Nama=$_POST['Nama'];
$NPM=$_POST['NPM'];
$Alamat=$_POST['Alamat'];
$Jurusan=$_POST['Jurusan'];
$Tempat=$_POST['Tempat'];
$Tgl=$_POST['Tgl'];
$Bln=$_POST['Bln'];
$Thn=$_POST['Thn'];
$JK=$_POST['JK'];

if(empty($_POST['Nama'])){
	header('Location:halamanbiodata.php');
}
elseif(empty($_POST['NPM'])){
	header('Location:halamanbiodata.php');
}
elseif(empty($_POST['Alamat'])){
	header('Location:halamanbiodata.php');
}
elseif(empty($_POST['Jurusan'])){
	header('Location:halamanbiodata.php');
}
elseif(empty($_POST['Tempat'])){
	header('Location:halamanbiodata.php');
}
elseif(empty($_POST['Tgl'])){
	header('Location:halamanbiodata.php');
}
elseif(empty($_POST['Bln'])){
	header('Location:halamanbiodata.php');
}
elseif(empty($_POST['Thn'])){
	header('Location:halamanbiodata.php');
}
elseif(empty($_POST['JK'])){
	header('Location:halamanbiodata.php');
}
else{
echo "<center><h2>BIODATA</h2><br>";	
echo "<center>Nama     : $Nama<br>";
echo "<center>NPM      : $NPM<br>";
echo "<center>Alamat : $Alamat<br>";
echo "<center>Jurusan  : $Jurusan<br>";
echo "<center>Tempat dan Tanggal Lahir : $Tempat, $Tgl/$Bln/$Thn<br>";
echo "<center>Jenis Kelamin : $JK<br>";
}
?>