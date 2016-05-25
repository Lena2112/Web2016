<?php
    require_once "inc/request.inc.php";

    function delSpace($text)
	{
	    $i = 0;
		$newText = '';
		while ($text[$i] == ' ')
            $i += 1;
		$k = strlen($text)-1;
        while ($text[$k] == ' ')
            $k -= 1;
        while ($i <= $k)
		{
			$newText .= $text[$i];
            if ($text[$i] == ' ' && $text[$i+1] == ' ')
			{
				while ($text[$i + 1] == ' ')
				    $i += 1;
			}
			$i += 1;
		}
		if ($newText == '')
		    $newText = 'Сплошные пробелы!';
		return $newText;
	}
	
	$text = '';
	request($text);
	if (empty($text))
	{
		echo "Вы ничего не ввели(";
	}
	else 
	{
		echo delSpace($text);
	}