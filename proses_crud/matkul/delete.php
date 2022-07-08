<?php
include '../config.php';

if(isset($_GET['id'])){
	$id = $_GET['id'];
	
	$sql = "DELETE FROM matkul WHERE id_course = '$id'";
	$query = mysqli_query($conn, $sql);
	
	if($query){
		header('location:../../landing.php');
	}
	else{
		die("Data Gagal di Hapus");
	}
}
else{
	die("ID Tidak Ditemukan");
}
?>