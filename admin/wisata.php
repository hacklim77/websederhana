<?php
include "../connection/koneksi.php";
?>
<html>
	<head>	
	
		<title></title>
		<link rel="stylesheet" href="../style/css/bootstrap.min.css">
		<link rel="stylesheet" href="../style/backend.css">
		<script src="../style/js/jquery-3.2.1.min.js"/></script>
		<script src="../style/js/bootstrap.min.js"/></script>	
	</head>
	<body>
	<div class="sidebar">
		<div class="menu">
		<ul>
			<li><a href="index.php">Dashboard Admin</a></li>
			<li><a href="wisata.php">Kelola Wisata</a></li>
			<li><a href="event.php">Kelola Event</a></li>
			<li><a href="komentarwisata.php">Komentar Wisata</a></li>
			<li><a href="komentarevent.php">Komentar Event</a></li>
			<li><a href="logout.php">Log Out</a></li>
		</ul>
		</div>
	</div>

	<div class="konten">
		<h4 align="center">Halaman Kelola Konten Wisata</h4>
		<div class="table-responsive-md">
		<table class="table table-striped">
		<tr>
			<td colspan="5" align-text="right"><a href="i-wisata.php">Buat Konten</a></td> 
		</tr>	
		<tr>
			<th>Nama Wisata</th>
			<th>Lokasi Wisata</th>
			<th>Deskripsi Wisata</th>
			<th>Foto Wisata</th>
			<th>Aksi</th>
		</tr>
		<?php
		$sql=mysql_query("select * from wisata");
		while($row=mysql_fetch_assoc($sql)){
		echo"
		<tr>
			<td>".substr($row['nama_wisata'],0,5)."...</td>
			<td>".substr($row['kota'],0,15)."....</td>
			<td>".substr($row['deskripsi_wisata'],0,20)."...</td>
			<td>".substr($row['foto_wisata'],0,10)."...</td>
			<td><a href=e-wisata.php?id=$row[id_wisata]>Edit</a> || <a href=h-wisata.php?id=$row[id_wisata]>Hapus</a>
		</tr>";	
		};
		echo "</table>";
	?>
		</div>
	</div>
	</body>
</html>	