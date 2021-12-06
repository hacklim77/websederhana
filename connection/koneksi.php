sx<?php
	$server="localhost";
	$username="root";
	$pass="";
	$database="wisatasolo";

	mysql_connect($server,$username,$pass) or die ("koneksi ra kenal");
	mysql_select_db($database);	
?>	