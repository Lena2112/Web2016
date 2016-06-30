<?php 
    require_once("include/mysql_work.inc.php");
    
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
        $connect = mysql_connect('localhost:3306', 'root');
		mysql_select_db('mothers_day', $connect);
		AddingData($background, $image, $message);
		mysql_close();
    }
    else 
    {
        echo '';
    }

  
 
  
	
  

	

  