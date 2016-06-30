<?php 
    require_once("include/database.inc.php");
    
    $background ='';
    $image = '';
    $message = '';
    
    if (isset($_GET['background'])&&isset($_GET['image'])&&isset($_GET['message']))
    {
        $background = $_GET['background'];
        $image = $_GET['image'];
        $message = $_GET['message'];
    }
    if (!empty($_GET['background'])&&!empty($_GET['image'])&&!empty($_GET['message']))
    {
        dbInitialConnect();
        AddingData($background, $image, $message);
        mysql_close();
    }
    else 
    {
        echo '';
    }

  
 
  
    
  

    

  