<?php
include "header.php";
include "xclass.php";

$c_bukutamu = new bukutamu();
$id_bukutamu = $_GET['id'];

$data = $c_bukutamu->edit_bukutamu($id_bukutamu);

?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Buku Tamu</h1>
    </div>

    <form action="proses_editbukutamu.php" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="hidden" class="form-control" name="id_bukutamu" value="<?php echo $data['id_bukutamu'] ?>">
            <input type="text" class="form-control" name="nama" value="<?php echo $data['nama'] ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Jenis Kelamin</label>
            <select name="jeniskelamin" class="form-control">
                <?php foreach ($c_bukutamu->get_jeniskelamin() as $kt) {
                    if ($kt['nama_jeniskelamin'] == $data['jeniskelamin']) {
                ?>
                        <option selected><?php echo $kt['nama_jeniskelamin'] ?></option>
                    <?php } else { ?>
                        <option><?php echo $kt['nama_jeniskelamin'] ?></option>
                <?php }
                } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">No Telepon</label>
            <input type="number" class="form-control" name="notlp" value="<?php echo $data['notlp'] ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Alamat</label>
            <input type="text" class="form-control" name="alamat" value="<?php echo $data['alamat'] ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Keperluan</label>
            <input type="text" class="form-control" name="keperluan" value="<?php echo $data['keperluan'] ?>">
        </div>
        </br>
        <button type="submit" class="btn btn-warning">Submit</button>
    </form>

</main>
<?php include "footer.php" ?>