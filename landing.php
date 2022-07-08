<?php
include './komponen/head.php';
include './komponen/navbar.php';
?>

<section id="hero" class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 pt-4">
                <h3 class="fw-bold display-4"> Daftar <span style="color: rgb(230, 41, 173);">Mata Kuliah</span> dan <span style="color: rgb(230, 41, 173);"> Pertemuan </span> Setiap <span style="color: rgb(230, 41, 173);"> Matkul </span></h3>
                <p class="my-3"> Tambahkan data, ubah, delete dan read daftar mata kuliah beserta pertemuan setiap mata kuliah nya Prodi D3 Teknik Informatika </p>
                <p class="my-3" style=" font-weight: bolder;"> Universitas Amikom Yogyakarta </p>
                <a href="./crud/matkul/add.php">
                <button type="button" class="btn btn-warning">Tambah Mata Kuliah</button>
                <a href="logout.php" class="btn btn-danger"> Logout </a>
            </a>
            </div>
            <div class="col-md-6">
                <img class="w-100" height="330px"  style="display: block; margin: auto;" src="logo.png" alt="">
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <h3 class="mb-5 text-center" style=" font-weight: bolder; ">Daftar Mata Kuliah</h3>

        <div class="row justify-content-center">
            <?php
            include './proses_crud/config.php';

            $sql = "SELECT * FROM matkul";
            $query = mysqli_query($conn, $sql);

            while ($data = mysqli_fetch_array($query)) {
            ?>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-header" style="background-color: rgb(119, 116, 119); color: rgb(255, 255, 255);">
                            <h6><?php echo $data['title_course'] ?></h6>
                        </div>
                        <div class="card-body">
                            <p class="mb-1" style=" font-weight: bolder;">Deskripsi Mata Kuliah</p>
                            <p><?php echo $data['description_course'] ?></p>
                        </div>
                        <div class="card-footer">
                            <a href="./crud/matkul/read.php?id=<?php echo $data['id_course'] ?>">
                                <button type="button" class="btn " style="background-color: rgb(223, 113, 214);">Open</button>
                            </a>
                            <a href="./crud/matkul/edit.php?id=<?php echo $data['id_course'] ?>">
                                <button type="button" class="btn btn-info">Edit</button>
                            </a>
                            <a href="./proses_crud/matkul/delete.php?id=<?php echo $data['id_course'] ?>">
                                <button type="button" class="btn btn-danger">Delete</button>
                            </a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>

    </div>
</section>

<?php
include './komponen/footer.php';
?>