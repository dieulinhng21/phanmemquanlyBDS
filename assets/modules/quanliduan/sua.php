<?php
include ('../../../config.php');
$sql = "select * from duan order by idduan desc = ".$_GET["id"];
$run = mysqli_query($conn, $sql);
$dong = mysqli_fetch_array($run);
?>
<form action="modules/quanliduan/xuli.php?id=<?php echo $dong['id'] ?>" method="post" enctype="multipart/form-data">
    <table width="100%" border="1">
        <tr>
            <td colspan="2"><div align="center">Sửa dự án</div></td>
        </tr>
        <tr>
            <td>Tên dự án</td>
            <td><input type="text" name="tenduan" value = "<?php echo $dong['Ten'] ?>"</td>
        </tr>
        <tr>
            <td>Trị giá</td>
            <td><input type="text" name="trigia" value = "<?php echo $dong['Tri_gia'] ?>"</td>
        </tr>
        <tr>
            <td>Số tòa nhà</td>
            <td><input type="text" name="sotoanha" value = "<?php echo $dong['So_toa_nha'] ?>"</td>
        </tr>
        <tr>
            <td>Công ty trực thuộc</td>
            <td><input type="text" name="congtytructhuoc" value = "<?php echo $dong['Cong_ty_truc_thuoc'] ?>"</td>
        </tr>
        <tr>
            <td>Tình trạng</td>
            <td><input type="text" name="tinhtrang" value = "<?php echo $dong['Tinh_trang'] ?>"</td>
        </tr>
        <tr>
            <td colspan="2"><div align="center">
                    <input type="submit" name="sua" id="sua" value="Hoàn thành"/></div></td>
        </tr>
    </table>
</form>   

