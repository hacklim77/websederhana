<?php
	ob_start();
	include "../connection/koneksi.php";

	if (isset($_POST['simpan'])){
	$nama_gambar=$_FILES['gambar'] ['name']; 
	$path="../gambar/wisata/";
	
	$upload=move_uploaded_file($_FILES['gambar']['tmp_name'],$path.$nama_gambar);
	$foto='./gambar/wisata/'.$nama_gambar;
}

	mysql_query("INSERT INTO wisata(id_wisata,nama_wisata,kota,deskripsi_wisata,foto_wisata)
	VALUES('".$_POST['id_wisata']."','".$_POST['nama_wisata']."','".$_POST['kota']."','".$_POST['deskripsi_wisata']."','".$foto."')");
	
	header('location:wisata.php');

?>
