<?php
include '../config.php';

if(isset($_POST['submit'])){
	$title_course = $_POST['title_course'];
	$description_course = $_POST['description_course'];
	
	$sql = "INSERT INTO matkul(title_course, description_course) VALUES('$title_course', '$description_course')";
	$query = mysqli_query($conn, $sql);
	
	if($query){
		header('location:../../index.php');
	}
	else{
		die("Proses Pemasukan Data Gagal");
	}
} else {
	die("Klik Submit");
}
?>