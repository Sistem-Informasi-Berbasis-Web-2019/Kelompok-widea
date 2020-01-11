<?php
defined("VALIDASI") or die( 'Tidak diperkenankan mengakses file ini secara langsung !' );
IF($_SESSION[level]=='beli'||$_SESSION[level]=='manajer') {
//query
$sql_tblsuplier=mysql_query("select * from tblsupplier order by IDSupplier asc");
//menampilkan ke layar
?>
<h3 align="center">Laporan Data Suplier</h3>
<table  class="table">
<tr>
<th width="20"><b>No.</th>
<th>Kode</th>
<th>Nama Supiler</th>
<th>Alamat</th>
<th>Telepon</th>
</tr>
<?php
while($baris_tblsuplier=mysql_fetch_array($sql_tblsuplier)) {
$no++;
if($n==0) {$warna="";$n++;} else {$warna="#dedee";$n--;}
?>
<tr  bgcolor="<?php echo $warna;?>">
<td><?php echo $no;?>.</td>
<td><?php echo $baris_tblsuplier[IDSupplier];?></td>
<td><?php echo $baris_tblsuplier[NamaSupplier];?></td>
<td><?php echo $baris_tblsuplier[AlamatSupplier];?></td>
<td><?php echo $baris_tblsuplier[Telepon];?></td>
</tr>
<?php
}
?>
</table>
<p align="center">[<a href="./pdf/supplier.php" target="_blank">Tampilan Cetak</a>]</p>

<?php
} else {
echo"Akses ditolak !";
}
?>
