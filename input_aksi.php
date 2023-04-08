<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

$query = "INSERT INTO user VALUES(
    NOT NULL,
    '$nama',
    '$username',
    '$password',
    '$level')";
  mysqli_query($koneksi,$query);
 
header("location:admin.php?pesan=input");
?>

mysqli_query("INSERT INTO user VALUES('','$nama','$username','$password')");