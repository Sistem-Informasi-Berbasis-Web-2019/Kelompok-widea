<?php
defined("VALIDASI") or die( 'Tidak diperkenankan mengakses file ini secara langsung !' );
if($_SESSION[level]=='sales'||$_SESSION[level]=='manajer') {
$bln_ini=date("Y-m");
?>
<h2>Laporan Pengeluaran Barang Bulanan</h2>
<p>Jika Anda menampilkan laporan pengeluaran barang bulanan, silahkan tentukan tanggal laporan barang.</p>
<form name="f1" method=post action="index.php?file=penjualan_report">
Bulanan Pelaporan : <input type="month" name="bln" value="<?php echo $bln_ini;?>"><br/>
<input type="submit" name="simpan" value="OK">
</form>
<?php
} else {
echo "Akses ditolak !";
}


?>