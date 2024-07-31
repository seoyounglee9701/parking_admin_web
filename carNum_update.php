<?php
  $before_BuildingName = $_POST["before_BuildingName"];
  $before_carNumber = $_POST["before_carNumber"];
  $before_user = $_POST["before_user"];

  $location = $_POST["지역"];
  $building_name = $_POST["건물명"];
  $user = $_POST["사용자"];
  $carNumber = $_POST["차량번호"];
  $contact = $_POST["전화번호"];
  $memo=$_POST["메모"];
  if(is_null($memo)){
    $memo = null;
  }

  if(is_null($location) or is_null($building_name) or is_null($user) or
  is_null($carNumber) or is_null($contact)) 
  {
    echo '<h1>실패하였습니다!</h1>';
  } else{
    $conn = mysqli_connect('$ip_address', '$db_name', '$password', '$table_name', '$mysql_db_port');
    $sql = "UPDATE 주차관리 SET 지역='$location', 건물명='$building_name', 사용자='$user', 
    차량번호='$carNumber', 전화번호='$contact', 메모='$memo' WHERE 건물명='$before_BuildingName' and 차량번호='$before_carNumber' and 사용자='$before_user';";
    mysqli_query($conn, $sql);
    echo "<script>alert(\" 사용자 : $user 정보가 수정되었습니다. \");</script>";
  }
  
  // echo $before_BuildingName;
  // echo $before_carNumber;
  // echo $location;
  // echo $building_name;
  // echo $user;
  // echo $carNumber;
  // echo $contact;

 ?>
<!-- 
 <p>
   <a href = "carNumList.php"> 건물별 차량번호 리스트 </a>
   <a href = "car_add.html"> 차량등록 </a>
 </p> -->
</body>
</html>

 <? 
 echo "<script>location.href='adminCarNum.php';</script>";
 ?>
