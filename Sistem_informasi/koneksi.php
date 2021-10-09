<?php 
$server="localhost";
$user="root";
$password="";
$nama_database="mahasiswa";
$conn=mysql_connect($server,$user,$password) or die("ada yang salah : $php_errormsg".$php_errormsg);
if (!$conn) {
	die('tak konek'.mysql_error());
}

$db=mysql_select_db($nama_database,$conn)
or die("terjadi kesalahan :".mysql_error());
if ($db) {
	echo "Berhasil";
}
else {
	echo "Gagal";
}
 ?>
