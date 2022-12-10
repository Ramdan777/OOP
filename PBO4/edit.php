<?php 	
include('koneksi.php');
$db = new database();
$id_siswa = $_GET['id'];
if(! is_null($id_siswa))
{
	$data_siswa = $db->get_by_id($id_siswa);
}
else
{
	header('location:tampil.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>EDIT DATA</title>
</head>
<body>
<h3>Update Data User</h3>
<hr/>
<form method="post" action="proses_data.php?action=update">
<input type="hidden" name="id" value="<?php echo $data_siswa['id']; ?>"/>
<table>
	<tr>
		<td>Id</td>
		<td>:</td>
		<td><input type="text" name="id" value="<?php echo $data_siswa['id']; ?>"/></td>
	</tr>
	<tr>
		<td>NISN</td>
		<td>:</td>
		<td><input type="text" name="NISN" value="<?php echo $data_siswa['NISN']; ?>"/></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama" value="<?php echo $data_siswa['nama']; ?>"/></td>
	</tr>
	<tr>
		<td>Kelas</td>
		<td>:</td>
		<td><input type="text" name="kelas" value="<?php echo $data_siswa['kelas']; ?>"/></td>
	</tr>
	<tr>
		<td>Jurusan</td>
		<td>:</td>
		<td><input type="text" name="jurusan" value="<?php echo $data_siswa['jurusan']; ?>"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Update"/></td>
	</tr>
</table>
</form>
</body>
</html>