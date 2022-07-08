<?php
include '../../komponen/head.php';
include '../../komponen/navbar.php';
?>

<section class="py-5">
    <div class="container">
        <h3 class="mb-4">Tambah Mata Kuliah </h3>
        <div class="col-md-6">
            <form action="../../proses_crud/matkul/create.php" method="post">
                <div class="mb-3">
                    <label class="form-label" for="title_course">Nama Mata Kuliah</label>
                    <input type="text" name="title_course" id="title_course" class="form-control" placeholder="Masukkan nama matakuliah" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="description_course">Deskripsi Mata Kuliah</label>
                    <textarea name="description_course" id="description_course" rows="5" class="form-control" placeholder="Masukkan deskripsi matakuliah" required></textarea>
                </div>
                <button type="submit" name="submit" class="btn btn-success"> Submit</button>
                <button type="reset" name="reset" class="btn btn-danger"> Reset </button>
            </form>
        </div>
    </div>
</section>

<?php
include '../../komponen/footer.php';
?>