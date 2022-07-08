<?php
include '../config.php';

if(isset($_POST['submit'])){
    $id_course = $_POST['id_course'];
    $title_course = $_POST['title_course'];
    $description_course = $_POST['description_course'];

    $sql = "UPDATE matkul SET title_course = '$title_course', description_course = '$description_course' WHERE id_course = '$id_course'";
    $query = mysqli_query($conn,$sql);

    if($query){
        header('location:../../index.php');
    }
    else{
        die("Data Gagal di Edit");
    }
} else {
	die("Klik Submit");
}

?>