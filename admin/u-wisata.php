<?php
	ob_start();
	include "../connection/koneksi.php";

	if (isset($_POST['update'])){
	$nama_gambar=$_FILES['gambar'] ['name']; 
	$path="../gambar/wisata/";
	
	$upload=move_uploaded_file($_FILES['gambar']['tmp_name'],$path.$nama_gambar);
	$foto='./gambar/wisata/'.$nama_gambar;
}

	mysql_query("UPDATE wisata set nama_wisata='$_POST[nama_wisata]',kota='$_POST[kota]',deskripsi_wisata='$_POST[deskripsi_wisata]' WHERE id_wisata=$_POST[id_wisata]");
	
	header('location:wisata.php');
?>
