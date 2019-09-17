<?php

include ('../../../config.php');

$id = isset($_GET['id']) ? intval($_GET['id']) : "";
$Ten = $_POST["Ten"];
$Tri_gia = $_POST["Tri_gia"];
$So_toa_nha = $_POST["So_toa_nha"];
$Cong_ty_truc_thuoc = $_POST["Cong_ty_truc_thuoc"];
$Tinh_trang = $_POST["Tinh_trang"];
if (isset($_POST['them'])) {
    //them
    $sql_them = ("insert into duan (Ten, Tri_gia, So_toa_nha, Cong_ty_truc_thuoc, Tinh_trang) value('$Ten', '$Tri_gia', '$So_toa_nha', '$Cong_ty_truc_thuoc', '$Tinh_trang')");
    mysqli_query($conn, $sql_them);
    header('location:../../../layout.php?quanly=duan&ac=lietke');
} elseif (isset($_POST['sua'])) {
    //sua
    $sql_sua = "update duan set Ten='$Ten',Tri_gia='$Tri_gia', So_toa_nha='$So_toa_nha',Cong_ty_truc_thuoc='$Cong_ty_truc_thuoc', Tinh_trang='$Tinh_trang' where Id_duan='$_GET[id]'";
    mysqli_query($conn, $sql_sua);
    header('location:../../../layout.php?quanly=duan&ac=lietke');
} else {
    // xoa
    $sql_xoa = "delete from duan where Id_duan = $_GET[id]";
    mysqli_query($conn, $sql_xoa);
    header('location:../../../layout.php?quanly=duan&ac=lietke');
}
?>