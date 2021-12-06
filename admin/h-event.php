<?php
ob_start();
include "../connection/koneksi.php";
mysql_query("DELETE FROM event WHERE id_event='$_GET[id]'");

header('location:event.php');
?>