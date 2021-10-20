<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
</head>
<body>

<?
include ("ini/header.php");
?>

<div class="container-authorization">
    <form method="get">
        <p>
            Придумайте логин<input type="text" name="login">
        </p>
        <p>
            Придумайте пароль<input type="password" name="password">
        </p>
        <p>
            <button type="submit">Отправить</button>
        </p>
    </form>
</div>

</body>
</html>