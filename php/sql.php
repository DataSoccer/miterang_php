<?php
  $conn = mysqli_connect('localhost','root',dkssud00);
  mysqli_select_db($conn 'opentutorials');
  result = mysql_query($conn , 'SELECT * FROM topic');

  while (  $row = mysqli_fetch_assoc($reult)) {
    echo $row['id'];
    echo $row['title'];
    echo "<br />";
  }
 ?>
