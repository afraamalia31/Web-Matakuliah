<?php
include '../config.php';

if(isset($_POST['submit'])){
    $id_course = $_POST['id_course'];

	$title_material = $_POST['title_material'];
	$description_material = $_POST['description_material'];
	
	$sql = "INSERT INTO pertemuan(course_id, title_material, description_material) VALUES('$id_course', '$title_material', '$description_material')";
	$query = mysqli_query($conn, $sql);
	
	if($query){
		header('location:../../crud/matkul/read.php?id=' . $id_course);
	}
	else{
		die("Data Gagal di Edit");
	}
} else {
	die("Klik Submit");
}
?>