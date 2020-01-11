<?php
defined("VALIDASI") or die( 'Tidak diperkenankan mengakses file ini secara langsung !' );

if($_SESSION[level]=='beli') {
$hari_ini=date("Y-m-d");
?>

<h3>Transaksi Pembelian Barang</h3>
<p>Untuk mendata Pembelian barang masuk, silahkan tentukan tanggal Pembelian barang.</p>
<form name="f1" method="post" action="index.php?file=pembelian_form">
	<p>Tanggal Pembelian <input type="date" name="tgl_transaksi" size="15" value="<?php echo $hari_ini;?>"></p>
<p><input type="submit" name="simpan" value="OK"></p>
</form>

<?php
} else {
echo "Akses ditolak!";
}
?>