
			<div style="height:55px;">
				<?php 
					if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
						echo '<div id="pesan" class="alert alert-success" style="display:none;">'.$_SESSION['pesan'].'</div>';
					}
					$_SESSION['pesan'] = '';
				?>
			</div>
	
			<p>
				<Strong>Data Tabungan Siswa</strong>
				<a class="btn btn-success pull-right" style="margin-bottom:2%;" href="setoran.html" >Setoran</a>
				<a class="btn btn-danger pull-right" style="margin-bottom:2%;margin-right:2%;" href="penarikan.html" >Penarikan</a>
			</p>
			<table class="table table-striped">
				<tr>
					<th>
						No 
					</th>
					<th>
						Nama 
					</th>
					<th>
						Alamat
					</th>
					<th>
						Saldo
					</th>
					<th>
						Opsi
					</th>
				</tr>
					<?php
						$no = 1;
						$data = mysqli_query ($koneksi, " select  tabungan.id_tabungan,
																  tabungan.id_siswa,
																  tabungan.setoran,
																  tabungan.penarikan,
																  tabungan.saldo,
																  sum(tabungan.penarikan) as jumlah_penarikan,
																  sum(tabungan.setoran) as jumlah_setoran,
																  
																  siswa.id_siswa,
																  siswa.nama,
																  siswa.jenis_kelamin,
																  siswa.alamat,
																  siswa.telepon
																		
																  from 
																  siswa, tabungan
																  where
																  tabungan.id_siswa = siswa.id_siswa
																  group by siswa.nama DESC");
						while ($row = mysqli_fetch_array ($data))
						{
					?>
				<tr>
					<td>
						<?php echo $no++; ?>
					</td>
					<td>
						<?php echo $row['nama']; ?>
					</td>
					<td>
						<?php echo $row['alamat']; ?>
					</td>
					<td>
						<?php echo format_rupiah($row['jumlah_setoran'] - $row['jumlah_penarikan']); ?>
					</td>
					<td>
						<a href="detail-<?php echo $row['id_siswa'] ; ?>.html" class="btn btn-success btn-xs">Detail</a>
					</td>
				</tr>
				<?php
					}
				?>
			</table>