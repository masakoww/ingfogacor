<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
		<h2>Menampilkan data dari database</h2>
		<h3>www.malasngoding.com</h3>
	</div>
	
	<br/>
	
	<a href="admin.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Edit data</h3>
    
	<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysql = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$id'")or die(mysqli_connect_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysql)){
	?>
	<form action="update.php" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="text" name="nama" value="<?php echo $data['nama'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" value="<?php echo $data['username'] ?>"></td>					
			</tr>	
			<tr>
				<td>Password</td>
				<td><input type="text" name="password" value="<?php echo $data['password'] ?>"></td>					
			</tr>	
			<tr>
				<td>Level (Kelas)</td>
				<td><input type="text" name="level" value="<?php echo $data['level'] ?>"></td>		
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
			<tr>
				<td></td>
                <button><a href="admin.php">Cancel</a></button>		
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>