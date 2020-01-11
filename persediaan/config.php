<?php
$mysql_user="root";
$mysql_password="";
$mysql_database="persediaan";
$mysql_host="localhost";
$koneksi_db = mysql_connect($mysql_host, $mysql_user, $mysql_password);
mysql_select_db($mysql_database, $koneksi_db);  

define( 'VALIDASI', 1 );
define("nama_aplikasi","Sistem Informasi Persediaan");
define("nama_perusahaan","CV SKADA 77");
define("alamat_perusahaan","Jalan Sukamulya No. 77 Kuningan");
define("nama_pimpinan","Drs. Siapa Saja");

error_reporting(E_STRICT  | ~E_NOTICE);

include('fungsi.php');

?>
