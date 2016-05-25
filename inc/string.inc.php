<?php
    	
	function last($str)
	{
		$str = substr($str, strlen($str) - 1, 1);
		return $str;
	}
	
	function withoutLast($str)
	{
		$str = substr($str, 0, -1);
		return $str;
	}
	
	function revers($str)
	{
		for ($i = strlen($str) - 1; $i >= 0; $i--)
		{
			$strRev .= $str[$i];
		}
		return $strRev;
	}
	
	
	
  