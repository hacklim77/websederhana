<?php
	ob_start();

	mysql_query("INSERT INTO t_komen(rate,komentar,id_event) VALUES ('".$_POST['rate']."','".$_POST['komentar']."','".$_POST['id_event']."')");
	/*$url="index.php?page=detailevent&id_event=$_GET[id_event]";
	*/
	/*$id=$_GET['id_event'];*/
	header('location:index.php?page=detailevent&id_event='.$_GET[id_event].'');
?>