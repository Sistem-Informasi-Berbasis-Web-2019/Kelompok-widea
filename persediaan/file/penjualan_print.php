<?php
session_start();
if($_SESSION[level]=='sales'||$_SESSION[level]=='manajer') {
include('../config.php');
$sql_tbltransaksi=mysql_query("select * from v_laporan_penjualan
where Tgltransaksi like '$_GET[bln]%' and jumlah>0  order by IDtransaksi desc") or die
(mysql_error());
$hari_ini=date("d-M-Y");

?>
<html>
<head>
<title>Aplikasi Penjualan Barang</title>
<link rel="stylesheet" type="text/css" href="../css/print.css" />
</head>
<body>
<h2 align="center">Laporan Penjualan Barang<br/>
<?php echo nama_perusahaan;?><br>
<?php echo alamat_perusahaan;?></h2>
<p><b>Bulan : <?php echo bln_indonesia($_GET[bln]);?></b></p>

<table align="center" class="table">
<tr>
<th width="20"><b>No.</th>
<th>Tanggal</th>
<th width="150"><b>Barang</th>
<th>Keterangan</th>
<th>Harga Pokok</th>
<th>Jml. Terjual</th>
<th  colspan="2">Jumlah (Rp.)</th>
</tr>
<?php
while($baris_tbltransaksi=mysql_fetch_array($sql_tbltransaksi)) {
$no++;
if($n==0) {$warna="";$n++;} else {$warna="#dedee";$n--;}
?>
<tr valign="top"bgcolor="$warna">
<td><?php echo $no;?>.</td>
<td><?php echo $baris_tbltransaksi[Tgltransaksi];?></td>
<td><?php echo $baris_tbltransaksi[IDBarang]." - ".$baris_tbltransaksi[NamaBrg];?></td>
<td><?php echo $baris_tbltransaksi[Keterangan];?></td>
	<td align="right">Rp. <?php echo number_format($baris_tbltransaksi[Harga],0,',','.');?></td>
	<td align="right"><?php echo $baris_tbltransaksi[Jumlah];?></td>
	<td align="right">Rp. <?php echo number_format(($baris_tbltransaksi[Jumlah]*$baris_tbltransaksi[Harga]),0,',','.');?></td>
</tr>
<?php
}
?>
</table>
<br>
<p align="right">Kuningan, <?php echo $hari_ini;?>
<br>
<br>
<br>
<br>
<u><b><?php echo nama_pimpinan;?><b></u></p>
</body>
</html>

<?php
} else {

echo"Akses di tolak!";
}

?>