<?php

/* Задаем переменные */
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$theme = htmlspecialchars($_POST["theme"]);
$message = htmlspecialchars($_POST["message"]);


/* Ваш адрес и тема сообщения */
$address = "alesey.k1@gmail.com";
$sub = "Сообщение с сайта KOPASOV";

/* Формат письма */
$mes = "Сообщение с сайта KOPASOV.\n
Имя отправителя: $name
Электронный адрес отправителя: $email
Тема письма: $theme
Текст сообщения:
$message";


/* Отправляем сообщение, используя mail() функцию */
$from = "Reply-To: $email \r\n";
if (mail($address, $sub, $mes, $from)) {
	header('Refresh: 5; URL=https://kopasov.000webhostapp.com');
    echo '<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body>Письмо отправлено, через 5 секунд вы вернетесь на Главную</body>';}
	
else {
	header('Refresh: 5; URL=https://kopasov.000webhostapp.com');
     echo '<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body>Письмо отправлено, через 5 секунд вы вернетесь на Главную</body>';}
   
	exit; /* Выход без сообщения, если поле bezspama чем-то заполнено */
?>