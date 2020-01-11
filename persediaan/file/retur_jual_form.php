<?php
defined("VALIDASI") or die( 'Tidak diperkenankan mengakses file ini secara langsung !' );
if($_SESSION[level]=='sales') {
if(!empty($_POST[tgl_transaksi])) {$tgl_transaksi=$_POST[tgl_transaksi];} else {$tgl_transaksi=$_GET[tgl];}
if (cek_penjualan($tgl_transaksi)<1) {echo "<h3>Error</h3><p>Tidak ada transaksi penjualan pada tanggal tersebut !</p>";} else {
?>

<h3>Transaksi Retur Penjualan Barang</h3>
<p>Untuk melakukan transaksi retur penjualan, silahkan isi pada kolom yang disediakan.</p>
<form name="f1" method="post" action="index.php?file=retur_jual_save">
<table width="100%"align=center>
<tr><td width="45%">Barang yang terjual pada tanggal <?php echo tgl_indonesia($tgl_transaksi);?></td><td><input type="hidden" value="<?php echo $tgl_transaksi;?>" name="tanggal">
<select name="kode">
<option value="-">--Pilih Barang--</option>
<?php

$sql_tblbarang=mysql_query("SELECT distinct IDBarang,NamaSupplier,NamaBarang  from v_laporan_penjualan where TglTransaksi='$tgl_transaksi'") or die (mysql_error());

while($baris_tblbarang=mysql_fetch_array($sql_tblbarang)) {
echo"<option value=\"$baris_tblbarang[IDBarang]\">$baris_tblbarang[NamaSupplier] | $baris_tblbarang[NamaBarang] </option>";
}
?>

</select></td></tr>
<tr><td>Keterangan </td><td><input type="text" name="keterangan" maxlength="100"></td></tr>
<tr><td>Jumlah yang Diretur</td><td><input type="text" name="jumlah" maxlength="11"></td></tr>
<tr><td colspan=2><input type="submit" name="simpan" value="Simpan"></td></tr>
</table>
</form>
<br/>
<?php
include("./file/retur_jual_view.php");


}
} else {
echo"Akses ditolak!";
}

?>
