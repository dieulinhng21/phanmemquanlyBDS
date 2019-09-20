<div class="left">
    <?php
    if (isset($_GET['ac'])) {
        $tam = $_GET['ac'];
    } else {
        $tam = '';
    }if ($tam == 'them') {
        include('modules/quanliduan/them.php');
    }if ($tam == 'sua') {
        include('modules/quanliduan/sua.php');
    }
    ?>
</div>
<div class="right">
    <?php
    include('modules/quanliduan/lietke.php');
    ?>
</div>

