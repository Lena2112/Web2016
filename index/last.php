<?php

    require_once "inc/string.inc.php"; 
	
	$message = '';
	if (isset($_GET['message']))
    {
        $message = $_GET['message'];
    }
	if (empty($message))
	{
		echo "Введите строку!";
	}
	else
	{
		echo last($message);
	}