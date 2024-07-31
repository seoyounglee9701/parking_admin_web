<?php
// Connection checking:
  function hijy(){
  $building = $_REQUEST['building'];
  $conn = mysqli_connect('$ip_address', '$db_name', '$password', '$table_name', '$mysql_db_port');
// '%{$car_number}'
  $sql = "SELECT * FROM 주차관리 WHERE 건물명 LIKE '$building'";
  $result = mysqli_query($connect, $sql);
  $row = mysqli_fetch_array($result);
  $count= mysqli_num_rows($result);
  if($count==0){
  }else{
    while( $row = mysqli_fetch_array( $result ) ) {
    echo '<tr><td  style="word-break:normal">';
    '</td>';
    echo
    '</td><td >'. $row[ 'serial' ] .
    '</td><td >' . $row[ '지역' ] .
    '</td><td >'. $row[ '건물명' ] .
    '</td><td >'. $row[ '사용자' ] .
    '</td><td >'. $row[ '차량번호' ] .
    '</td><td >'. $row[ '전화번호' ] .
    '</td></tr>';}
    }
}
?>
<!DOCTYPE html>
<html class="img-no-display"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>인엔아웃 주차관리 홈페빌딩7</title>


<style>
@import url('https://fonts.googleapis.com/css2?family=Black+Han+Sans&family=Jua&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Black+Han+Sans&family=Jua&family=Noto+Sans+KR&family=Sunflower:wght@300&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Black+Han+Sans&family=Jua&family=Sunflower:wght@300&display=swap');

html {
    height: 100%;
    overflow: hidden;
}
h1{
  text-align: center;
  font-family: 'Jua', sans-serif;
  font-size: 64px;
}
#title_HomeLink{
  display: block;
  text-decoration: none;
  text-align: center;
  font-family: 'Jua', sans-serif;
  font-size: 64px;
}
input[type=button] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  font-size: 32px;
}

input[type=submit] {
  background-color: white;
  border: none;
  color: black;
  padding: 5px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  font-size: 28px;
}
body {
    background-color: #acf5a2;

}
</style>
</head>
<body>
  <a id="title_HomeLink" href="http://www.yourdomain.com"> InnOut 주차관리 </a>
  <form method="building_list" align=center>
  <div>
    <button type="submit" name="building" value="building1" class="btn btn-palegreen .shiny">빌딩1</button>
    <button type="submit" name="building" value="building2" class="btn btn-palegreen .shiny">빌딩2</button>
    <button type="submit" name="building" value="building3" class="btn btn-palegreen .shiny">빌딩3</button>
    <button type="submit" name="building" value="building4" class="btn btn-palegreen .shiny">빌딩4</button>
    <button type="submit" name="building" value="building5" class="btn btn-palegreen .shiny">빌딩5</button>
    <button type="submit" name="building" value="building6" class="btn btn-palegreen .shiny">빌딩6</button>
    <button type="submit" name="building" value="building7" class="btn btn-palegreen .shiny">빌딩7</button>
    <button type="submit" name="building" value="building8" class="btn btn-palegreen .shiny">빌딩8</button>
    <button type="submit" name="building" value="building9" class="btn btn-palegreen .shiny">빌딩9</button>

    <button type="submit" name="building" value="building10" class="btn btn-azure  .shiny">빌딩10</button>
    <button type="submit" name="building" value="building11" class="btn btn-azure  .shiny">빌딩11</button>
    <button type="submit" name="building" value="building12" class="btn btn-azure  .shiny">빌딩12</button>
    <button type="submit" name="building" value="building13" class="btn btn-azure  .shiny">빌딩13</button>
    <button type="submit" name="building" value="building14" class="btn btn-azure  .shiny">빌딩14</button>
    <button type="submit" name="building" value="building15" class="btn btn-azure  .shiny">빌딩15</button>

    <button type="submit" name="building" value="building16" class="btn btn-yellow  .shiny">빌딩16</button>
    <button type="submit" name="building" value="sinju" class="btn btn-yellow  .shiny">빌딩17</button>
    <button type="submit" name="building" value="sinju" class="btn btn-yellow  .shiny">빌딩18</button>
</div>
  <table>
    <colgroup>
        <col width="10%"> <col width="10%"> <col width="10%">
        <col width="10%"> <col width="20%">
    </colgroup>
<thead style=center>
    <tr style="height: 45px;">
      <th ><center></th>
      <th ><center>고유번호</th>
      <th ><center>지역</th>
      <th ><center>건물명</th>
      <th ><center>사용자</th>
      <th ><center>차량번호</th>
      <th ><center>전화번호</th>
    </tr>
</thead>
    <tbody class="u-table-body">
      <tbody style="text-align: center;">

        <?php
        echo 1;
            hijy();
            echo 2;
        ?>
    </tbody>
  </table>
</div>



</tr>
</body></html>
