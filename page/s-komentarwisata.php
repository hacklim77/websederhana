<?php
	ob_start();

	$komen=mysql_query("INSERT INTO k_wisata(rate,komentar,id_wisata) VALUES ('".$_POST['rate']."','".$_POST['komentar']."','".$_POST['id_wisata']."')");
	$url="index.php?page=detailwisata&id_wisata=$_GET[id_wisata]";
	

	if($komen){
	echo "<script>window.location=(".$url.");alert('komentar berhasil dilakukan');</script>";
		} else {
	echo "<script>alert('komentar gagal dilakukan');</script>";
	}
?>