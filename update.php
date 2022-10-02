<?php
// koneksi database 
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
//belum ada validasi string-integer

// update data ke database
mysqli_query($koneksi,"update mhs set nama='$nama', nim='$nim', kelas='$kelas', jurusan='$jurusan' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:indeks.php");
?>