<?php
    $before_BuildingName=$_POST['edit_BuildingName'];// 전송된 건물명
    $before_carNumber=$_POST['edit_CarNum']; // 전송된 차량번호
    $before_user=$_POST['edit_User']; // 전송된 사용자명
    $conn = mysqli_connect('$ip_address', '$db_name', '$password', '$table_name', '$mysql_db_port');
    $sql_edit = "SELECT * FROM 주차관리 WHERE 건물명 = '$before_BuildingName' and 차량번호 = '$before_carNumber' and 사용자='$before_user';";
    $result = mysqli_query($conn, $sql_edit) or die(mysql_error());
    $row=mysqli_fetch_array($result);
    echo $row;
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

    <meta property="og:title" content="차량번호수정(주차관리웹)">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="https://yourdomain.com/carNumList_edit.php">
    <meta property="og:url" content="https://yourdomain.com/carNumList_edit.php">
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
    <title>차량번호 수정</title>

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
                <a href="#">
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
                            <a href="carNumList.php">
                                <i class="far fa-edit"></i>차량번호 관리</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>차량번호 </strong> 수정
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="carNum_update.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <input type="hidden" name="before_BuildingName" value ="<?php echo $row['건물명']; ?>"> <!--hidden 타입을 통해서 수정 전 건물명을 전달-->
                                            <input type="hidden" name="before_carNumber" value ="<?php echo $row['차량번호']; ?>"> <!--hidden 타입을 통해서 수정 전 자동차 번호를 전달-->
                                            <input type="hidden" name="before_user" value ="<?php echo $row['사용자']; ?>"> <!--hidden 타입을 통해서 수정 전 사용자명을 전달-->
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="지역" class=" form-control-label">지역</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="지역" id="select" class="form-control form-control" required>
                                                        <optgroup label="지역선택">
                                                            <option value="city_name_1"
                                                                <?php
                                                                    if($row['지역']=='city_name_1')
                                                                        echo "selected";
                                                                ?>
                                                            >city_name_1</option>
                                                            <option value="city_name_2"
                                                                <?php
                                                                    if($row['지역']=='city_name_2')
                                                                        echo "selected";
                                                                ?>
                                                            >city_name_2</option>
                                                            <option value="city_name_3"
                                                                <?php
                                                                    if($row['지역']=='city_name_3')
                                                                        echo "selected";
                                                                ?>
                                                            >city_name_3</option>
                                                            <option value="city_name_4"
                                                                <?php
                                                                    if($row['지역']=='city_name_4')
                                                                        echo "selected";
                                                                ?>
                                                            >city_name_4</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="multiple-select" class=" form-control-label">건물명 선택</label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <select name="multiple-select" id="multiple-select" multiple="" class="form-control">
                                                        <option value="1">빌딩1</option>
                                                        <option value="2">빌딩2</option>
                                                        <option value="3">빌딩10</option>
                                                        <option value="4">빌딩16</option>
                                                        <option value="5">빌딩3</option>                                                       <option value="3">빌딩10</option>
                                                        <option value="6">빌딩11</option>
                                                        <option value="7">빌딩4</option>
                                                        <option value="8">빌딩12</option>
                                                        <option value="9">빌딩5</option>
                                                        <option value="10">빌딩13</option>
                                                        <option value="11">신주</option>
                                                        <option value="12">빌딩6</option>
                                                        <option value="13">빌딩14</option>
                                                        <option value="14">빌딩7</option>
                                                        <option value="15">빌딩8</option>
                                                        <option value="16">빌딩9</option>
                                                        <option value="17">빌딩15</option>
                                                    </select>
                                                </div>
                                            </div> -->
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="건물명" class=" form-control-label">건물</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="건물명" id="select" class="form-control form-control" required>
                                                        <optgroup label="건물명 선택">
                                                            <option value="빌딩1"
                                                                <?php
                                                                if($row['건물명']=='빌딩1')
                                                                    echo "selected";
                                                                ?>
                                                            >빌딩1</option>
                                                            <option value="빌딩2"
                                                                <?php
                                                                if($row['건물명']=='빌딩2')
                                                                    echo "selected";
                                                                ?>
                                                            >빌딩2</option>
                                                            <option value="빌딩10"
                                                                <?php
                                                                if($row['건물명']=='빌딩10')
                                                                    echo "selected";
                                                                ?>
                                                            >빌딩10</option>
                                                            <option value="빌딩16"
                                                                <?php
                                                                if($row['건물명']=='빌딩16')
                                                                    echo "selected";
                                                                ?>
                                                            >빌딩16</option>
                                                            <option value="빌딩3"
                                                                <?php
                                                                if($row['건물명']=='빌딩3')
                                                                    echo "selected";
                                                                ?>
                                                            >빌딩3</option>
                                                            <option value="빌딩11"
                                                                <?php
                                                                if($row['건물명']=='빌딩11')
                                                                    echo "selected";
                                                                ?>
                                                            >빌딩11</option>
                                                            <option value="빌딩4"
                                                            <?php
                                                                if($row['건물명']=='빌딩4')
                                                                    echo "selected";
                                                                ?>
                                                            >빌딩4</option>
                                                            <option value="빌딩12"
                                                                <?php
                                                                if($row['건물명']=='빌딩12')
                                                                    echo "selected";
                                                                ?>
                                                            >빌딩12</option>
                                                            <option value="빌딩5"
                                                            <?php
                                                                if($row['건물명']=='빌딩5')
                                                                    echo "selected";
                                                                ?>
                                                            >빌딩5</option>
                                                            <option value="빌딩13"
                                                            <?php
                                                                if($row['건물명']=='빌딩13')
                                                                    echo "selected";
                                                                ?>
                                                            >빌딩13</option>
                                                            <option value="빌딩17"
                                                            <?php
                                                                if($row['건물명']=='빌딩17')
                                                                    echo "selected";
                                                                ?>
                                                            >신주</option>
                                                            <option value="빌딩18"
                                                            <?php
                                                                if($row['건물명']=='빌딩18')
                                                                    echo "selected";
                                                                ?>
                                                            >신주</option>
                                                            <option value="빌딩6"
                                                            <?php
                                                                if($row['건물명']=='빌딩6')
                                                                    echo "selected";
                                                                ?>
                                                            >빌딩6</option>
                                                            <option value="빌딩14"
                                                            <?php
                                                                if($row['건물명']=='빌딩14')
                                                                    echo "selected";
                                                                ?>
                                                            >빌딩14</option>
                                                            <option value="빌딩7"
                                                            <?php
                                                                if($row['건물명']=='빌딩7')
                                                                    echo "selected";
                                                                ?>
                                                            >빌딩7</option>
                                                            <option value="빌딩8"
                                                            <?php
                                                                if($row['건물명']=='빌딩8')
                                                                    echo "selected";
                                                                ?>
                                                            >빌딩8</option>
                                                            <option value="빌딩9"
                                                            <?php
                                                                if($row['건물명']=='빌딩9')
                                                                    echo "selected";
                                                                ?>
                                                            >빌딩9</option>
                                                            <option value="빌딩15"
                                                            <?php
                                                                if($row['건물명']=='빌딩15')
                                                                    echo "selected";
                                                                ?>
                                                            >빌딩15</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="사용자" class=" form-control-label">사용자</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="사용자" value="<?php echo $row['사용자'];?>" placeholder="사용자명 또는 건물명호" class="form-control" required>
                                                    <small class="form-text text-muted">예) username1, 가202, 인A202</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="차량번호" class=" form-control-label">차량번호</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="차량번호" value="<?php echo $row['차량번호'];?>" placeholder="차량번호 입력" class="form-control" required>
                                                    <small class="form-text text-muted">예) 1234</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="전화번호" class=" form-control-label">전화번호</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="전화번호"  value="<?php echo $row['전화번호'];?>" placeholder="전화번호 입력" class="form-control" required>
                                                    <small class="form-text text-muted">예) 000-0000-0000</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="메모" class=" form-control-label">메모</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="메모"  value="<?php echo $row['메모'];?>" placeholder="메모 입력" class="form-control" required>
                                                    <small class="form-text text-muted">기타사항을 적어주세요.</small>
                                                </div>
                                            </div>



                                            <!-- <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">차량대수</label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <div class="form-check-inline form-check">
                                                        <label for="inline-checkbox1" class="form-check-label ">
                                                            <input type="checkbox" id="inline-checkbox1" name="inline-checkbox1" value="option1" class="form-check-input">1대
                                                        </label>
                                                        <label for="inline-checkbox2" class="form-check-label ">
                                                            <input type="checkbox" id="inline-checkbox2" name="inline-checkbox2" value="option2" class="form-check-input">2대
                                                        </label>
                                                        <label for="inline-checkbox3" class="form-check-label ">
                                                            <input type="checkbox" id="inline-checkbox3" name="inline-checkbox3" value="option3" class="form-check-input">3대
                                                        </label>
                                                    </div>
                                                </div>
                                            </div> -->


                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> 수정
                                        </button>
                                    </form>
                                        <!-- <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button> -->
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
