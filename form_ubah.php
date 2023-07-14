<html>
<head>
	<title>Aplikasi CRUD dengan PHP</title>
</head>
<body>
	<h1>Ubah Data Siswa</h1>
	
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	// Ambil data NIS yang dikirim oleh index.php melalui URL
	$id = $_GET['id'];
	
	// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
	$query = "SELECT * FROM wisata WHERE id='".$id."'";
	$sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
	$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
	?>
	
	<form method="post" action="proses_ubah.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
	<table cellpadding="8">
	<tr>
		<td>Nama Wisata</td>
		<td><input type="text" name="nama_wisata" value="<?php echo $data['nama_wisata']; ?>"></td>
	</tr>
	<tr>
		<td>Deskripsi</td>
		<td><textarea name="deskripsi"><?php echo $data['deskripsi']; ?></textarea></td>
	</tr>
	<tr>
		<td>Gambar</td>
		<td>
			<input type="checkbox" name="ubah_gambar" value="true"> Ceklis jika ingin mengubah gambar<br>
			<input type="file" name="gambar">
		</td>
	</tr>
	</table>
	
	<hr>
	<input type="submit" value="Ubah">
	<a href="index.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>
