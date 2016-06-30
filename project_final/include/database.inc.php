<?php
    $g_server = 'localhost:3306';
    $g_user = 'root';
    $g_database = 'mothers_day'; 
    $g_table_users_info = 'card';
    $g_dblink = mysql_select_db($g_database ,mysql_connect($g_server, $g_user));    
    
    function dbInitialConnect()    
    {      
        global $g_dblink;
        if(!$g_dblink) 
        {
            echo 'Ошибка подключения к серверу MySQL'; 
            exit;
        }
    }    
      
    function DbQuery($query) 
    {
        return mysql_query($query);
    }

    function GetLastId() 
    {
        $result = DbQuery("SELECT MAX(id) AS max FROM ".$GLOBALS['g_table_users_info']);
        $id = mysql_fetch_array($result);
        return $id['max'];
    }

    function GetAllData($id) 
    {
        $result = DbQuery("SELECT * FROM ".$GLOBALS['g_table_users_info']." WHERE id =".$id);
        $id = mysql_fetch_array($result);
        return $id;
    }

    function AddingData($background, $image, $message) 
    {
        return DbQuery("INSERT INTO ".$GLOBALS['g_table_users_info']."(background_id, image_id, message) VALUES ('".$background."', '".$image."', '".$message."');");
    }