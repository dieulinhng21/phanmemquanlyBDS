<!DOCTYPE html>
<html lang="en" class="js"></html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <title>AZ Land ., JSC</title>

    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#212121">
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#212121">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#212121">

    <!-- BEGIN BASE CSS STYLE -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
          type="text/css">
    <link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="assets/css/essential.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <!-- BEGIN END BASE CSS STYLE -->

    <link href="assets/plugins/fullcalendar/fullcalendar.print.css" rel="stylesheet" media='print'/>
    <link href="assets/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet"/>
    <link href="assets/plugins/sweet_alert/sweetalert.css" rel="stylesheet"/>
    <link href="assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet"/>
    <link href="assets/plugins/owl.carousel/css/owl.carousel.css" rel="stylesheet"/>
</head>


<!--Begin Sidebar-->
<div class="sidebar" data-color="black" data-image="assets/images/sidebar-bg.jpg">
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
<body class="sidebar_menu top_nav_fixed">

<!-- BEGIN PAGE-LOADER -->
<div class="preloader">
    <div class="loading">
        <div class="lds-circle">
            <div></div>
        </div>
    </div>
</div>
<!-- END PAGE-LOADER -->



<!-- BEGIN HEADER -->
<div id="header">

    <!-- BEGIN TOP NAV BAR -->
    <div class="navbar navbar-default navbar-fixed-top bordered">
        <div class="navbar-header">
            <ul class="nav navbar-nav m-l-0 pull-left">
                <li id="minimizeSidebar" class="navbar-toggler">
                    <a href="javascript:void(0)">
						<img
                            src="assets/images/logo.png"
                            alt="perfectin" class="w-115">
                    </a>
                </li>

                <li data-toggle="tooltip" data-placement="bottom" data-trigger="hover" class="hidden-xs hidden-sm hidden-md"
                    title="Enter Peek Hours">
                    <div class="input-group input-group-sm width-300 m-t-8 m-l-25">
                        <span class="input-group-addon btn bg-dark">Peek Hours</span>
                        <input type="text" class="form-control" placeholder="Peek Hours" value="10:10 - 02:54">
                        <span class="input-group-addon btn bg-dark">Save</span>
                    </div>
                </li>
            </ul>

            <ul class="nav navbar-nav pull-right visible-xs-block">
                <li class="open_ms_menu">
                    <a href="javascript:void(0)">
                        <i class="fa fa-wifi"></i>
                    </a>
                </li>
                <li class="open_login_modal">
                    <a href="javascript:void(0)">
                        <i class="fa fa-sign-in"></i>
                    </a>
                </li>
                <li>
                    <a data-toggle="collapse" data-target="#mobile_nav">
                        <i class="fa fa-user"></i>
                    </a>
                </li>
                <li id="minimizeSidebar1" class="navbar-toggler">
                    <a class="text-center">
                        <i class="fa fa-bars"></i>
                    </a>
                </li>
            </ul>
        </div>

       
    <!-- END TOP NAV ABR -->

</div>
</div>
<!-- END HEADER -->

<!-- BEGIN PAGE CONTENT -->
<div class="page-container" id="page-container">

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
    <!-- END MAIN CONTENT -->
    </div>
    <!-- END PAGE CONTENT -->
    </div>
<!-- BEGIN SEARCH -->
<div class="search">
    <i id="btn-search-close" class="btn--search-close"><i class="fa fa-times f-s-48"></i></i>
    <form class="search__form" action="#">
        <input class="search__input" name="search" type="search" placeholder="Search.." autocomplete="off"
               autocapitalize="off" spellcheck="false"/>
        <span class="search__info">Hit enter to search or ESC to close</span>
    </form>
    <div class="search__related">
        <div class="search__suggestion">
            <h3>May We Suggest?</h3>
            <p>#drone #funny #catgif #broken #lost #hilarious #good #red #blue #nono #why #yes #yesyes #aliens
                #green</p>
        </div>
        <div class="search__suggestion">
            <h3>Is It This?</h3>
            <p>#good #red #hilarious #blue #nono #why #yes #yesyes #aliens #green #drone #funny #catgif #broken
                #lost</p>
        </div>
        <div class="search__suggestion">
            <h3>Needle, Where Art Thou?</h3>
            <p>#broken #lost #good #red #funny #hilarious #catgif #blue #nono #why #yes #yesyes #aliens #green
                #drone</p>
        </div>
    </div>
</div>
<!-- END SEARCH -->

<!-- BEGIN FOOTER -->
<div class="navbar navbar-default footer">
    <footer id="footer" class="footer footer-inverse">
        <div class="footer-bottom">
            <div class="row align-items-center">
                <div class="col-md-7 col-sm-7">
                    <div class="text-xs-center text-sm-left">
                        <ul class="footer-menu">
                            <li>
                                <a href="index.html" class="p-l-0" target="_blank">Home</a>
                            </li>
                            <li>
                                <a href="http://perfectin.co/" target="_blank">Website</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" target="_blank">Portfolio</a>
                            </li>
                        </ul>

                        <div class="copyright">
                            <ul class="copy-links">
                                <li>
                                    © 2019 <a href="http://perfectin.co/" target="_blank">Perfectin</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" target="_blank">Terms</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" target="_blank">License</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" target="_blank">Privacy policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
        </div>
    </footer>
</div>
<!-- END FOOTER -->

<!-- BEGIN TO TOP -->
<a href="javascript:void(0)" class="back-to-top btn-back-to-top"></a>
<!-- END TO TOP -->

<!--BEGIN OFFICE SIDEBAR-->


<!-- BEGIN BASE JS -->
<script src="assets/plugins/pace/pace.min.js"></script>
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/plugins/nicescroll/nicescroll.min.js"></script>
<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
<script src="assets/plugins/jquery.slimscroll.min/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/sparkline/jquery.sparkline.js"></script>
<!-- END BASE JS -->

<!-- BEGIN PAGE LEVEL JS -->
<script src='assets/plugins/snap/snap.svg-min.js'></script>
<script src="assets/plugins/fullcalendar/lib/moment.min.js"></script>
<script src="assets/plugins/fullcalendar/fullcalendar.min.js"></script>
<script src="assets/plugins/fullcalendar/gcal.js"></script>
<script src="assets/plugins/sweet_alert/sweetalert.min.js"></script>
<script src="assets/plugins/select2/dist/js/select2.min.js"></script>
<script src="assets/plugins/chartjs/Chart.min.js"></script>
<script src="assets/plugins/owl.carousel/js/owl.carousel.min.js"></script>
<script src="assets/js/app.js"></script>
<script src="assets/js/index.js"></script>
<!-- END PAGE LEVEL JS -->
</body>
</html>
