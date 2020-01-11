
			<div style="height:55px;">
				<?php 
					if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
						echo '<div id="pesan" class="alert alert-success" style="display:none;">'.$_SESSION['pesan'].'</div>';
					}
					$_SESSION['pesan'] = '';
				?>
			</div>
	
			<p>
				<Strong>Data Siswa</strong>
				<a class="btn btn-primary pull-right" style="margin-bottom:2%;" href="form_siswa.html">Tambah</a>
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
						Jenis Kelamin
					</th>
					<th>
						Telepon
					</th>
					<th>
						Alamat
					</th>
					<th>
						Opsi
					</th>
				</tr>
					<?php
						$no = 1;
						$data = mysqli_query ($koneksi, " select *
																
														  from 
														  siswa 
														  order by id_siswa DESC");
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
						<?php echo $row['jenis_kelamin']; ?>
					</td>
					<td>
						<?php echo $row['telepon']; ?>
					</td>
					<td>
						<?php echo $row['alamat']; ?>
					</td>
					<td>
						<a href="edit_siswa-<?php echo $row['id_siswa']; ?>.html">Edit</a> |
						<a href="hapus_siswa-<?php echo $row['id_siswa']; ?>.html">Hapus</a>
					</td>
				</tr>
				<?php
					}
				?>
			</table>