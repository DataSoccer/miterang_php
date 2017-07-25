<?php
require("lib/db.php");
$conn = db_init("locahost","root", "dkssud00","opentutorials");
$sql = "SELECT * FROM user WHERE name ='".$_POST['author']."'";
$result = mysqli_query($conn,$sql);
if ($result->num_rows==0) {
  $sql = "INSERT INTO user (name, password) VALUES('".$_POST['author']."','dkssud')";
  mysqli_query($conn,$sql);
  $user_id = mysqli_insert_id($conn);
  #echo $sql;
}else {
  $row = mysqli_fetch_assoc($result);
  $user_id = $row['id'];
}
exit;
$sql = "INSERT INTO topic (title,description,author,created) VALUES('".$_POST['title']."', '".$_POST['description']."', '".$user_id."' now())";
$result = mysqli_query($conn, $sql);
header('Location: http://localhost:8080/index.php');
?>
