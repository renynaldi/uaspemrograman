<html>
<head>
	<title>Wisata</title>
	
<style>	
	body {font-family: Arial, Helvetica, sans-serif;}

	<?php include 'css/home.css'; ?>

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #011F6D;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #5189c6;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #5189c6;
    color: white;
}
</style>
</head>
<body>

<div class="kolom12">
		<div class="header">
		<a href="index.php"><img class="logo" src="images/logo.png" alt="logo" width="10%" height="8%"></a>
			<div class="dropdown margindropdown">
				<button class="dropbtn"><a href="index.php">Wisata</a></button>
					
					
			</div>
			<div class="dropdown margindropdown">
				<button class="dropbtn"><a href="about us.php">Penghasilan</a></button>
					
					
			</div>
			<div class="dropdown margindropdown">
				<button class="dropbtn"><a href="contactus.php">Penduduk</a></button>
					
						
					
						
					</div>
					
			</div>
		</div>
	</div>
	<center>

	<h1>Data Destinasi DESA</h1>
	<button id="myBtn">Tambah Data</button>
	</center>
	<!-- The Modal -->
	<div id="myModal" class="modal">

	<!-- Modal content -->
	<div class="modal-content">
    <span class="close">&times;</span>
	<fieldset>
    <h1>Tambah Data Wisata</h1>
	<form method="post" action="proses_simpan.php" enctype="multipart/form-data">
	<table cellpadding="8">
	<tr>
		<td>ID</td>
		<td><input type="text" name="id"></td>
	</tr>
	<tr>
		<td>Nama Wisata</td>
		<td><input type="text" name="nama_wisata"></td>
	</tr>
	<tr>
		<td>Deskripsi</td>
		<td><textarea name="deskripsi" rows="15" cols="50"></textarea></td>
	</tr>
	<tr>
		<td>Gambar</td>
		<td><input type="file" name="gambar"></td>
	</tr>
	</table>
	
	<hr>
	<input type="submit" value="Simpan">
	<a href="index.php"><input type="button" value="Batal"></a>
	</fieldset>
	</form>
  </div>

</div>

	
		<br>
	<table border="1" id="customers">
	<tr>
		<th>Gambar</th>
		<th>ID</th>
		<th>Nama Wisata</th>
		<th>Deskripsi</th>
		<th colspan="2">Aksi</th>
	</tr>
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	$query = "SELECT * FROM wisata"; // Query untuk menampilkan semua data siswa
	$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
	
	while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
		echo "<tr>";
		echo "<td><img src='images/".$data['gambar']."' width='100' height='100'></td>";
		echo "<td>".$data['id']."</td>";
		echo "<td>".$data['nama_wisata']."</td>";
		echo "<td>".$data['deskripsi']."</td>";
		echo "<td><a href='form_ubah.php?id=".$data['id']."'>Ubah</a></td>";
		echo "<td><a href='proses_hapus.php?id=".$data['id']."'>Hapus</a></td>";
		echo "</tr>";
	}
	?>
	</table>
	<br>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>		
</body>
</html>
