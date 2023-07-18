<?php 
include 'koneksi.php';

$no = $_POST['no'];
$nama_merek = $_POST['nama_merek'];
$warna = $_POST['warna'];
$jumlah = $_POST['jumlah'];

mysqli_query($koneksi, "INSERT INTO printer(no, nama_merek, warna, jumlah) VALUES('$no', '$nama_merek', '$warna', '$jumlah')");
header("location:index.php");
?>