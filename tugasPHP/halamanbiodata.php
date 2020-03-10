<html>
 <head>
  <title></title>
<link rel="stylesheet" type="text/css" href="css.css">
 </head>
 <body>
  <center><p><font size="10">FORM BIODATA MAHASISWA ANGKATAN 18 FIK  </p></font>
  <table border=0>
  <form action="hasilbiodata.php" method="post">
  <tr>
   <td>Nama Lengkap</td>
   <td>:</td>
   <td><input type=text name=Nama></td>
  </tr>
  <tr>
   <td>NPM</td>
   <td>:</td>
   <td><input type=text name=NPM></td>
  </tr>
  <tr>
   <td>Alamat</td>
   <td>:</td>
   <td><input type=text name=Alamat></td>
  </tr>
  <tr>
  <td>Jurusan</td>
  <td>:</td>
   <td>
    <input type=radio name="Jurusan" value="Tekni Informatika">Teknik Informatika
    <br>
    <input type=radio name="Jurusan" value="Sistem Informasi">Sistem Informasi
   </td>
  </tr>
  <tr>
   <td>Tempat dan Tanggal Lahir</td>
   <td>:</td>
   <td><input type=text name=Tempat size=15>
   <select name=Tgl>
   <option name=Tgl>Tgl
   <option name=Tgl>1
   <option name=Tgl>2
   <option name=Tgl>3
   <option name=Tgl>4
   <option name=Tgl>5
   <option name=Tgl>6
   <option name=Tgl>7
   <option name=Tgl>8
   <option name=Tgl>9
   <option name=Tgl>10
   <option name=Tgl>11
   <option name=Tgl>12
   <option name=Tgl>13
   <option name=Tgl>14
   <option name=Tgl>15
   <option name=Tgl>16
   <option name=Tgl>17
   <option name=Tgl>18
   <option name=Tgl>19
   <option name=Tgl>20
   <option name=Tgl>21
   <option name=Tgl>22
   <option name=Tgl>23
   <option name=Tgl>24
   <option name=Tgl>26
   <option name=Tgl>27
   <option name=Tgl>28
   <option name=Tgl>29
   <option name=Tgl>30
   <option name=Tgl>31
   </select>
   <select name=Bln>
   <option name=Bln>Bln
   <option name=Bln>Januari
   <option name=Bln>Februari
   <option name=Bln>Maret
   <option name=Bln>April
   <option name=Bln>Mei
   <option name=Bln>Juni
   <option name=Bln>Juli
   <option name=Bln>Agustus
   <option name=Bln>September
   <option name=Bln>Oktober
   <option name=Bln>November
   <option name=Bln>Desember
   </select>
   <select name=Thn>
   <option name=Thn>Thn
   <option name=Thn>2002
   <option name=Thn>2001
   <option name=Thn>2000
   <option name=Thn>1999
   <option name=Thn>1998
   <option name=Thn>1997
   <option name=Thn>1996
   <option name=Thn>1995
   
   </select>
   </td>
  </tr>
  <tr>
   <td>Jenis Kelamin</td>
   <td>:</td>
   <td><input type=radio name=JK value=Laki-laki>Laki-laki
       <br>
       <input type=radio name=JK value=Perempuan>Perempuan
   </td>
  </tr>
  <tr>
   <td> </td>
   <td> </td>
   <td><input type="reset" name=kembali value=Reset>
   <input type="submit" name=tambah value=Kirim></td>
  </tr>
  </form>
  </table>
 </body>
</html>