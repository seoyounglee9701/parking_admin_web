<?php
    $randomNum = mt_rand(1, 1000000); // 난수 생성
    $location = $_POST["지역"];
    $building_name = $_POST["건물명"];
    $user = $_POST["사용자"];
    $car_num = $_POST["차량번호"];
    $contact = $_POST["전화번호"];
    $memo = $_POST["메모"];
    if(is_null($memo)){
      $memo=null;
    } 
?>

<?php 
//  echo $randomNum;
//  echo $location;
//  echo $building_name;
//  echo $user;
//  echo $car_num;
//  echo $contact;
?>

<?php
    if(is_null($location) or is_null($building_name) or
    is_null($user) or is_null($car_num) or is_null($contact)){
      echo '<h1>실패하였습니다!';
    }
    else{
      //DB와 연결하기
      $conn = mysqli_connect('$ip_address', '$db_name', '$password', '$table_name', '$mysql_db_port');
      $sql = "insert into 주차관리 (지역, 건물명, 사용자, 차량번호, 전화번호, 메모) 
      values ('$location', '$building_name', '$user', '$car_num', '$contact', '$memo')";
      $res=$conn->query($sql);
      echo "<script>alert(\" $user 등록 완료되었습니다. \");</script>";
      echo "<script>location.href='index.html';</script>";
    }
?>


