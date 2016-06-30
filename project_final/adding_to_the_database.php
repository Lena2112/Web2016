<?php
    require_once("include/database.inc.php");
    dbInitialConnect();
    
    $row = GetAllData($_GET['id']);
    echo json_encode($row);
    mysql_close();
  