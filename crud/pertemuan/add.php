<?php
include '../../komponen/head.php';
include '../../komponen/navbar.php';

$id_course = $_GET['id_course'];
?>

<section class="py-5">
    <div class="container">
        <h3 class="mb-4">Tambah Pertemuan Baru</h3>
        <div class="col-md-6">
            <form action="../../proses_crud/pertemuan/create.php" method="post">
                <input class="form-control " type="hidden" name="id_course" value="<?php echo $id_course ?>">
                <div class="mb-3">
                    <label class="form-label" for="title_material">Nama pertemuan</label>
                    <input type="text" name="title_material" id="title_material" class="form-control" placeholder="Masukkan nama pertemuan" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="description_material">Deskripsi pertemuan</label>
                    <textarea name="description_material" id="description_material" rows="5" class="form-control" placeholder="Masukkan deskripsi pertemuan" required></textarea>
                </div>
                <button type="submit" name="submit" class="btn btn-success">Submit</button>
                <button type="reset" name="reset" class="btn btn-danger"> Reset </button>
            </form>
        </div>
    </div>
</section>

<?php
include '../../komponen/footer.php';
?>