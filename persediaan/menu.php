<?php
session_start();
?>
<?php if ($_SESSION[level]=='beli'){ ?>
<table border="0" width="100%">
<tr><td><h3 class="judul">Data Supplier</h3></td></tr>
<tr><td><img src="images/1.gif"><a href="index.php?file=supplier_form">Input Supplier</a></td></tr>

<tr><td><img src="images/1.gif"><a href="index.php?file=barang_set">Input Barang</a></td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td><h3 class="judul">Transaksi</h3></td></tr>
<tr><td><img src="images/1.gif"><a href="index.php?file=pembelian_set">Pembelian</a></td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td><h3 class="judul">Laporan</h3></td></tr>
<tr><td><img src="images/1.gif"><a href="index.php?file=supplier_report_pdf">Data Supplier</a></td></tr>
<tr><td><img src="images/1.gif"><a href="index.php?file=pembelian_set_report">Pembelian</a></td></tr>
<tr><td><img src="images/1.gif"><a href="index.php?file=persediaan_report">Stock Barang</a></td></tr>
<tr><td>&nbsp;</td></tr>
</table>
<?php } 
if ($_SESSION[level]=='sales'){ ?>
<table border="0" width="100%">
<tr><td><h3 class="judul">Transaksi</h3></td></tr>
<tr><td><img src="images/1.gif"><a href="index.php?file=penjualan_form">Penjualan</a></td></tr>
<tr><td><img src="images/1.gif"><a href="index.php?file=retur_jual_set">Retur Penjualan</a></td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td><h3 class="judul">Laporan</h3></td></tr>
<tr><td><img src="images/1.gif"><a href="index.php?file=penjualan_set_report">Penjualan</a></td></tr>
<tr><td><img src="images/1.gif"><a href="index.php?file=penjualan_retur_set_report">Barang Yang Diretur</a></td></tr>
<tr><td><img src="images/1.gif"><a href="index.php?file=persediaan_report">Stock Barang</a></td></tr>
<tr><td>&nbsp;</td></tr>
</table>
<?php }
if ($_SESSION[level]=='manajer'){ ?>
<table border="0" width="100%">
<tr><td><h3 class="judul">Laporan</h3></td></tr>
<tr><td><img src="images/1.gif"><a href="index.php?file=supplier_report_pdf">Data Supplier</a></td></tr>
<tr><td><img src="images/1.gif"><a href="index.php?file=pembelian_set_report">Pembelian</a></td></tr>
<tr><td><img src="images/1.gif"><a href="index.php?file=penjualan_set_report">Penjualan</a></td></tr>
<tr><td><img src="images/1.gif"><a href="index.php?file=persediaan_report">Stock Barang</a></td></tr>
</table>
<?php
}
?>
<table border="0" width="100%">
<tr><td><h3><a href="logout.php">Logout</a></h3></td></tr>
</table>
