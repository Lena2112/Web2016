<?php

function DoQuery($query) 
{
    return mysql_query($query);
}

function GetLastId() 
{
    $result = DoQuery("SELECT MAX(id) AS max FROM card");
    $id = mysql_fetch_array($result);
    return $id['max'];
}

function GetAllData($id) 
{
	$result = DoQuery("SELECT * FROM `card` WHERE id =".$id);
    $id = mysql_fetch_array($result);
    return $id;
}

function AddingData($background, $image, $message) 
{
	return DoQuery("INSERT INTO card(background_id, image_id, message) VALUES ('".$background."', '".$image."', '".$message."');");
}


