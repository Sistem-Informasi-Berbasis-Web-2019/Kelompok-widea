<?php
session_start();
defined("VALIDASI") or die( 'Tidak diperkenankan mengakses file ini secara langsung !' );
if($_SESSION[level]=='beli') {
if (!empty($_POST[kode_supplier])) {$kode_supplier=$_POST[kode_supplier];} else {
$kode_supplier=$_GET[kode];}	
?>
<h3>Transaksi Penambahan Data Barang dari <?php echo nama_supplier($kode_supplier);?></h3>
<p>Untuk melakukan transaksi, silahkan isi pada kolom yang disediakan.</p>
<form name="f1"method=post action="index.php?file=barang_save">
<table width="100%"align=center>
<tr><td>Kode Barang </td><td><input type="hidden" name="kode_supplier" value="<?php echo $kode_supplier;?>" readonly="yes"><input type="text" name="kode_barang" size="6" maxlength="100"></td></tr>
<tr><td>Nama Barang </td><td><input type="text" name="nama" size="50" maxlength="100"></td></tr>
<tr><td>Jenis Barang </td><td><input type="text" name="jenis" maxlength="100"></td></tr>
<tr><td>Harga Satuan</td><td><input type="numeric" name="harga" maxlength="11"></td></tr>

<tr><td>Jml. Persediaan Min.</td><td><input type="text" name="jml_min" maxlength="11"></td></tr>
<tr><td>Jml. Persediaan Max.</td><td><input type="text" name="jml_max" maxlength="11"></td></tr>

<tr><td colspan=2><input type="submit" name="simpan" value="Simpan"></td></tr>
</table>
</form>

<?php
include('barang_view.php');

} else {
	
echo "Akses ditolak !";	
}	

?>
