<?php
ob_start();
include "../connection/koneksi.php";
mysql_query("DELETE FROM wisata WHERE id_wisata='$_GET[id]'");

header('location:wisata.php');
?>