<?php
    require_once("include/mysql_work.inc.php");
    $connect = mysql_connect('localhost:3306', 'root');
    mysql_select_db('mothers_day', $connect);
    
    $row = GetAllData($_GET['id']);
    echo json_encode($row);
    mysql_close();
  