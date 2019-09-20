<!DOCTYPE html>
<html lang="en" class="js">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <title>AZ Land ., JSC</title>

   

    <!-- BEGIN BASE CSS STYLE -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
          type="text/css">
    <link href="../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/essential.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css">
    <!-- BEGIN END BASE CSS STYLE -->

    <link href="../assets/plugins/fullcalendar/fullcalendar.print.css" rel="stylesheet" media='print'/>
    <link href="../assets/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet"/>
    <link href="../assets/plugins/sweet_alert/sweetalert.css" rel="stylesheet"/>
    <link href="../assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet"/>
    <link href="../assets/plugins/owl.carousel/css/owl.carousel.css" rel="stylesheet"/>
</head>

<!--Begin Sidebar-->
<div class="sidebar" data-color="black" data-image="../assets/images/sidebar-bg.jpg">
    <div class="sidebar-wrapper">
        <!--Begins Logo start-->

        <!--End Logo start-->

        <!--Begins User Section-->
        <div class="user">
            <div class="photo">
                <img alt="" src="assets/images/avatar/default-avatar.jpg"/>
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#taxi_user_nav" class="collapsed">
                    <span class="ttu">Admin
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="collapse m-t-10" id="taxi_user_nav">
                    <ul class="nav">
                        <li>
                            <a class="profile-dropdown" href="javascript:void(0)">
                                <span class="sidebar-mini m-t-5"><i class="icon-user"></i></span>
                                <span class="sidebar-normal">My Profile</span>
                            </a>
                        </li>
                        <!--                        <li>
                                                    <a class="profile-dropdown" href="javascript:void(0)">
                                                        <span class="sidebar-mini m-t-5"><i class="icon-settings"></i></span>
                                                        <span class="sidebar-normal">Settings</span>
                                                    </a>
                                                </li>-->
                        <li>
                            <a class="profile-dropdown" href="javascript:void(0)">
                                <span class="sidebar-mini m-t-5"><i class="icon-logout"></i></span>
                                <span class="sidebar-normal">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--End User Section-->

        <ul class="nav" id="side_nav">
            <li class="nav-item has-sub-menu">
                <a class="nav-link m-t-0" data-toggle="collapse" href="#taxi_master">
                    <p>
                        Quản Lý Dự Án
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu" id="taxi_master">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="quanlyduan.php">
                                <span class="sidebar-normal"> AZ Lâm Viên Complex </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="customer_master.html">
                                <span class="sidebar-normal">AZ Sky Tower</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="customer_type_master.html">
                                <span class="sidebar-normal">BrightCity</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="user_master.html">
                                <span class="sidebar-normal">AZ Vân Canh Tower CT1</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="zone_master.html">
                                <span class="sidebar-normal">AZ Vân Canh Tower CT2</span>
                            </a>
                        </li>                        
                    </ul>
                </div>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="quanlychungcu.php">
                    <p>
                        Quản Lý Chung Cư
                    </p>
                </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="quanlyphong.php">
                    <p>
                        Quản Lý Phòng
                    </p>
                </a>
            </li>



            <li class="nav-item ">
                <a class="nav-link" href="quanlyhopdong.php">
                    <p>
                        Quản Lý Hợp Đồng
                    </p>
                </a>
            </li>


            <li class="nav-item ">
                <a class="nav-link" href="sangiaodich.php">
                    <p>
                        Sàn giao dịch
                    </p>
                </a>
            </li>


            <li class="nav-item has-sub-menu">
                <a class="nav-link m-t-0" data-toggle="collapse" href="#taxi_registration">
                    <p>
                        Quản Lý Khách Hàng
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu" id="taxi_registration">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="khachvip.php">
                                <span class="sidebar-normal">Khách Hàng VIP</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="thongtinkhachhang.php">
                                <span class="sidebar-normal">Thông Tin Khách Hàng</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>



            <li class="nav-item ">
                <a class="nav-link" href="quanlynguoidung.php">
                    <p>
                        Quản Lý Người Dùng
                    </p>
                </a>
            </li>


            <li class="nav-item has-sub-menu">
                <a class="nav-link m-t-0" data-toggle="collapse" href="#taxi_summary">
                    <p>
                        Quản Lý Địa Điểm
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu" id="taxi_summary">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="dispatcher_wise.html">
                                <span class="sidebar-normal">Cầu Giấy</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="vehicle_consolidate.html">
                                <span class="sidebar-normal">Hai Bà Trưng</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_link" href="call_flow.html">
                                <span class="sidebar-normal">Thanh Xuân</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
<!--End Sidebar-->

<!-- BEGIN PAGE-LOADER -->
<div class="preloader">
    <div class="loading">
        <div class="lds-circle">
            <div></div>
        </div>
    </div>
</div>


    <!-- BEGIN MAIN CONTENT -->
    <div class="main_content">
        <!-- BEGIN MAIN CONTENT -->
        <div class="main_content">
            <!-- BEGIN WRAPPER -->
            <div class="content-wrapper">
                <div class="page-header page-header-default">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h5><span class="f-w-700">Dashboard</span> - Dashboard v1</h5>

                            <ul class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="javascript:void(0)">Dashboard</a></li>
                                <li class="active">Dashboard v1</li>
                            </ul>
                        </div>                   
                    </div>
                </div>
            </div>
            <!-- END WRAPPER -->
        </div>
        <!--CHÈN CODE-->
        <body class="sidebar_menu top_nav_fixed">
            <div id="page-wrapper">
                <div class="graphs">
                    <?php
                    if (isset($_GET['quanly'])) {
                        $tam = $_GET['quanly'];
                    } else {
                        $tam = '';
                    }if ($tam == 'quanliduan') {
                        include('modules/quanliduan/chinh.php');
                    } else if ($tam == 'quanlichitietsp') {
                        include('modules/quanlichitietsp/main.php');
                    } else if ($tam == 'quanlimember') {
                        include('modules/quanlimember/main.php');
                    } else if ($tam == 'quanliorder') {
                        include('modules/quanliorder/main.php');
                    } else if ($tam == 'quanlitintuc') {
                        include('modules/quanlitintuc/main.php');
                    }
                    ?>

                </div>
            </div> 
        </body>
    </div>
</div>
<!-- BEGIN BASE JS -->
<script src="../assets/plugins/pace/pace.min.js"></script>
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<script src="../assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/plugins/nicescroll/nicescroll.min.js"></script>
<script src="../assets/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
<script src="../assets/plugins/jquery.slimscroll.min/jquery.slimscroll.min.js"></script>
<script src="../assets/plugins/sparkline/jquery.sparkline.js"></script>
<!-- END BASE JS -->

<!-- BEGIN PAGE LEVEL JS -->
<script src='../assets/plugins/snap/snap.svg-min.js'></script>
<script src="../assets/plugins/fullcalendar/lib/moment.min.js"></script>
<script src="../assets/plugins/fullcalendar/fullcalendar.min.js"></script>
<script src="../assets/plugins/fullcalendar/gcal.js"></script>
<script src="../assets/plugins/sweet_alert/sweetalert.min.js"></script>
<script src="../assets/plugins/select2/dist/js/select2.min.js"></script>
<script src="../assets/plugins/chartjs/Chart.min.js"></script>
<script src="../assets/plugins/owl.carousel/js/owl.carousel.min.js"></script>
<script src="../assets/js/app.js"></script>
<script src="../assets/js/index.js"></script>
<!-- END PAGE LEVEL JS -->
</body>
</html>
