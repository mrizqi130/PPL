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
	<title>Siswa SMK Telkom</title>
<style type="text/css">
	
</style>
</head>
<body>
	<?php
		include 'koneksi.php';
		$id = $_GET['id'];
		// echo "$id";
		$data = mysqli_query($koneksi,"SELECT * FROM mhs WHERE id='$id'");
		while($kolom = mysqli_fetch_array($data)){
			echo $kolom['jurusan'];
	?>
	<h1>Edit Data Mahasiswa</h1>
	<form method="post" action="update.php">
		<label>Nama:</label><br>
		<input type="hidden" name="id" value="<?php echo $kolom['id']; ?>">
		<input type="text" name="nama" value="<?= $kolom['nama'] ?>"><br>
		<!-- < ?= is shorthand for < ?php echo -->
		<label>NIM:</label><br>
		<input type="text" name="nim" value="<?= $kolom['nim'] ?>"><br>
		<label>Kelas:</label><br>
		<input type="text" name="kelas" value="<?= $kolom['kelas'] ?>"><br>
		<label>Jurusan:</label><br>
		<input type="text" name="jurusan" value="<?= $kolom['jurusan'] ?>"><br><br>

		<a class="" onclick=" return confirm('Formulir Tidak Tersimpan. Tetap Kembali?')" href="index.php">Kembali</a>
		<input type="submit" value="Simpan">
	</form>
	<?php
    }
    ?>
</body>
</html>