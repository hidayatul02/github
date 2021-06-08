<?php
class data {
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $db = "projeckuts";

    function __construct(){
        $this->con= mysqli_connect($this->host,$this->username,$this->password,$this->db);
        mysqli_select_db($this->con,$this->db);
    }

    function insert_user($name, $password){
        mysqli_query($this->con, "insert into user values ('','$name','$password')");
    }

    function viewuser(){
        $query = mysqli_query($this->con,"SELECT * FROM user");
        while($row = mysqli_fetch_array($query)){
            $see[] = $row;

        }
        return $see;
    }

    function vieworder(){
        $query = mysqli_query($this->con,"SELECT * FROM beli");
        while($row = mysqli_fetch_array($query)){
            $see[] = $row;

        }
        return $see;
    }

    function insert_barang($nama, $jumlah, $alamat){
        mysqli_query($this->con, "insert into beli values ('','$nama', '$jumlah', '$alamat')");
    }

    function delete_user($nomor){
        mysqli_query($this->con, "DELETE FROM user WHERE nomor = '$nomor'");
    }

    function delete_order($nomor){
        mysqli_query($this->con, "DELETE FROM beli WHERE nomor = '$nomor'");
    }

    function add_user($nomor){
        $query = mysqli_query($this->con,"SELECT * FROM user WHERE nomor = '$nomor'");
        while($row = mysqli_fetch_array($query)){
            $see[] = $row;

        }
        return $see;
    }

    function add_order($nomor){
        $query = mysqli_query($this->con,"SELECT * FROM beli WHERE nomor = '$nomor'");
        while($row = mysqli_fetch_array($query)){
            $see[] = $row;

        }
        return $see;
    }

    function update_user($nomor, $nama, $password){
        mysqli_query($this->con, "UPDATE user SET nama='$nama', password='$password' WHERE nomor = '$nomor'");
    }

    function update_order($nomor, $jumlah, $alamat){
        mysqli_query($this->con, "UPDATE beli SET nama='$nama', jumlah='$jumlah', alamat='$alamat' WHERE nomor = '$nomor'");
    }
}
?>