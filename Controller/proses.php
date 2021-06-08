<?php
include "../Model/data.php";
$db = new data();
$aksi = $_GET ['aksi'];
if($aksi=="insert_user"){
    $nama = $_POST['name'];
    $password = $_POST['password'];
$db -> insert_user($nama, $password);
header('location:../view/home.php');
}
else if($aksi == "login"){
    foreach($db->viewuser() as $a){
        if($a['nama']==$_POST['name'] && $a['password']==$_POST['password']){
            header('location:../view/home.php');
            break;
        }else if($_POST['name']=="admin" && $_POST['password']=="admin"){
            header('location:../view/admin/admin.php');
        } else {
            header('location:../view/login.php');
        }

    }
}
else if($aksi=="regis"){
    $nama = $_POST['name'];
    $password = $_POST['password'];
$db -> insert_user($nama, $password);
header('location:../index.php');
}

else if($aksi == "loginapi"){
    header('location:../view/home.php');
}

else if($aksi == "order"){
    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];
    $alamat = $_POST['alamat'];
    $db -> insert_barang($nama, $jumlah, $alamat);
    header('location:../view/waiting.php');
}

else if ($aksi == "delete_user"){
    $nomor = $_GET['nomor'];
    $db-> delete_user ($nomor);
    header('location:../view/admin/admin.php');
}

else if ($aksi == "delete_order"){
    $nomor = $_GET['nomor'];
    $db-> delete_order ($nomor);
    header('location:../view/admin/admin.php');
}

else if($aksi == "update_user"){
    $nama = $_POST['name'];
    $password = $_POST['password'];
    $nomor = $_POST['nomor'];
    $db->update_user($nomor, $nama, $password);
    header('location:../view/admin/admin.php');
}

else if($aksi == "update_order"){
    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];
    $alamat = $_POST['alamat'];
    $db -> update_order($nomor, $nama, $jumlah, $alamat);
    header('location:../view/admin/admin.php');
}
?>