<?php
include ('../../../config.php');
$sql = "select * from khachhang order by idkhachhang desc =$_GET[id]";
$run = mysqli_query($conn, $sql);
$dong = mysqli_fetch_array($run);
?>
<form action="modules/quanlikhachhang/xuly.php?id=<?php echo $dong['idkhachhang'] ?>" method="post" enctype="multipart/form-data">
    <table width="100%" border="1">
        <tr>
            <td colspan="2"><div align="center">Sửa dự án</div></td>

        <tr>
            <td>Tên khách hàng</td>
            <td><input type="text" name="tenduan" value = "<?php echo $dong['hoten'] ?>"</td>
        </tr>
        <tr>
            <td>Năm sinh</td>
            <td><input type="text" name="trigia" value = "<?php echo $dong['namsinh'] ?>"</td>
        </tr>
        <tr>
            <td>Số điện thoại</td>
            <td><input type="text" name="sotoanha" value = "<?php echo $dong['sodienthoai'] ?>"</td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="congtytructhuoc" value = "<?php echo $dong['email'] ?>"</td>
        </tr>
        <tr>
            <td>Tình trạng</td>
            <td><input type="text" name="tinhtrang" value = "<?php echo $dong['vip'] ?>"</td>
        </tr>
        <tr>
            <td colspan="2"><div align="center">
                    <input type="submit" name="edit" id="sua" value="Hoàn thành"/></div></td>
        </tr>
    </table>
</form>   

