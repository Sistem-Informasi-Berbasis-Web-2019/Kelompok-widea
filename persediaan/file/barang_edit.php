<?php 
defined("VALIDASI") or die ('Tidak diperkenankan mengakses file ini secara langsung !');
if($_SESSION[level]=='beli') {
$data_barang=mysql_fetch_array(mysql_query("select * from tblbarang where IDBarang='$_GET[id]'"));
$kode_supplier=$data_barang[IDSupplier];
?>
<h3>Penambahan Data Barang</h3>
<p>Jika anda ingin menambah data barang, silahkan isi pada kolom yang telah disediakan.</p>
<form name="f1" method=post action="index.php?file=barang_update">
<table width="100%">
<tr><td width="150">Kode Barang</td>
<td><input type="text" name="kode_barang" maxlength="6" value="<?php echo $data_barang[IDBarang];?>" readonly="yes"> 
<input type="hidden" name="kode_supplier" maxlength="6" value="<?php echo $data_barang[IDSupplier];?>" readonly="yes"> 
</td></tr>
<tr><td>Nama Barang</td>
<td><input type="text" name="nama_barang" size="35" value="<?php echo $data_barang[NamaBarang];?>"></td></tr>
<tr><td>Jenis</td>
<td><input type="text" name="jenis_barang" size="20" value="<?php echo $data_barang[Jenis];?>"></td></tr>
<tr><td>Harga</td>
<td><input type="text" name="harga_barang" size="20" value="<?php echo $data_barang[Harga];?>"></td></tr>
<tr><td>Jumlah Minimal</td>
<td><input type="text" name="jml_min" size="20" value="<?php echo $data_barang[Jml_min];?>"></td></tr>
<tr><td>Jumlah Maximal</td>
<td><input type="text" name="jml_max" size="20" value="<?php echo $data_barang[Jml_max];?>"></td></tr>
<tr><td colspan="2"><input type="submit" name="simpan" value="Simpan"></td></tr>
</table>
</form>
<?php
include('barang_view.php');

} else {
echo "akses Ditolak !";
}
?>
