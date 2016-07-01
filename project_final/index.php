<?php  
    require_once("include/database.inc.php");
    dbInitialConnect();
    
    $id = GetLastId();
    if (!empty($_POST["cards_form_name_from"]) && !empty($_POST["cards_form_email_from"]) && !empty($_POST["cards_form_message_from"]) && !empty($_POST["cards_form_name_to"]) && !empty($_POST["cards_form_email_to"])) 
    {
        $subject = "Мамин день"; 
        $message = "<br>Дорогая ".$_POST['cards_form_name_to']."!<br>".$_POST['cards_form_message_from']."<br>От кого: ".$_POST['cards_form_name_from']."<br>Пройдите по этой ссылке, вас ждет <a href=http://test1.ru/project/card_example.html?id=".$id.">сюрприз</a>!"; 
        $emailto = $_POST['cards_form_email_to']; 
        $emailfrom = $_POST['cards_form_email_from']; 
        $headers  = "Content-type: text/html; charset=utf-8\r\n";
        if (mail($emailto,$subject,$message, $headers)) 
            echo "Ваше письмо успешно отправлено!";
        else 
            echo "Ваше письмо не отправлено!";
    }
    else 
        echo "Вы заполнили не все поля!"; 