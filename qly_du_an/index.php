<?php
include ('../../../config.php');
$sql = "select * from duan order by idduan desc";
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
            <td><?php echo $dong['tenduan'] ?></td>
            <td><?php echo $dong['trigia'] ?></td>
            <td><?php echo $dong['sotoanha'] ?></td>
            <td><?php echo $dong['congtytructhuoc'] ?></td>
            <td><?php echo $dong['tinhtrang'] ?></td>
            <td><a href="index.php?quanli=quanliduan&ac=sua&id=<?php echo $dong['idduan'] ?>">Sửa</a></td>
            <td><a href="modules/quanliduan/xuli.php?id=<?php echo $dong['idduan'] ?>"<i onclick="return confirm('Bạn có chắc chắn muốn xóa dự án này không?');">Xóa</a></td>
        </tr>      
        <?php
        $i++;
    }
    ?>
</table>
