<?php
include ('../../../config.php');
$sql = "select * from duan order by ID_duan desc";
$run = mysqli_query($conn, $sql);
?>
<table width="100%" border="1">
    <tr>
        <td>ID</td>
        <td>Tên Dự Án</td>
        <td>Vị Trí</td>
        <td>Số tòa nhà</td>
        <td>Công Ty Trực Thuộc</td>
        <td>Tình Trạng</td>
        <td colspan="2">Quản lý</td>
    </tr>
    <?php
    $i = 0;
    while ($dong = mysqli_fetch_array($run)) {
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $dong['Ten'] ?></td>
            <td><?php echo $dong['Tri_gia'] ?></td>
            <td><?php echo $dong['So_toa_nha'] ?></td>
            <td><?php echo $dong['Cong_ty_truc_thuoc'] ?></td>
            <td><?php echo $dong['Tinh_trang'] ?></td>
            <td><a href="index.php?quanli=quanliduan&ac=sua&id=<?php echo $dong['Id_duan'] ?>">Sửa</a></td>
            <td><a href="modules/quanliduan/xuli.php?id=<?php echo $dong['Id_duan'] ?>"<i onclick="return confirm('Bạn có chắc chắn muốn xóa dự án này không?');">Xóa</a></td>
        </tr>      
        <?php
        $i++;
    }
    ?>
</table>
