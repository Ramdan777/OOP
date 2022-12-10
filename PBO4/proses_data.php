<?php 
include('koneksi.php');
$koneksi = new database();

$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data($_POST['id'],$_POST['NISN'],$_POST['nama'],$_POST['kelas'],$_POST['jurusan']);
	header('location:tampil.php');
}
elseif($action=="update")
{
	$koneksi->update_data($_POST['NISN'],$_POST['nama'],$_POST['kelas'],$_POST['jurusan'],$_POST['id']);
	header('location:tampil.php');
}
elseif($action=="delete")
{
	$id = $_GET['id'];
	$koneksi->delete_data($id);
	header('location:tampil.php');
}
?>