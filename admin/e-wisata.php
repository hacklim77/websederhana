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
			<li><a href="admin.php">Log Out</a></li>
		</ul>
		</div>
	</div>
	<div class="konten">
	<center>
	<?php
	ob_start();
	include "../connection/koneksi.php";
	$edit=mysql_query("SELECT * FROM wisata WHERE id_wisata='$_GET[id]'");
	$row=mysql_fetch_array($edit);
	
	echo"<form method=post name=form2 enctype=multipart/form-data action=u-wisata.php>
	<input type=hidden name=id_wisata value='$row[id_wisata]'>
	<table>
	<tr>
		<td>Nama Wisata</td>
		<td>:</td>
		<td><input type=text name=nama_wisata id=nama_wisata value='$row[nama_wisata]'></td>
	</tr>

	<tr>
		<td>Lokasi</td>
		<td>:</td>
		<td><input type=text name=kota id=kota value='$row[kota]'></td>
	</tr>

	<tr>
		<td>Deskripsi Wisata</td>
		<td>:</td>
		<td><textarea name=deskripsi_wisata id=deskripsi_wisata cols=45 rows=5 >$row[deskripsi_wisata]</textarea></td>
	</tr>

	<tr>
		<td>Foto Wisata</td>
		<td>:</td>
		<td><input type=file name=gambar id=gambar >$row[foto_wisata]</td>
	</tr>

	<tr>
		<td></td>
		<td colspan=2><input type=submit name=update id=update value=update> || 
		<input type=reset name=reset id=reset value=batal></td>
	</tr>		

	</table>
	</form>";
	?>
</center>
</div>
	</body>
</html>	