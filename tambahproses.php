<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$kelas = $_POST['kelas'];
$jurusan=$_POST['jurusan'];


// mengimput data ke database
mysqli_query($koneksi,"INSERT INTO mhs VALUES('','$nama','$nim','$kelas','$jurusan')");

// mengalihkan halaman kembali ke index.php
header("location:indeks.php");
?>