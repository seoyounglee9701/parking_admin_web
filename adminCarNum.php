<?php
    $building = $_REQUEST['building'];
    switch($building){
        case "build_name_eng1":
            $building='빌딩이름1';
            break;
        case "build_name_eng2":
            $building='빌딩이름2';
            break;
        case "build_name_eng3":
            $building='빌딩이름3';
            break;
        case "build_name_eng4":
            $building='빌딩이름4';
            break;
        case "build_name_eng5":
            $building='빌딩이름5';
            break;
        case "build_name_eng6":
            $building='빌딩이름6';
            break;
        case "build_name_eng7":
            $building='빌딩이름7';
            break;
        case "build_name_eng8":
            $building='빌딩이름8';
            break;
        case "build_name_eng9":
            $building='빌딩이름9';
            break;
        case "build_name_eng10":
            $building='빌딩이름10';
            break;
        case "build_name_eng11":
            $building='빌딩이름11';
            break;
        case "build_name_eng12":
            $building='빌딩이름12';
            break;
        case "build_name_eng13":
            $building='빌딩이름13';
            break;
        case "build_name_eng14":
            $building='빌딩이름14';
            break;
        case "build_name_eng15":
            $building='빌딩이름15';
            break;
        case "build_name_eng16":
            $building='빌딩이름16';
            break;
        case "build_name_eng17":
            $building='빌딩이름17';
            break;
        case "build_name_eng18":
            $building='빌딩이름18';
            break;
        }
    $conn = mysqli_connect('$ip_address', '$db_name', '$password', '$table_name', '$mysql_db_port');
    $sql = "SELECT * FROM 주차관리 WHERE 건물명 LIKE '$building'";
    $result = mysqli_query($connect, $sql);
    $delete_CarNum = $_POST['delete_CarNum'];
    $delete_buildingName = $_POST['delete_BuildingName'];
    $delete_user = $_POST['delete_User'];

    if(isset($delete_CarNum)) {
        echo "<script>button_event();</script>";
        $sql_delete="DELETE FROM 주차관리 WHERE 건물명='$delete_buildingName' and 차량번호 = '$delete_CarNum' and 사용자 = '$delete_user'; ";
        mysqli_query($connect, $sql_delete);
        echo '<p style="color:red;">'.  $delete_CarNum .' is deleted.</p>';
        echo "<script>alert(\" 건물명: $delete_buildingName, 사용자 : $delete_user, 차량번호 : $delete_CarNum 삭제되었습니다. \");</script>";
        // echo ("<meta http-equiv=\"refresh\" content=\"시간미정;url=../admin/room.php\">");
        echo "<script>location.href='adminCarNum.php';</script>";  //관리페빌딩7로 자동 이동
      }

      //반복문에서 반복될 <tr>요소를 문자열로 저장함
    $str_carList='';

    while($row=mysqli_fetch_array($result)){
        // echo $row['건물명']."<br>";


    // hidden 필드를 이용해서 해당 row의 '차량번호'값과 '건물명' '사용자' 값을 carNumList_edit.php로 전송한다.
    $edit = '
        <form action = "carNumList_edit" method="POST">
            <input type = "hidden" name = "edit_CarNum" value="'.$row['차량번호'].'">
            <input type = "hidden" name = "edit_BuildingName" value="'.$row['건물명'].'">
            <input type = "hidden" name = "edit_User" value="'.$row['사용자'].'">
            <button class="item" type = "submit" value = "수정" data-toggle="tooltip" data-placement="top" title="" >
            <i class="zmdi zmdi-edit"></i>
            </button>
        </form>
    ';
    // hidden 필드를 이용해서 해당 row의 '차량번호'값과 '건물명' '사용자' 값을 adminCarNum.php로 전송한다.
    $delete = '
        <form action = "adminCarNum.php" method="POST">
            <input type="hidden" name="delete_CarNum" value="'. $row['차량번호'] .'">
            <input type="hidden" name="delete_BuildingName" value="'. $row['건물명'] .'">
            <input type = "hidden" name = "delete_User" value="'.$row['사용자'].'">
            <button class="item" value="삭제" data-toggle="tooltip" data-placement="top" title="" >
            <i class="zmdi zmdi-delete"></i>
            </button>
        </form>
    ';

    $check ='
        <form action = "room.php" method="POST">
        <input type ="checkbox" name="checkbox[]" value= "' .$row['건물명_호']. '">
        </form>
    ';

    $str_carList .= "<tr>";
    $str_carList .= "<td>$check</td>";
    $str_carList .= "<td>".$row['serial']."</td>";
    $str_carList .= "<td>".$row['지역']."</td>";
    $str_carList .= "<td>".$row['건물명']."</td>";
    $str_carList .= "<td>".$row['사용자']."</td>";
    $str_carList .= "<td>".$row['차량번호']."</td>";
    $str_carList .= "<td>".$row['전화번호']."</td>";
    $str_carList .= "<td>".$row['메모']."</td>";
    // $str .= "<td><button>수정</button></td>";
    $str_carList .= "<td><div class=\"table-data-feature\">$edit";
    $str_carList .= "$delete</div></td>";
    $str_carList .= "<td></td>";
    $str_carList .= "</tr>";
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

    <meta property="og:title" content="차량번호관리(주차관리웹)">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="https://yourdomain.com/adminCarNum.php">
    <meta property="og:url" content="https://yourdomain.com/adminCarNum.php">
    <meta property="og:image" content="web_images/company_logo.png">
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
    <title>차량번호 관리</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
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

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="ParikingAdmin" />
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
                    <img src="images/icon/company_logo.png" alt="ParkingAdmin" />
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
            <!-- <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="차량번호" />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </header> -->
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="row">
                    <div class="col-md-12">
                        <!-- BODY DESKTOP-->
                        <header class="body-desktop">
                            <div class="section__content section__content--p30">
                                <div class="container-fluid">
                                    <div class="body-wrap">
                                        <!-- DATA TABLE -->
                                        <h3 class="title-5 m-b-35">차량번호 관리</h3>
                                        <form method="carNumList">
                                            <div>
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
     
                                    </div>
                                </div>
                            </div>
                        </header>
                        <!-- HEADER DESKTOP-->

                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                    <tr>
                                        <th>
                                            <label class="au-checkbox">
                                                <input type="checkbox">
                                                <span class="au-checkmark"></span>
                                            </label>
                                        </th>
                                        <th>순번</th>
                                        <th>지역</th>
                                        <th>건물명</th>
                                        <th>사용자</th>
                                        <th>차량번호</th>
                                        <th>전화번호</th>
                                        <th>메모</th>
                                        <th>작업</th>
                                        <th>등록일자</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        echo $str_carList;
                                    ?>

                                    <tr class="spacer"></tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- END DATA TABLE -->
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
    <!-- getURL JS       -->
    <script src="js/getURL.js"></script>
    <!-- Change-buttonColor JS       -->
    <script src="js/change-buttonColor.js"></script>
    <script type="text/javascript">
        get_query();
        changeTheColorOfButton();
    </script>
    <!-- Main JS-->
    <script src="js/main.js"></script>
    <script type="text/javascript">
        function button_event(){
        if (confirm("정말 삭제하시겠습니까??") == true){    //확인
            document.form.submit();
        }else{   //취소
            return false;
        }
        }
    </script>

</body>

</html>
<!-- end document-->
