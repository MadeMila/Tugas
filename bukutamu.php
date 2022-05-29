<?php
include "header.php";
include "xclass.php";

$c_bukutamu = new bukutamu();
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Buku Tamu</h1>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <a href="input_bukutamu.php" style="padding-right: 3px;"><button type="button" class="p-2 mb-2 btn btn-warning">Input Buku Tamu</button></a>  
            <a href="cetak-laporan/laporan-cetakpegawai.php"><button type="button" class="p-2 mb-2 btn btn-dark">Print</button></a>
            
            <br>
            <br>


            <thead>
                <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>No Telepon</th>
                    <th>Alamat</th>
                    <th>Pesan</th>
                    <th>Act</th>
                </tr>
            </thead>


            <tbody>
                <?php
                $no = 1;
                foreach ($c_bukutamu->tampil_data_bukutamu() as $data) {
                ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $data['id_bukutamu'] ?></td>
                        <td><?php echo $data['nama'] ?></td>
                        <td><?php echo $data['jeniskelamin'] ?></td>
                        <td><?php echo $data['notlp'] ?></td>
                        <td><?php echo $data['alamat'] ?></td>
                        <td><?php echo $data['keperluan'] ?></td>
                        <td style="width: 12%;">
                            <a href="edit_bukutamu.php?id=<?php echo $data['id_bukutamu'] ?>"><button class="btn btn-outline-secondary btn-sm">Edit</button></a>
                            <a href="delete_bukutamu.php?id=<?php echo $data['id_bukutamu'] ?>"><button class="btn btn-outline-warning btn-sm">Delete</button></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</main>

<?php include "footer.php" ?>