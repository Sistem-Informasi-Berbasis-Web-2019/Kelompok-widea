<?php
defined("VALIDASI") or die( 'Tidak diperkenankan mengakses file ini secara langsung !' );
if($_SESSION[level]=='sales') {
$tgl_transaksi=date("Y-m-d");
?>

<h3>Transaksi Penjualan Barang</h3>
<p>Untuk melakukan transaksi penjualan, silahkan isi pada kolom yang disediakan.</p>
<form name="f1" method="post" action="index.php?file=penjualan_save">
<table width="100%"align=center>
<tr><td>Supplier - Nama Barang - Sisa</td><td><input type="hidden" value="<?php echo $tgl_transaksi;?>" name="tanggal">
<select name="kode">
<option value="-">--Pilih Barang--</option>
<?php

$sql_tblbarang=mysql_query("SELECT distinct IDBarang,NamaSupplier,NamaBarang  from v_laporan_pembelian") or die (mysql_error());

while($baris_tblbarang=mysql_fetch_array($sql_tblbarang)) {
//mengecek apakah barang masih ada atau belum
if(sisa_barang($baris_tblbarang[IDBarang])<>0||sisa_barang($baris_tblbarang[IDBarang])==null){
echo"<option value=\"$baris_tblbarang[IDBarang]\">$baris_tblbarang[NamaSupplier] | $baris_tblbarang[NamaBarang] | ".sisa_barang($baris_tblbarang[IDBarang])."</option>";
}
}
?>

</select></td></tr>
<tr><td>Keterangan </td><td><input type="text" name="keterangan" maxlength="100"></td></tr>
<tr><td>Jumlah Penjualan</td><td><input type="text" name="jumlah" maxlength="11"></td></tr>
<tr><td colspan=2><input type="submit" name="simpan" value="Simpan"></td></tr>
</table>
</form>
<br/>
<?php
include("./file/penjualan_view.php");



} else {
echo"Akses ditolak!";
}

?>
