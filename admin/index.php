<?php
session_start();

if(!isset($_SESSION['id'])){
	echo "<script>alert('login dulu!');window.location=('admin.php');</script>";
}

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
		<?php
		include "dashboard.php";
		?>
	</div>
	</body>
</html>	