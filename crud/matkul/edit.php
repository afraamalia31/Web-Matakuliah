<?php
include '../../komponen/head.php';
include '../../komponen/navbar.php';
include '../../proses_crud/config.php';

$id = $_GET['id'];
$sql = "SELECT * FROM matkul WHERE id_course = '$id'";
$query = mysqli_query($conn, $sql);
while ($data = mysqli_fetch_array($query)) {
?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                <h3 class="mb-4">Edit Mata Kuliah</h3>
                    <form action="../../proses_crud/matkul/update.php" method="POST">
                        <input class="form-control " type="hidden" name="id_course" value="<?php echo $data['id_course'] ?>">
                        <div class="mb-3">
                            <label class="form-label" for="title_course">Nama Mata Kuliah</label>
                            <input class="form-control " type="text" name="title_course" value="<?php echo $data['title_course'] ?>">                        
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="description_course">Deskripsi Mata Kuliah</label>
                            <textarea name="description_course" id="description_course" rows="5" class="form-control" placeholder="Masukkan deskripsi matakuliah" required><?php echo $data['description_course'] ?></textarea>
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