<?php

include '../../../config.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : "";

$tenduan = $_POST['tenduan'];
$trigia = $_POST['trigia'];
$sotoanha = $_POST['sotoanha'];
$congtytructhuoc = $_POST['congtytructhuoc'];
$tinhtrang = $_POST['tinhtrang'];

if (isset($_POST['them'])) {
    //them
    $sql_them = "INSERT INTO `duan`(`tenduan`, `trigia`, `sotoanha`, `contytructhuoc`, `tinhtrang`) VALUES ('$tenduan', '$trigia', '$sotoanha', '$congtytructhuoc', '$tinhtrang')";

    if (mysqli_query($conn, $sql_them)) {
        ('success');
    } else {
        die('error');
    }

    header('location:layout.php?quanly=duan&ac=lietke');
} elseif (isset($_POST["sua"])) {
    //sua
    $sql_sua = "update duan set tenduan='$tenduan',trigia='$trigia', sotoanha='$sotoanha', congtytructhuoc='$congtytructhuoc', tinhtrang='$tinhtrang' where idduan='$id' ";
    mysqli_query($conn, $sql);
    header('location:../layout.php?quanly=duan&ac=lietke');
} else {

    $sql = "delete from duan where idduan ='$id' ";
    mysqli_query($conn, $sql);
    header('location:../../layout.php?quanli=quanly=duan&ac=lietke');
}
?>
