<?php
include '../../komponen/head.php';
include '../../komponen/navbar.php';
include '../../proses_crud/config.php';

$id_material = $_GET['id_material'];
$id_course = $_GET['id_course'];
$sql = "SELECT * FROM pertemuan WHERE id_material = '$id_material'";
$query = mysqli_query($conn, $sql);
while ($data = mysqli_fetch_array($query)) {
?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                <h3 class="mb-4">Edit Materi</h3>
                    <form action="../../proses_crud/pertemuan/update.php" method="POST">
                        <input class="form-control " type="hidden" name="id_material" value="<?php echo $data['id_material'] ?>">
                        <input class="form-control " type="hidden" name="id_course" value="<?php echo $id_course ?>">
                        <div class="mb-3">
                            <label class="form-label" for="title_material">Judul pertemuan</label>
                            <input class="form-control " type="text" name="title_material" value="<?php echo $data['title_material'] ?>">                        
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="description_material">Deskripsi materi</label>
                            <textarea name="description_material" id="description_material" rows="5" class="form-control" placeholder="Masukkan deskripsi matakuliah" required><?php echo $data['description_material'] ?></textarea>
                        </div>
                        <button class="btn btn-success" type="submit" name="submit">Submit</button>
                       
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php
}
include '../../komponen/footer.php';
?>