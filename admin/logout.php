<?php
session_start();

$_SESSION['id_admin']='';
session_destroy();
header("location:admin.php");
?>