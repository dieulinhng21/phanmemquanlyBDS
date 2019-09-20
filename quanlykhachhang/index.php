<?php
include ('../../config.php');
$sql = "select * from khachhang order by id desc";
$run = mysqli_query($conn, $sql);
?>
<table width="100%" border="1">
    <tr>
        <td>ID</td>
        <td>Tên Khách Hàng</td>
        <td>Năm sinh</td>
        <td>Số điện thoại</td>
        <td>Email</td>
        <td>Tình Trạng</td>
        <td colspan="2">Quản lý</td>
    </tr>
    <?php
    $i = 0;
    while ($dong = mysqli_fetch_array($run)) {
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $dong['hoten'] ?></td>
            <td><?php echo $dong['namsinh'] ?></td>
            <td><?php echo $dong['sodienthoai'] ?></td>
            <td><?php echo $dong['email'] ?></td>
            <td><?php echo $dong['vip'] ?></td>
            <td><a href="index.php?quanly=quanlykhachhang&ac=edit&id=<?php echo $dong['idkhachhang'] ?>">Sửa</a></td>
            <td><a href="/quanlykhachhang/xuly.php?id=<?php echo $dong['idkhachhang'] ?>"<i onclick="return confirm('Bạn có chắc chắn muốn xóa khách hàng này không?');">Xóa</a></td>
        </tr>      
        <?php
        $i++;
    }
    ?>
</table>
