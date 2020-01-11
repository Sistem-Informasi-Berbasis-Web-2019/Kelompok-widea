<?php
defined("VALIDASI") or die( 'Tidak diperkenankan mengakses file ini secara langsung !' );
if($_SESSION[level]=='beli') {
//query
$sql_tblsuplier=mysql_query("select * from tblsupplier order by IDSupplier asc");
//menampilkan ke layar
?>
<h3>Data Suplier</h3>
<p>Daftar data suplier yang sudah diinput pada aplikasi pengelolaan persediaan barang, untuk
melakukan editing klik pada Kode Suplier dan jika ingin menghapus klik tombol hapus.</p>
<table align="center" class="table">
<tr>
<th width="2">No.</th>
<th width="60">Kode Suplier</th>
<th>Nama Suplier</th>
<th>Alamat Suplier</th>
<th colspan="2">No. Telp</b></th>
</tr>
<?php
while($baris_tblsuplier=mysql_fetch_array($sql_tblsuplier)) {
$no++;
if($n==0){$warna="";$n++;} else {$warna="#dedee";$n--;}
?>
<tr valign="top">
<td><?php echo $no;?>.</td>
<td ><a href="index.php?file=supplier_edit&id=<?php echo $baris_tblsuplier[IDSupplier];?>">
<?php echo $baris_tblsuplier[IDSupplier];?></a></td>
<td><?php echo $baris_tblsuplier[NamaSupplier];?></td>
<td><?php echo $baris_tblsuplier[AlamatSupplier];?></td>
<td><?php echo $baris_tblsuplier[Telepon];?></td>
<td width="20">
[<a href="index.php?file=supplier_hapus&id=<?php echo $baris_tblsuplier[IDSupplier];?>">Hapus</a>]</td>
</tr>
<?php } ?>
</table>

<?php 
} else {
echo"Akses ditolak! anda login sebagai $_SESSION[level]";
}
?>
