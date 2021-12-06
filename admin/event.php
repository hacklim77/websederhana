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
		<h4 align="center">Halaman Kelola Konten Event</h4>
		<div class="table-responsive-md">
		<table class="table table-striped">
		<tr>
			<td colspan="6" align-text="right"><a href="i-event.php">Buat Konten</a></td> 
		</tr>	
		<tr>
			<th>Nama event</th>
			<th>Lokasi event</th>
			<th>Tanggal event</th>
			<th>Deskripsi event</th>
			<th>Foto event</th>
			<th>Aksi</th>
		</tr>
		<?php
		$sql=mysql_query("select * from event");
		while($row=mysql_fetch_assoc($sql)){
		echo"
		<tr>
			<td>".substr($row['nama_event'],0,5)."...</td>
			<td>".substr($row['kota'],0,15)."....</td>
			<td>".substr($row['tanggal_event'],0,15)."....</td>
			<td>".substr($row['deskripsi_event'],0,20)."...</td>
			<td>".substr($row['foto_event'],0,10)."...</td>
			<td><a href=e-event.php?id=$row[id_event]>Edit</a> || <a href=h-event.php?id=$row[id_event]>Hapus</a>
		</tr>";	
		};
		echo "</table>";
	?>
		</div>
	</div>
	</body>
</html>	