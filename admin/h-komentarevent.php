<?php
ob_start();
include "../connection/koneksi.php";
mysql_query("DELETE FROM t_komen WHERE id_komen='$_GET[id]'");

header('location:komentarevent.php');
?>