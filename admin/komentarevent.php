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
		<h4 align="center">Komentar User (Event)</h4>
		<div class="table-responsive-md">
		<table class="table table-striped">
		
		<tr>
			<th>id</th>
			<th>komentar</th>
			<th>rating</th>
			<th>Aksi</th>
		</tr>
		<?php
		$sql=mysql_query("SELECT * from t_komen");
		while($row=mysql_fetch_assoc($sql)){
		echo"
		<tr>
			<td>".$row['id_event']."</td>
			<td>".substr($row['komentar'],0,15)."....</td>
			<td>".$row['rate']."</td>
			<td><a href=h-komentarevent.php?id=$row[id_komen]>Hapus</a>
		</tr>";	
		};
		echo "</table>";
	?>
		</div>
	</div>
	</body>
</html>	