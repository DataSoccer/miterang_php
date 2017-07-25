<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
  //config.php 에 있는 공통된 내용을 실행
  require("config/config.php");
  require("lib/db.php");
  $conn = db_init($config["host"],$config["duser"], $config["dpw"],$config["dname"]);
  $result = mysqli_query($conn, "SELECT * FROM miterang");
?>

<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <link rel="stylesheet" type="text/css" href="http://localhost:8080/style.css">

  <link href="http://localhost:8080/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body id="target">
  <div class="container">
    <header class="jumbotron text-center">
    <img src="https://s7d2.scene7.com/is/image/dkscdn/16ADIUFNLCDFTTWHBSCB_White_Blue_is/" alt="미테랑" height="120" width="120" class="img-circle" id="logo">
        <h><a href="http://localhost:8080/index.php">MITERANG SOCCER CLUB</a></h>
    </header>
    <div class="row">
      <nav class="col-md-3">
          <ol class="nav nav-pills nav-stacked">
            <?php
            //user_id 가 있는 동안 회원 출력
            while( $row = mysqli_fetch_assoc($result)){
              echo '<li><a href="http://localhost:8080/index.php?id='.$row['id'].'">'.htmlspecialchars($row['user_name']).'</a></li>'."\n";
            }
            ?>
          </ol>
        </nav>
    <div class="col-md-9">
 <article>
  <?php
  // 회원 아이디가 있으면
  // echo $_GET['id']
  if(empty($_GET['id']) === false ) {
    // 회원 정보를 데이터베이스에서 조회해서
    $sql = "SELECT * FROM miterang WHERE id = {$_GET['id']}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    // 출력한다
    echo '<h2>'.$row['id'].'</h2>';
    echo '<p>'.$row['user_name'].'</p>';
    echo '<p>'.$row['user_position'];
    echo '<p>'.$row['user_back_number'].'</p>';
    echo '<p>'.$row['description'].'</p>';
    echo '<p>'.$row['created'].'</p>';
  }
    ?>
  </article>
  <hr>
          <div id="control">
            <!-- #화이트와 블랙 스킨을 같은 기능으로 묶었음. -->
              <div class="btn-group" role="group" aria-label="...">
                <input type="button" value="white" onclick="document.getElementById('target').className='white'" class="btn btn-default btn-lg"/>
                <input type="button" value="black" onclick="document.getElementById('target').className='black'" class="btn btn-default btn-lg"/>
              </div>
              <!-- /부스트랩 버튼 녹색으로 -->
            <a href="http://localhost:8080/write.php" class="btn btn-success btn-lg">쓰기</a>
          </div>
<!-- //회원 이름을 클릭하면 해당 내용들을 모두 출력한다.
//회원 ID에 따라 관련 내용을 출력
    // if(empty($_GET['id']) === false ) {
    //   echo $row;
    //   $sql = "SELECT * FROM miterang";
    //   $result = mysqli_query($conn, $sql);
    //   echo $result;
    //   $row = mysqli_fetch_assoc($result);
    //   echo '<h2>'.$row['user_id'].'</h2>';
    //   echo '<p>'.$row['user_name'].'</p>';
    //   echo $row['user_position'];
    // }
  // if(empty($_GET['user_id']) == false) {
  //     echo "kookbal";
  //     $sql = "SELECT * FROM miterang";
  //     $result = mysqli_query($conn, $sql);
  //     echo $result;
  //     $row = mysqli_fetch_assoc($result);
  //     echo '<h2>'.$row['user_id'].'</h2>';
  //     echo '<p>'.$row['user_name'].'</p>';
  //     echo $row['user_position'];
  // } -->

</div>
</div>
</div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="http://localhost:8080/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>

</body>
</html>
