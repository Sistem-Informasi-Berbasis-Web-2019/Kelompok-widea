<?php 
defined("VALIDASI") or die( 'Tidak diperkenankan mengakses file ini secara langsung !' );
if($_SESSION[level]=='beli') {
$data_supplier=mysql_fetch_array(mysql_query("select * from tblsupplier where IDSupplier='$_GET[id]'"));
?>
<h3>Penambahan Data Suplier</h3>
<p>Jika anda ingin menambah data suplier, silahkan isi pada kolom yang telah disediakan.</p>
<form name="f1" method=post action="index.php?file=supplier_update">
<table width="100%">
<tr><td width="150">Kode Suplier</td>
<td><input type="text" name="kode_suplier" maxlength="6" value="<?php echo $data_supplier[IDSupplier];?>" readonly="yes"></td></tr>
<tr><td>Nama Suplier</td>
<td><input type="text" name="nama_suplier" size="35" value="<?php echo $data_supplier[NamaSupplier];?>"> </td></tr>
<tr valign="top"><td>Alamat Suplier</td>
<td><textarea name="alamat_suplier" rows="5" cols="30"><?php echo $data_supplier[AlamatSupplier];?></textarea></td></tr>
<tr><td>No.Telp/Fax</td>
<td><input type="text" name="telp_suplier" size="20" value="<?php echo $data_supplier[Telpon];?>"></td></tr>
<tr><td>Web</td>
<td><input type="text" name="Web" size="20" value="<?php echo $data_supplier[web];?>"></td></tr>
<tr><td colspan="2"><input type="submit" name="simpan" value="Simpan"></td></tr>
</table>
</form>
<?php 
}else{
echo "Akses ditolak!";
}
?>
