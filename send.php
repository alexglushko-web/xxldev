<?
        $to = "artiomkan@yandex.ru";
    }
        $subject = 'Заявка XXLDEV'; 
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['feedback_name'].'</p>
                        <p>Email: '.$_POST['feedback_email'].'</p>
                        <p>Описание: '.$_POST['feedback_description'].'</p>                                   
                    </body>
                </html>';
        $headers  = "Content-type: text/html; charset=utf-8 \r\n";
        $headers .= "From: Отправитель <from@example.com>\r\n";
        mail($to, $subject, $message, $headers);
?>