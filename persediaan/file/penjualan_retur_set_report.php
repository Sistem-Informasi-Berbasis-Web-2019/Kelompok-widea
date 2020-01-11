<?php
defined("VALIDASI") or die( 'Tidak diperkenankan mengakses file ini secara langsung !' );
if($_SESSION[level]=='sales'||$_SESSION[level]=='manajer') {
$bln_ini=date("Y-m");
?>
<h2>Laporan Pengembalian Barang Yang Terjual (Retur)</h2>
<p>Jika Anda menampilkan laporan pengemebalian barang yang dijual, silahkan tentukan tanggal laporan barang.</p>
<form name="f1" method=post action="index.php?file=penjualan_retur_report">
Bulanan Pelaporan : <input type="month" name="bln" value="<?php echo $bln_ini;?>"><br/>
<input type="submit" name="simpan" value="OK">
</form>
<?php
} else {
echo "Akses ditolak !";
}


?>