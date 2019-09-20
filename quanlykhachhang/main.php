<div class="left">
    <?php
    if (isset($_GET['ac'])) {
        $tam = $_GET['ac'];
    } else {
        $tam = '';
    }if ($tam == 'add') {
        include('modules/quanlikhachhang/add.php');
    }if ($tam == 'sua') {
        include('modules/quanlikhachhang/edit.php');
    }
    ?>
</div>
<div class="right">
    <?php
    include('modules/quanlikhachhang/index.php');
    ?>
</div>

