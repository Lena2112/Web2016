<?php

    require_once "inc/string.inc.php"; 
	require_once "inc/request.inc.php";
	
	$message = parameterQueryFromGet('message');
	if (empty($message))
	{
		echo "Вы ничего не ввели(";
	}
	else
	{
		echo withoutLast($message);
	}