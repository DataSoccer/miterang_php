<?php
require("config/config.php");
require("lib/db.php");
$conn = db_init($config["host"],$config["duser"], $config["dpw"],$config["dname"]);

// 1. 특정 ID조회 한다.
$sql = "SELECT * FROM miterang WHERE user_id ='".$_POST['id']."'";
$result = mysqli_query($conn,$sql);
// $row = mysqli_fetch_assoc($result);

// 2. 있으면 데이터를 보여준다.
if ($result-> num_rows == 0) {
  // echo "ID를 다시 입력해주세요!";
  $sql = "INSERT INTO miterang (user_name, password) VALUES('".$_POST['user_name']."', 'dkssud00')";
  mysqli_query($conn,$sql);
  $user_id = mysqli_insert_id($conn);
}
}else { // 3. 없으면 새로 입력하고
  $row = mysqli_fetch_assoc($result);
  $user_id = $row['id'];
}
$sql = "INSERT INTO miterang (user_id, user_name, user_position)
          VALUES('".$_POST['id']."', '".$_POST['user_name']."', '".$_POST['user_position']."', now())";
$result = mysqli_query($conn, $sql);
header('Location: http://localhost:8080/index.php');

#var_dump($conn);
#$sql = "SELECT * FROM miterang";

#echo $result;
// if ($result ) {
//   $sql = "INSERT INTO miterang (user_id, user_name, user_position) VALUES('".$_POST['user_id']."','".$_POST['user_name']."', '".$_POST['user_position']."')";
//   mysqli_query($conn,$sql);
//   $user_id = mysqli_insert_id($conn);
//   echo $sql;
//   echo $user_id;
// }else{
//   $row = mysqli_fetch_assoc($result);
//   $user_id = $row['user_id'];
// }
?>
<!-- #id가 이미 존재하면 "ID를 다시 입력해주세요!"
  1. 특정 ID조회 한다.
  2. 없으면 새로 입력하고
  3. 있으면 데이터를 보여준다.
ID 없으면 새로입력 " 잘입력 되었습니다,  " -->
