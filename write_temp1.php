<?php
require("lib/db.php");
$conn = db_init("locahost","root", "dkssud00","miterang");
$result = mysqli_query($conn, "SELECT * FROM miterang");
echo $result;
?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="http://localhost:8080/style.css">
</head>
<body id="target">
  <header>
  <img src="https://s7d2.scene7.com/is/image/dkscdn/16ADIUFNLCDFTTWHBSCB_White_Blue_is/" alt="미테랑" height="200" width="200">
      <h><a href="http://localhost:8080/index.php">MITERANG SOCCER CLUB</a></h>
  </header>
    <nav>
        <ol>
    <?php
    while( $row = mysqli_fetch_assoc($result)){
      echo '<li><a href="http://localhost:8080/index.php?id='.$row['user_id'].'">'.$row['user_name'].'</a></li>'."\n";
    }
    ?>
        </ol>
    </nav>
  <div id="control">
    <input type="button" value="white" onclick="document.getElementById('target').className='white'"/>
    <input type="button" value="black" onclick="document.getElementById('target').className='black'" />
    <a href="http://localhost:8080/write.php">쓰기</a>
  </div>
  <article>
    <form action="process.php" method="post">
      <p>
        회원 ID : <input type="text" name="user_id">
      </p>
      <p>
        이름 : <input type="text" name="user_name">
      </p>
      <p>
        포지션 : <input type="text" name="user_position">
      </p>
      <input type="submit" name="name">
    </form>
  </article>
</body>
</html>
