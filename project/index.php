<?php
  require('D:\WebServers\home\test1.ru\www\project\card.html');

  if (!empty($_POST["cards_form_name_from"])&&!empty($_POST["cards_form_email_from"])&&!empty($_POST["cards_form_message_from"])&&!empty($_POST["cards_form_name_to"])&&!empty($_POST["cards_form_email_to"])) {
    $subject = "Форма обратной связи"; //тема сообщения
    $message = "Имя: ".$_POST['cards_form_name_to']."<br>От кого: ".$_POST['cards_form_name_from']; //содержание сообщение
    $emailto = $_POST['cards_form_email_from']; //e-mail кому
    $emailfrom = $_POST['cards_form_email_to']; //e-mail от кого
    $chek = mail($emailto, $subject, $message, "Content-type:text/html; Charset=utf-8\r\nFrom:".$emailfrom."\r\n"); //отправляем сообщение
    if($chek) echo "Ваше письмо успешно отправлено!";
    else echo "Ваше письмо не отправлено!";
  }
  else {
    echo "Вы заполнили не все поля!";
  }
 