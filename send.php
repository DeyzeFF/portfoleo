<?php
$to = "denfunnyfire@gmail.com";
$FIO = $_POST['FIO'];
$from = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];
$tel = $_POST['tel'];
$headers = "From: $from" . "\r\n" .
    "Имя: $fio" . "\r\n" .
    "Телефон: $tel" . "\r\n" .
    "Сообщение:$message";
mail($to, $subject, null, $headers);
exit('<meta http-equiv="refresh" content="0; url=index.php"/>');

?>