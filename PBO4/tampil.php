<?php 	
include('koneksi.php');
$db = new database();
$data = $db->tampil_data();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Tabel Siswa</title>
	</head>
<body>
<nav class="navbar navbar-light bg-light justify-content-between">
  <div class="container-fluid">
  <h3 class="navbar-brand">Data Siswa</h3>
  <a href="tambah_data.php">Tambah Data</a>
</div>
</nav>
<table class="table table-striped table-bordered">
		<tr>
		<td class="table-primary">No</th>
		<td class="table-primary">NISN</th>
		<td class="table-primary">Nama</th>
		<td class="table-primary">Kelas</th>
		<td class="table-primary">Jurusan</th>
		<td class="table-primary">Action</th>
		</tr>
		<?php
		foreach($data as $row){
			?>
			<tr>
				<td><?php echo $row['id'] ?></td>
				<td><?php echo $row['NISN']; ?></td>
				<td><?php echo $row['nama']; ?></td>
				<td><?php echo $row['kelas']; ?></td>
				<td><?php echo $row['jurusan']; ?></td>
				<td>
				    <a href="edit.php?id=<?php echo $row["id"]; ?>">Update</a> |
					<a href="proses_data.php?action=delete&id=<?php echo $row['id']; ?>">Delete</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>