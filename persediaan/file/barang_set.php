<?php
session_start();
defined("VALIDASI") or die( 'Tidak diperkenankan mengakses file ini secara langsung !' );
if($_SESSION[level]=='beli') {
?>
<h3>Transaksi Penambahan Data Barang</h3>
<p>Untuk melakukan transaksi, silahkan isi pada kolom yang disediakan.</p>
<form name="f1"method=post action="index.php?file=barang_form">
<table width="100%"align=center>
<tr><td>Supplier</td><td><select name="kode_supplier">
<?php
$sql_tblsupplier=mysql_query("SELECT * from tblsupplier");
while($baris_tblsupplier=mysql_fetch_array($sql_tblsupplier)) {
echo"<option value=\"$baris_tblsupplier[IDSupplier]\">$baris_tblsupplier[NamaSupplier] </option>";
}
?>

</select></td></tr>
<tr><td colspan=2><input type="submit" name="simpan" value="Lanjut >>"></td></tr>
</table>



<?php
} else {echo "Akses Ditolak"; }
?>
