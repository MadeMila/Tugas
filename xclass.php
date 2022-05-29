<?php
include "koneksi.php";

class bukutamu extends database{ 
    function __construct() 
    {
        parent::__construct();
    }

    function tampil_data_bukutamu()
    {
        $qry = "SELECT * FROM bukutamu";
        $exec = mysqli_query($this->con,$qry);
        while($x  = mysqli_fetch_array($exec)){
            $data[] = $x;
        }

        return $data;
    }

    function insert_data_bukutamu($data){
        $qry = "INSERT INTO bukutamu (id_bukutamu, nama, jeniskelamin, notlp, alamat, keperluan) 
                VALUES('".$data['id_bukutamu']. "','".$data['nama']. "','" . $data['jeniskelamin'] . "','" . $data['notlp'] . "','" . $data['alamat'] . "','" . $data['keperluan'] . "')";
        $exec = mysqli_query($this->con,$qry);

        return $exec;
    }

    function edit_bukutamu($id)
    {
        $qry = "SELECT * from bukutamu WHERE id_bukutamu= '$id'";
        $exec = mysqli_query($this->con, $qry);
        $data = mysqli_fetch_assoc($exec);
        return $data;
    }

    function update_bukutamu($data)
    {
        $qry = "UPDATE bukutamu SET 
                nama = '".$data['nama']. "', 
                jeniskelamin = '" . $data['jeniskelamin'] . "',
                notlp = '".$data['notlp']. "', 
                alamat = '" . $data['alamat'] . "',
                keperluan = '" . $data['keperluan'] . "' where id_bukutamu = '".$data['id_bukutamu']."' 
                ";
        $exec = mysqli_query($this->con, $qry);
        return $exec;
    }

    function delete_bukutamu($id)
    {
        $qry = "DELETE FROM bukutamu WHERE id_bukutamu = '$id'";
        $exec = mysqli_query($this->con,$qry);
        return $exec;
    }

    function get_jeniskelamin()
    {
        $jeniskelamin = array(
            ['id_jeniskelamin' => 1, 'nama_jeniskelamin' => 'Perempuan'],
            ['id_jeniskelamin' => 2, 'nama_jeniskelamin' => 'Laki-laki'],
        );

        return $jeniskelamin;
    }
}

//------Admin
class user extends database{
    function __construct()
    {
        parent::__construct();
    }
    function tampil_data_user()
    {
        $qry = "SELECT * FROM user";
        $exec = mysqli_query($this->con,$qry);
        while($x  = mysqli_fetch_array($exec)){
            $data[] = $x;
        }

        return $data;

    }
    function insert_data_user($data){
        $qry = "INSERT INTO user (id_user,username,pass_word,alamat,nama_user) 
                VALUES('".$data['id_user']. "','" . $data['username'] . "','" . $data['pass_word'] . "','" . $data['alamat'] . "','" . $data['nama_user'] . "')";
        $exec = mysqli_query($this->con,$qry);

        return $exec;

    }
    function edit_user($id)
    {
        $qry = "SELECT * from user WHERE id_user = '$id'";
        $exec = mysqli_query($this->con, $qry);
        $data = mysqli_fetch_assoc($exec);
        return $data;
    }
    function update_user($data)
    {
        $qry = "UPDATE user SET 
                username = '".$data['username']. "', 
                pass_word = '" . $data['pass_word'] . "',
                alamat = '" . $data['alamat'] . "',
                nama_user = '" . $data['nama_user'] . "' where id_user = '".$data['id_user']."' 
                ";
        $exec = mysqli_query($this->con, $qry);
        return $exec;
    }
    function delete_user($id)
    {
        $qry = "DELETE FROM user WHERE id_user = '$id'";
        $exec = mysqli_query($this->con,$qry);
        return $exec;
    }
}