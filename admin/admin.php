<?php
	session_start();
	include "../connection/koneksi.php";	
	
	if(isset($_POST['login'])){
	$sql=mysql_query("Select *from admin where username='".$_POST['username']."'and password='".$_POST['password']."'");
	$r=mysql_fetch_assoc($sql);
	$c=mysql_num_rows($sql);
	if($c==1){
		$_SESSION['id']=$r['id_admin'];
		echo "<script>window.location=('index.php');alert('login sukses!');</script>";
	} else {
		echo "<script>alert('login gagal!');</script>";
	}
}
?>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="../style/admin.css">
	</head>
<body>

	<form name="admin" method="POST" action="">
	<center><h2>LOG IN</h2></center>
	<center><h2>ADMINISTRATOR</h2></center>
	<table>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><input type="text" name="username" placeholder="Username"></td>
		</tr>

		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="password" placeholder="Password"></td>
		</tr>

		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="login" value="login"> | <input type="reset" name="reset" value="reset"></td>
		</tr>
	</table>		
	</form>
</body>
	
</html>		