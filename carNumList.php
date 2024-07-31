<?php
    function print_TableData(){
    $building = $_REQUEST['building'];
    switch($building){
        case "building1":
            $building='빌딩1';
            break;
        case "building2":
            $building='빌딩2';
            break;
        case "building3":
            $building='빌딩3';
            break;
        case "building4":
            $building='빌딩4';
            break;
        case "building5":
            $building='빌딩5';
            break;
        case "building6":
            $building='빌딩6';
            break;
        case "building7":
            $building='빌딩7';
            break;
        case "building8":
            $building='빌딩8';
            break;
        case "building9":
            $building='빌딩9';
            break;
        case "building10":
            $building='빌딩10';
            break;
        case "building11":
            $building='빌딩11';
            break;
        case "building12":
            $building='빌딩12';
            break;
        case "building13":
            $building='빌딩13';
            break;
        case "building14":
            $building='빌딩14';
            break;
        case "building15":
            $building='빌딩15';
            break;
        case "guemgang":
            $building='빌딩16';
            break;
        case "building17":
            $building='빌딩17';
            break;
        case "building18":
            $building='빌딩18';
            break;
        }
        $conn = mysqli_connect('$ip_address', '$db_name', '$password', '$table_name', '$mysql_db_port');

        $sql = "SELECT * FROM 주차관리 WHERE 건물명 LIKE '$building' ";
        $result = mysqli_query($connect, $sql);
        $count= mysqli_num_rows($result);


        if($count==0){
            echo
          '</td><td colspan="4">'. 차량없음 . '</td></tr>';
        }else{
          while( $row = mysqli_fetch_array( $result ) ) {

          echo '<tr><td>'. $row[ '사용자' ] .
          '</td><td >'. $row[ '차량번호' ] .
          '</td><td >'.  $row[ '전화번호' ] .
          '</td><td >'. $row[ '메모' ] .
          '</td></tr>';
          }
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
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <link rel="icon" type="image/png" sizes="16x16" href="images/icon/favicon-16x16.png">
    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <meta property="og:title" content="차량번호리스트(주차관리웹)">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="https://yourdomain.com/carNumList.php">
    <meta property="og:url" content="https://yourdomain.com/carNumList.php">
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
    <title>차량번호 리스트</title>

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

    <!-- Button-Colred CSS-->
    <link href="css/button-colored.css" rel="stylesheet" media="all">
    <!-- Clicked buttons CSS-->
    <link href="css/clicked-buttons.css" rel="stylesheet" media="all">
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="ParkingAdmin" />
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
                    <img src="images/icon/logo.png" alt="Cool Admin" />
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
            <header class="header-desktop-table">
                <div class="header bordered-blue"
                style="font-family:Helvetica Neue,Helvetica,Arial,sans-serif; text-align: center;
                color:#808080;
                -webkit-font-smoothing:antialiased"> 버튼 클릭 시 해당 건물의 차량번호를 볼 수 있습니다.</div>
                <!-- <ul class="nav nav-pills">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">city_name_1</a>
                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 41px, 0px); top: 0px; left: 0px; will-change: transform;">
                            <a class="dropdown-item" href="#">빌딩1</a>
                            <a class="dropdown-item" href="#">빌딩2</a>
                            <a class="dropdown-item" href="#">빌딩3</a>
                            <a class="dropdown-item" href="#">빌딩4</a>
                            <a class="dropdown-item" href="#">빌딩5</a>
                            <a class="dropdown-item" href="#">빌딩6</a>
                            <a class="dropdown-item" href="#">빌딩7</a>
                            <a class="dropdown-item" href="#">빌딩8</a>
                            <a class="dropdown-item" href="#">빌딩9</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">city_name_2</a>
                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 41px, 0px); top: 0px; left: 0px; will-change: transform;">
                            <a class="dropdown-item" href="#">빌딩10</a>
                            <a class="dropdown-item" href="#">빌딩11</a>
                            <a class="dropdown-item" href="#">빌딩12</a>
                            <a class="dropdown-item" href="#">빌딩13</a>
                            <a class="dropdown-item" href="#">빌딩14</a>
                            <a class="dropdown-item" href="#">빌딩15</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">city_name_4</a>
                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 41px, 0px); top: 0px; left: 0px; will-change: transform;">
                            <a class="dropdown-item" href="#">빌딩16</a>
                            <a class="dropdown-item" href="#">신주</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">city_name_3</a>
                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 41px, 0px); top: 0px; left: 0px; will-change: transform;">
                            <a class="dropdown-item" href="#">프린스</a>
                    </li>
                </ul> -->
                <form method="carNumList">
                    <div id="default-buttons" class="clicked-buttons">
                        <button type="submit" name="building" id="building1" value="building1" class="btn btn-palegreen .shiny">빌딩1</button>
                        <button type="submit" name="building" id="building2" value="building2" class="btn btn-palegreen .shiny">빌딩2</button>
                        <button type="submit" name="building" id="building3" value="building3" class="btn btn-palegreen .shiny">빌딩3</button>
                        <button type="submit" name="building" id="building4" value="building4" class="btn btn-palegreen .shiny">빌딩4</button>
                        <button type="submit" name="building" id="building5" value="building5" class="btn btn-palegreen .shiny">빌딩5</button>
                        <button type="submit" name="building" id="building6" value="building6" class="btn btn-palegreen .shiny">빌딩6</button>
                        <button type="submit" name="building" id="building7" value="building7" class="btn btn-palegreen .shiny">빌딩7</button>
                        <button type="submit" name="building" id="building8" value="building8" class="btn btn-palegreen .shiny">빌딩8</button>
                        <button type="submit" name="building" id="building9" value="building9" class="btn btn-palegreen .shiny">빌딩9</button>

                        <button type="submit" name="building" id="building10" value="building10" class="btn btn-azure  .shiny">빌딩10</button>
                        <button type="submit" name="building" id="building11" value="building11" class="btn btn-azure  .shiny">빌딩11</button>
                        <button type="submit" name="building" id="building12" value="building12" class="btn btn-azure  .shiny">빌딩12</button>
                        <button type="submit" name="building" id="building13" value="building13" class="btn btn-azure  .shiny">빌딩13</button>
                        <button type="submit" name="building" id="building14" value="building14" class="btn btn-azure  .shiny">빌딩14</button>
                        <button type="submit" name="building" id="building15" value="building15" class="btn btn-azure  .shiny">빌딩15</button>

                        <button type="submit" name="building" id="building16" value="building16" class="btn btn-yellow  .shiny">빌딩16</button>
                        <button type="submit" name="building" id="building17" value="building17" class="btn btn-yellow  .shiny">빌딩17</button>
                        <button type="submit" name="building" id="building18" value="building18" class="btn btn-yellow  .shiny">빌딩18</button>
                    </div>
                </form>

            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>사용자</th>
                                                <th>차량번호</th>
                                                <th>전화번호</th>
                                                <th>메모(비고)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php
                                            print_TableData();
                                         ?>
                                        </tbody>

                                    </table>
                                    <?php include "paging.php";?>
                                    <?php

                                    ?>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
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
    <!-- getURL JS       -->
    <script src="js/getURL.js"></script>
    <!-- Change-buttonColor JS       -->
    <script src="js/change-buttonColor.js"></script>
    <script type="text/javascript">
        get_query();
        changeTheColorOfButton();
    </script>




</body>

</html>
<!-- end document-->
