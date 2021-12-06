<?php
	ob_start();
	include "../connection/koneksi.php";

	if (isset($_POST['simpan'])){
	$nama_gambar=$_FILES['gambar'] ['name']; 
	$path="../gambar/event/";
	
	$upload=move_uploaded_file($_FILES['gambar']['tmp_name'],$path.$nama_gambar);
	$foto='./gambar/event/'.$nama_gambar;
}

	mysql_query("INSERT INTO event(id_event,nama_event,kota,tanggal_event,deskripsi_event,foto_event)
	VALUES('".$_POST['id_event']."','".$_POST['nama_event']."','".$_POST['kota']."','".$_POST['tanggal_event']."','".$_POST['deskripsi_event']."','".$foto."')");
	
	header('location:event.php');

?>
