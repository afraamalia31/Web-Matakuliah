<?php
include '../config.php';

if(isset($_GET['id_material'])){
    $id_course = $_GET['id_course'];
    $id_material = $_GET['id_material'];

    $sql = "DELETE FROM pertemuan WHERE id_material = '$id_material'";
	$query = mysqli_query($conn, $sql);
	
	if($query){
		header('location:../../crud/matkul/read.php?id='. $id_course);
	}
	else{
		die("Data Gagal di Hapus");
	}
}
else{
	die("ID Salah");
}
?>
