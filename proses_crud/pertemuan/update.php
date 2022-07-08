<?php
include '../config.php';

if(isset($_POST['submit'])){
    $id_course = $_POST['id_course'];
    $id_material = $_POST['id_material'];
    $title_material = $_POST['title_material'];
    $description_material = $_POST['description_material'];

    $sql = "UPDATE pertemuan SET title_material = '$title_material', description_material = '$description_material' WHERE id_material = '$id_material'";
    $query = mysqli_query($conn,$sql);

    if($query){
        header('location:../../crud/matkul/read.php?id='. $id_course);
    }
    else{
        die("Data Gagal di Edit");
    }
} else {
	die("ID Tidak Ditemukan");
}

?>