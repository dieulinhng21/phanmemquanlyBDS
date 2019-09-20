<?php

include '../../../config.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : "";

$tenkhachhang = $_POST['hoten'];
$namsinh = $_POST['namsinh'];
$sodienthoai = $_POST['sodienthoai'];
$email = $_POST['email'];
$tinhtrang = $_POST['vip'];

if (isset($_POST['add'])) {
    //them
    $sql_them = "INSERT INTO `khachhang`(`hoten`, `namsinh`, `sodienthoai`, `email`, `vip`) "
            . "VALUES ('$tenkhachhang', '$namsinh', '$sodienthoai', '$email', '$tinhtrang')";

    if (mysqli_query($conn, $sql_add)) {
        ('success');
    } else {
        die('error');
    }

    header('location:layout.php?quanly=dukhachhang&ac=index');
} elseif (isset($_POST["edit"])) {
    //sua
    $sql_sua = "update duan set tenduan='$tenkhachhang',trigia='$namsinh', sotoanha='$sodienthoaia', congtytructhuoc='$email', tinhtrang='$tinhtrang' where id='$id' ";
    mysqli_query($conn, $sql);
    header('location:../layout.php?quanly=duan&ac=lietke');
} else {

    $sql = "delete from duan where idduan ='$id' ";
    mysqli_query($conn, $sql);
    header('location:../../layout.php?quanlykhachhang=quanly=khachhang&ac=index');
}
?>
