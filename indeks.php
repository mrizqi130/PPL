<?php
	include 'koneksi.php';

	$data = mysqli_query($koneksi,"SELECT * FROM mhs");
	$tabel = [];
	while($kolom = mysqli_fetch_assoc($data)){
		$tabel[] = $kolom;	
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<style type="text/css">
	table, th, td {
	  border:1px solid black;
	}
</style>
<body>
	<h1>Data Mahasiswa</h1>
	<a href="tambah.php">Tambah Data</a>
	<table style="width:100%">
  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>NIM</th>
    <th>Kelas</th>
    <th>Jurusan</th>
    <th>Aksi</th>
  </tr>

  <?php
		$no=1;
		$i = 1;
		foreach ($data as $tabel) : $id=1;
	?>

	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $tabel['nama']; ?></td>
		<td><?php echo $tabel['nim']; ?></td>
		<td><?php echo $tabel['kelas']; ?></td>
		<td><?php echo $tabel['jurusan']; ?></td>

		<td>
		<a style="margin-left: 180px" href="edit.php?id=<?php echo $tabel['id']; ?>">EDIT</a>
		<!-- <a style="margin-left: 30px" onclick="return confirm('Data Siswa Akan Dihapus. Tetap Hapus?')" href="hapus.php?id=<?php echo $tabel['id']; ?>">HAPUS</a> -->
		<a style="margin-left: 30px" onclick="return confirm('Data Siswa Akan Dihapus. Tetap Hapus?')" href="hapus.php?id=<?php echo $tabel['id']; ?>">HAPUS</a>
		</td>
		</tr>
	<?php $i++;
		endforeach; 
	?>
</table>

</body>
</html>