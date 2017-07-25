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
            <form action="process.php" method="post">

              <div class="form-group">
                <label for="form-title">아이디</label>
                <input type="text" class="form-control" name="id" id="form-title" placeholder="아이디를 적어주세요.">
              </div>

              <div class="form-group">
                <label for="form-author">이름</label>
                <input type="text" class="form-control" name="user_name" id="form-author" placeholder="이름을 적어주세요.">
              </div>

              <div class="form-group">
                <label for="form-author">포지션</label>
                <textarea class="form-control"  name="user_position"  id="form-author" placeholder="포지션을 적어주세요."></textarea>
              </div>

              <div class="form-group">
                <label for="form-author">백넘버</label>
                <textarea class="form-control"  name="user_back_number"  id="form-author" placeholder="백넘버를 적어주세요."></textarea>
              </div>

              <div class="form-group">
                <label for="form-author">설명</label>
                <textarea class="form-control" rows="10" name="description"  id="form-author" placeholder="간단한 설명을 적어주세요"></textarea>
              </div>

              <input type="submit" name="name" class="btn btn-default  btn-lg">
            </form>
          </article>
        </div>

      <hr>
    <div id="control">
      <div class="btn-group" role="group" aria-label="...">
        <input type="button" value="white" onclick="document.getElementById('target').className='white'" class="btn btn-default  btn-lg"/>
        <input type="button" value="black" onclick="document.getElementById('target').className='black'" class="btn btn-default btn-lg"/>
      </div>
      <a href="http://localhost:8080/write.php" class="btn btn-success btn-lg">쓰기</a>
    </div>
    </div>

  </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="http://localhost/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
</body>
</html>
