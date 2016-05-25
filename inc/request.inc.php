<?php
    function parameterQueryFromGet($name)
	{
	    if (isset($_GET[$name]))
		{
            return $_GET[$name];
		}
        return '';		
	}