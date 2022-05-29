<?php
include "xclass.php";
$c_bukutamu = new bukutamu();

$data = array(
    'nama' => $_POST['nama'],
    'jeniskelamin' => $_POST['jeniskelamin'],
    'notlp' => $_POST['notlp'],
    'alamat' => $_POST['alamat'],
    'keperluan' => $_POST['keperluan'],
    'id_bukutamu' => $_POST['id_bukutamu']
);

$update = $c_bukutamu->update_bukutamu($data);
if($update)
{
    echo "<script>alert('Data berhasil di edit..!'); window.location='bukutamu.php'</script>";
}
