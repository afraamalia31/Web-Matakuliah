<?php
include '../../komponen/head.php';
include '../../komponen/navbar.php';
include '../../proses_crud/config.php';
?>

<div class="container min-vh-100">
    <?php
    $id_course = $_GET['id'];

    $sql = "SELECT title_course FROM matkul WHERE id_course = $id_course";
    $query = mysqli_query($conn, $sql);

    while ($data = mysqli_fetch_array($query)) {
    ?>
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="my-5"><?php echo $data['title_course'] ?></h1>
        <a href="../pertemuan/add.php?id_course=<?php echo $id_course?>">
            <button type="button" class="btn btn-warning">Tambah Pertemuan</button>
        </a>
    </div>
    <?php
    }
    ?>

    <?php

    $sql = "SELECT * FROM matkul INNER JOIN pertemuan ON matkul.id_course = pertemuan.course_id WHERE pertemuan.course_id = $id_course";
    $query = mysqli_query($conn, $sql);

    $check = mysqli_num_rows($query);

    if ($check > 0) {
        $i = 0;
        while ($data = mysqli_fetch_array($query)) {
            $i++
    ?>

            <div class="card my-4">
                <div class="card-header" style="background-color: rgb(119, 116, 119); color: rgb(255, 255, 255);">
                    <h3>Pertemuan ke-<?php echo $i ?></h3>
                </div>
                <div class="card-body">
                    <h6 class="mb-1" ><?php echo $data['title_material'] ?></h6>
                    <p><?php echo $data['description_material'] ?></p>
                </div>
                <div class="card-footer">
                    <a href="../pertemuan/edit.php?id_material=<?php echo $data['id_material'] ?>&id_course=<?php echo $id_course ?>">
                        <button type="button" class="btn btn-info">Edit</button>
                    </a>
                    <a href="../../proses_crud/pertemuan/delete.php?id_material=<?php echo $data['id_material'] ?>&id_course=<?php echo $id_course ?>">
                        <button type="button" class="btn btn-danger">Delete</button>
                    </a>
                </div>
            </div>

        <?php
        }
    } else {
        ?>
        
        <h6>Belum Ada Pertemuan di Mata Kuliah Ini</h6>

    <?php
    }
    ?>
</div>

<?php
include '../../komponen/footer.php';
?>