<?php 
include "xclass.php";
$c_user = new user();


$data = array(
    'id_user' => $_POST['id_user'],
    'username' => $_POST['username'],
    'pass_word' => $_POST['pass_word'],
    'nama_user' => $_POST['nama_user'],
    'kota' => $_POST['kota'],
    'foto' => $_POST['foto']
);

    $insert = $c_user->insert_data_user($data);
    if($insert)
{
    echo "<script>alert('Data berhasil di simpan..!'); window.location='user.php'</script>";
}

