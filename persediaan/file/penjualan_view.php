<?php
defined("VALIDASI") or die( 'Tidak diperkenankan mengakses file ini secara langsung !' );
if($_SESSION[level]=='sales') {
//query
$sql_tbltransaksi=mysql_query("select * from v_laporan_penjualan
where Tgltransaksi='$tgl_transaksi' order by IDtransaksi desc") or die
(mysql_error());
?>
<table align="center" class="table">
<tr>
<th width="20"><b>No.</th>
<th width="150"><b>Barang</th>
<th>Suplier</th>
<th>Keterangan</th>
<th>Harga</th>
<th  colspan="2">Jumlah</th></tr>
<?php
while($baris_tbltransaksi=mysql_fetch_array($sql_tbltransaksi)) {
$no++;
if($n==0) {$warna="";$n++;} else {$warna="#dedee";$n--;}
?>
<tr valign="top"bgcolor="$warna">
<td><?php echo $no;?>.</td>
<td><?php echo $baris_tbltransaksi[IDBarang]." - ".$baris_tbltransaksi[NamaBarang];?></td>
<td><?php echo $baris_tbltransaksi[NamaSupplier];?></td>
<td><?php echo $baris_tbltransaksi[Keterangan];?></td>
<td><?php echo $baris_tbltransaksi[Harga];?></td>
<td align="right"><?php echo $baris_tbltransaksi[Jumlah];?></td>
<td width="20">
[<a href="index.php?file=penjualan_hapus&id=<?php echo $baris_tbltransaksi[IDTransaksi];?>">Hapus</a>]</td>
</tr>
<?php
}
?>
</table>
<?php
} else {

echo"Akses di tolak! anda login sebagai $_SESSION[level]";
}

?>
