<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM user WHERE id='$id'")or die(mysqli_connect_error());
 
header("location:admin.php?pesan=hapus");
?>