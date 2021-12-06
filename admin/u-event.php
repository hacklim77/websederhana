<?php
	ob_start();
	include "../connection/koneksi.php";

	if (isset($_POST['update'])){
	$nama_gambar=$_FILES['gambar'] ['name']; 
	$path="../gambar/event/";
	
	$upload=move_uploaded_file($_FILES['gambar']['tmp_name'],$path.$nama_gambar);
	$foto='./gambar/event/'.$nama_gambar;
}

	mysql_query("UPDATE event set nama_event='$_POST[nama_event]',kota='$_POST[kota]',tanggal_event='$_POST[tanggal_event]',deskripsi_event='$_POST[deskripsi_event]' WHERE id_event=$_POST[id_event]");
	
	header('location:event.php');
?>
