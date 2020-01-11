<?php 
session_start();
include"koneksi.php";
include"fungsi.php";
?>
<html>
<title>Tri Utami | Aplikasi Tabungan Siswa</title>
<head>
<link rel="stylesheet" href="style/bootstrap.css" />
<link rel="stylesheet" href="style/dataTables.bootstrap4.min.css" />
	<style>
		tr 
		{
			cursor:default;
		}
	</style>
</head>
<body>

<div class="container" style="margin-top:3%">
	<div class="row">
		<div class="col-md-8 col-md-offset-2"> 
			<p>
				<center>
					<h2>Aplikasi Tabungan Siswa</h2>
				</center>
			</p>
			<br>
			
			<?php
				include"menu.php";
			?>
			
			<?php
				include"content.php";
			?>
	
		</div>
	</div>
</div>
<br>
		
		<script type="text/javascript" src="style/jquery.js"></script>
		<script type="text/javascript" src="style/bootstrap.js"></script>	
		<script src="style/jquery.dataTables.min.js"></script>	
		<script src="style/dataTables.bootstrap4.min.js"></script>	
		<script type="text/javascript" src="style/rupiah.js"></script>
        <script>
			$('#example').DataTable();
            $(document).ready(function(){setTimeout(function(){$("#pesan").fadeIn('slow');}, 500);});
            setTimeout(function(){$("#pesan").fadeOut('slow');}, 3000);
        </script>
		<script type="text/javascript">
		$(document).ready(function(){
			
			$(document).on('click', '#siswa', function (e) {
				document.getElementById("id_siswa").value = $(this).attr('data-id_siswa');
				document.getElementById("nama").value = $(this).attr('data-nama');
				$('#modal').modal('hide');
			});	
			
		});
		</script>	
</body>
</html>