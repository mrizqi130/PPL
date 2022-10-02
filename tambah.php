<?php 
// session_start();
// if ($_SESSION['status']!="login"){
// 	header("location:login.php");
// }else{
// 	$log=true;
// }


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
	<style type="text/css">

	</style>
</head>
<body>
	<h1>Tambah Data Mahasiswa</h1>
	<form method="post" action="tambahproses.php">
		<label>Nama:</label><br>
		<input type="text" name="nama"><br>
		<input type="hidden" name="id">
		<label>NIM:</label><br>
		<input type="text" name="nim"><br>
		<label>Kelas:</label><br>
		<input type="text" name="kelas"><br>
		<label>Jurusan:</label><br>
		<input type="text" name="jurusan"><br><br>
		<input type="submit" value="Submit">
	</form> 
</body>
</html>