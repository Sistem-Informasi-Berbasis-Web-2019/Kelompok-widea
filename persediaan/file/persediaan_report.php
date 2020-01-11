<?php
defined("VALIDASI") or die( 'Tidak diperkenankan mengakses file ini secara langsung !' );
if($_SESSION[level]=='beli'||$_SESSION[level]=='sales'||$_SESSION[level]=='manajer') {
?>
<h3 align="center">Laporan Persediaan Barang</h3>
<table class="table">
<tr valign="center" align="center">
<th width="10" rowspan="2">No.</th>
<th width="150" rowspan="2">Nama Barang - Supplier</th>
<th colspan="4">Jumlah</th>
</tr>
<tr valign="center" align="center">
<th width="55">Masuk</th>
<th width="55">Keluar</th>
<th width="55">Retur</th>
<th width="55">Sisa ((M-K)+R)</th>	
</tr>
<?php
$sql_tblbarang=mysql_query("SELECT * FROM  v_barang_supplier ") or die(mysql_error());
while($baris_barang=mysql_fetch_array($sql_tblbarang)) {
if (jml_barang($baris_barang[IDBarang],'M')>0){
$no++;
if ($n==0) {$warna="";$n++;} else {$warna="#dedee";$n--;}
if (sisa_barang($baris_barang[IDBarang])!=null) {$sisa=sisa_barang($baris_barang[IDBarang]);
$keluar=jml_barang($baris_barang[IDBarang],'K');} else {$sisa=jml_barang($baris_barang[IDBarang],'M');$keluar=0;}

if($sisa<=jml_min($baris_barang[IDBarang])) {
	$nama_barang="<font color=\"red\"><b>$baris_barang[NamaBarang] - $baris_barang[NamaSupplier]</b></font>";
	} else {$nama_barang="$baris_barang[NamaBarang] - $baris_barang[NamaSupplier]";}
?>
<tr valign="top" bgcolor="<?php echo $warna;?>">
<td><?php echo $no;?>.</td>
<td><?php echo $nama_barang;?></td>
<td align="right"><?php echo jml_barang($baris_barang[IDBarang],'M');?></td>
<td align="right"><?php echo $keluar;?></td>
<td align="right"><?php echo jml_retur($baris_barang[IDBarang]);?></td>
<td align="right"><?php echo $sisa;?></td></tr>
<?php
$total_masuk=$total_masuk+jml_barang($baris_barang[IDBarang],'M');
$total_retur=$total_retur+jml_retur($baris_barang[IDBarang]);
$total_keluar=$total_keluar+jml_barang($baris_barang[IDBarang],'K');
}
$total=($total_masuk+$total_retur)-$total_keluar;
}
?>
<tr align="center">
<th colspan="2" class="th2">Jumlah</th>
<th><?php echo $total_masuk;?></th>
<th><?php echo $total_keluar;?></th>
<th><?php echo $total_retur;?></th>
<th><?php echo $total;?></th> 
</table>

<p align="center">Ket : Warna merah menunjukan persediaan telah mencapai Jumlah minimum <br/>
[<a href="./file/persediaan_print.php" target="_blank">Tampilan Cetak</a>]</p>

<?php
} else {
echo "Akses ditolak ! ";
}
?>
