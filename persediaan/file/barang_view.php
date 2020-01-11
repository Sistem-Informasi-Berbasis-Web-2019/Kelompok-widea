<?php
defined("VALIDASI") or die( 'Tidak diperkenankan mengakses file ini secara langsung !' );
if($_SESSION[level]=='beli') {
//query
$sql_tblbarang=mysql_query("select * from tblbarang where IDSupplier='$kode_supplier' order by IDBarang asc");
//menampilkan ke layar
?>
<h3>Data Barang Yang Sudah Diinput</h3>
<p>Daftar barang yang disupply oleh <?php echo nama_supplier($kode_supplier);?> yang sudah diinput pada aplikasi pengelolaan persediaan barang, untuk
melakukan editing klik pada Kode Barang dan jika ingin menghapus klik tombol hapus.</p>
<table align="center" class="table">
<tr>
<th width="2">No.</th>
<th width="60">Kode Barang</th>
<th>Nama Barang</th>
<th>Jenis Barang</th>
<th>Harga Satuan</th>
<th>Jml. Min.</th>
<th colspan="2">Jml. Max.</th>
</tr>
<?php
while($baris_tblbarang=mysql_fetch_array($sql_tblbarang)) {
$no++;
if($n==0){$warna="";$n++;} else {$warna="#dedee";$n--;}
?>
<tr valign="top">
<td><?php echo $no;?>.</td>
<td ><a href="index.php?file=barang_edit&id=<?php echo $baris_tblbarang[IDBarang];?>">
<?php echo $baris_tblbarang[IDBarang];?></a></td>
<td><?php echo $baris_tblbarang[NamaBarang];?></td>
<td><?php echo $baris_tblbarang[Jenis];?></td>
<td>Rp. <?php echo str_replace(",",".",number_format($baris_tblbarang[Harga],0));?></td>
<td><?php echo $baris_tblbarang[Jml_min];?></td>
<td><?php echo $baris_tblbarang[Jml_max];?></td>
<td width="20">
[<a href="index.php?file=barang_hapus&id=<?php echo $baris_tblbarang[IDBarang];?>">Hapus</a>]</td>
</tr>
<?php } ?>
</table>

<?php 
} else {
echo"Akses ditolak! anda login sebagai $_SESSION[level]";
}
?>
