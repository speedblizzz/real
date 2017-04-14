<?php
    if(isset($_POST['NAME']) && isset($_POST['PHONE']) && isset($_POST['MESSAGE'])){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'info@remont.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Обратный звонок'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['NAME'].'</p> <br>
                        <p>Телефон: '.$_POST['PHONE'].'</p> <br>
                        <p>Сообщение: '.$_POST['MESSAGE'].'</p>
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Отправитель <from@example.com>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}
?>