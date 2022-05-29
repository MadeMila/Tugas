<?php
include "xclass.php";
$c_bukutamu = new bukutamu();

$data = array(
    'id_bukutamu' => $_POST['id_bukutamu'],
    'nama' => $_POST['nama'],
    'jeniskelamin' => $_POST['jeniskelamin'],
    'notlp' => $_POST['notlp'],
    'alamat' => $_POST['alamat'],
    'keperluan' => $_POST['keperluan']
);

$insert = $c_bukutamu->insert_data_bukutamu($data);
if($insert)
{
    echo "<script>alert('Data berhasil di simpan..!'); window.location='bukutamu.php'</script>";
}
