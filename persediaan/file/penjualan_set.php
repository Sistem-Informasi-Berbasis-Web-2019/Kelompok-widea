<?php
defined("VALIDASI") or die( 'Tidak diperkenankan mengakses file ini secara langsung !' );

if($_SESSION[level]=='sales') {
$hari_ini=date("Y-m-d");
?>

<h3>Transaksi Penjualan Barang</h3>
<p>Untuk mendata transaksi penjualan barang, silahkan tentukan tanggal transaksi penjualan barang.</p>
<form name="f1" method="post" action="index.php?file=penjualan_form">
	<p>Tanggal Transaksi <input type="date" name="tgl_transaksi" size="15" value="<?php echo $hari_ini;?>"></p>
<p><input type="submit" name="simpan" value="OK"></p>
</form>

<?php
} else {
echo "Akses ditolak!";
}
?>