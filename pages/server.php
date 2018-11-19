<?php 

    $name = $_POST['name'];
    $link = $_POST['link'];
    $text = $_POST['text'];

    $mail_message = '
    <html>
        <head>
            <title>Заявка</title>
        </head>
        <body>
            <h2>Заказ</h2>
            <ul>
                <li>Имя: ' . $name . '</li>
                <li>Ссылка на страницу: ' . $link . '</li>
                <li>Комментарии к заказу: ' . $text . '</li>
            </ul>
        </body>
    </html>    
    ';

    echo  $mail_message;
?>