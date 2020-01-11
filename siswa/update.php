<?php
session_start();
$id = $_POST['id_siswa'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];

$query = "UPDATE siswa SET
								nama = '$nama',
								jenis_kelamin = '$jenis_kelamin',
								alamat = '$alamat',
								telepon = '$telepon'
								WHERE id_siswa = '$id'
								";

mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());
$_SESSION['pesan'] = 'Update data berhasil...';
header('location:siswa.html');

?>

