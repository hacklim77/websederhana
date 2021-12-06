<?php
ob_start();
include "../connection/koneksi.php";
mysql_query("DELETE FROM k_wisata WHERE id_kwisata='$_GET[id]'");

header('location:komentarwisata.php');
?>