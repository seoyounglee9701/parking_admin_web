<?php
function print_carUser(){
$search_Num = $_REQUEST['차량번호'];
$conn = mysqli_connect('$ip_address', '$db_name', '$password', '$table_name', '$mysql_db_port');
$result = mysqli_query($connect, "SELECT * FROM 주차관리 WHERE 차량번호 LIKE '%$search_Num'");
    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_err();
    }

$count = mysqli_num_rows($result);

if($count==0){
    printf("조회된 차량번호 없음");
}
else if($count>=2){
    printf("%d대의 차량이 검색되었습니다.", $count);
}

while ($row = mysqli_fetch_array($result)){
    echo '<tr>';
    echo '<td>'. $row['serial'] .
    '</td><td>
        <div class="table-data__info">
            <h6>'. $row['사용자'] .'</h6>
            <span>
                <a href="#">'. $row['지역'] .'</a>
            </span>
        </div>
    </td>
    <td>
        <span class="role member">'. $row['차량번호'] .'</span>
    </td>
    <td>'. $row['건물명'] .'</td>
    <td>'. $row['전화번호'] .'</td>
    <td>'. $row['추가날짜'] .'</td>
</tr>';
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="l">
    <meta name="keywords" content="au theme template">    <link rel="icon" type="image/png" sizes="16x16" href="images/icon/favicon-16x16.png">
        <link rel="icon" href="favicon.ico" type="image/x-icon" />

        <meta property="og:title" content="차량번호검색(주차관리웹)">
        <meta property="og:type" content="website">
        <meta name="theme-color" content="#478ac9">
        <link rel="canonical" href="https://yourdomain.com/search_CarNum.php">
        <meta property="og:url" content="https://yourdomain.com/search_CarNum.php">
        <meta property="og:image" content="web_images/logo_color_innout_1200_3.png">
        <link rel="apple-touch-icon" sizes="57x57" href="web_images/fabicon2/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="web_images/fabicon2/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="web_images/fabicon2/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="web_images/fabicon2/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="web_images/fabicon2/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="web_images/fabicon2/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="web_images/fabicon2/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="web_images/fabicon2/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="web_images/fabicon2/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="web_images/fabicon2/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="web_images/fabicon2/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="web_images/fabicon2/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="web_images/fabicon2/favicon-16x16.png">
        <link rel="manifest" href="web_images/fabicon2/manifest.json">

    <!-- Title Page-->
    <title>차량번호검색</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="ParkingAdmin" /> <!--인엔아웃 로고-->
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="index.html">
                                <i class="fas fa-tachometer-alt"></i>메인화면</a>
                        </li>
                        <li>
                            <a href="carNumList.php">
                                <i class="fas fa-car"></i>건물별 차량조회</a>
                        </li>
                        <li>
                            <a href="car_add.html">
                                <i class="fas fa-plus"></i>차량번호 등록</a>
                        </li>
                        <li>
                            <a href="adminCarNum.php">
                                <i class="far fa-edit"></i>차량번호 관리</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="index.html">
                    <img src="images/icon/logo.png" alt="ParkingAdmin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="index.html">
                                <i class="fas fa-tachometer-alt"></i>메인화면</a>
                        </li>
                        <li>
                            <a href="carNumList.php">
                                <i class="fas fa-car"></i>건물별 차량조회</a>
                        </li>
                        <li>
                            <a href="car_add.html">
                                <i class="fas fa-plus"></i>차량번호 등록</a>
                        </li>
                        <li>
                            <a href="adminCarNum.php">
                                <i class="far fa-edit"></i>차량번호 관리</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="search_CarNum.php" method="search_CarNum">
                                <input class="au-input au-input--xl" type="text" name="차량번호" placeholder="차량번호를 입력하세요." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="table-responsive table-data">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td>일련번호</td>
                                        <td>사용자/지역</td>
                                        <td>차량번호</td>
                                        <td>건물명</td>
                                        <td>전화번호</td>
                                        <td>추가날짜</td>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php
                                    print_carUser();
                                   ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                    </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
