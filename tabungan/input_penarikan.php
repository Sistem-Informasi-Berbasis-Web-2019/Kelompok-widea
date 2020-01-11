<?php
session_start();
include"../koneksi.php";

$id_siswa = $_POST['id_siswa'];
$penarikan = reset_rupiah($_POST['penarikan']);

$data = mysqli_query ($koneksi, " select  penarikan,
										  setoran,
										  sum(penarikan) as jumlah_penarikan,
										  sum(setoran) as jumlah_setoran
										  from 
										  tabungan
										  where
										  id_siswa = $id_siswa");
$row = mysqli_fetch_array ($data);
$saldo = $row['jumlah_setoran'] - $row['jumlah_penarikan'] - $penarikan;

$query = "insert INTO tabungan SET
								id_siswa = '$id_siswa',
								penarikan = '$penarikan',
								saldo = '$saldo'
								";

mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());
$_SESSION['pesan'] = 'Data berhasil di simpan...';
header('location:tabungan.html');

?>

