<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Успешная авторизация</title>
</head>
<body>

<?
include ("ini/header.php");
?>

<div class="container-authorization">

    <?/*
    echo 'Привет, дорогой' . $_GET['login'];
    */?>

    <?
    if (isset($_POST['comment'])) {
        $comment = $_POST['comment'];
        $to = $_GET['login'];
        if (mail("$to", 'Сообщение', "$comment")) {
            echo 'Письмо успешно отправлено';
        }
    }
    ?>
    <form method="post">
        <p>
        Введите свой комментарий<textarea class="textarea" rows="10" cols="45" name="comment"></textarea>
        </p>
        <p>
            <button type="submit">Отправить</button>
        </p>
    </form>

</div>

</body>
</html>

