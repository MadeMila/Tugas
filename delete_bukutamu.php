<?php
include "xclass.php";

$id_bukutamu = $_GET['id'];

$c_bukutamu = new bukutamu();

$delete = $c_bukutamu->delete_bukutamu($id_bukutamu);

if($delete){
    echo "<script>alert('Data berhasil di hapus..!'); window.location='bukutamu.php'</script>";
}
