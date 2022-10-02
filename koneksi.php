<?php
$koneksi = mysqli_connect('localhost','root','buka321','ppl');

if(mysqli_connect_errno()){
	echo"koneksi gagal COBA LAGI".mysqli_connect_error();
}else{
	echo"koneksi berhasil";
}
?>