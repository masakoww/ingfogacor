<?php 

include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
 
mysqli_query($koneksi, "UPDATE user SET nama='$nama', username='$username', password='$password' WHERE id='$id'");
 
header("location:admin.php?pesan=update");
?>