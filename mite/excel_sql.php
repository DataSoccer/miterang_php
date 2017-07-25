<?php
    error_reporting(E_ALL ^ E_NOTICE);
    require_once 'excel_reader2.php';
    $data = new Spreadsheet_Excel_Reader)"FC_miterang.xls");
    echo "kookbal";
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> miterang</title>
  </head>
  <body>
    <?php
       $server = "localhost";
       $id = "root";
       $pass ="dkssud00";
       $connect = mysql_connect($server, $id, $pass);
       mysql_select_db("miterang", $connect);
         $rowcount = $data -> rowcount($sheet_index=0);

         for($i=2; $i <=$rowcount; $i++){
           echo $data->val($i,2)." ";
           echo "point:".$data->val($i,3)." ";
           echo "id:".$data->val($i,4)." ";

           $ID = $data->val($i,4);
           $ID = $data->val($i,4);

           $QUE = "Sql Query";
           $od = mysql_query($QUE, $connect) of die(db_error());
         }

     ?>
  </body>
</html>
