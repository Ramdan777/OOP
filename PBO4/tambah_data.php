<!DOCTYPE html>
<html>
<head>
	<title>TAMBAH DATA</title>
</head>
<body>
<h3>Tambah Data User</h3>
<hr/>
<form method="post" action="proses_data.php?action=add">
<table>
	<tr>
		<td>Id</td>
		<td>:</td>
		<td><input type="text" name="id"/></td>
	</tr>
	<tr>
		<td>NISN</td>
		<td>:</td>
		<td><input type="text" name="NISN"/></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama"/></td>
	</tr>
	<tr>
		<td>Kelas</td>
		<td>:</td>
		<td><input type="number" name="kelas"/></td>
	</tr>
	<tr>
		<td>Jurusan</td>
		<td>:</td>
		<td><input type="text" name="jurusan"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Simpan"/></td>
	</tr>
</table>
</form>
</body>
</html>