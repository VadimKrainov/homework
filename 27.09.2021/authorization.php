<?
include ("ini/header.php");
?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
</head>
<body>

<div class="container-authorization">
    <h1>Форма авторизации</h1>
    <form action="authorization-succes.php" method="post">
        <input type="text" name="login" placeholder="Логин"><br><br>
        <input type="password" name="password" placeholder="Пароль"><br><br>
        <button type="submit" name="submit">Отправить</button>
    </form>
</div>

</body>
</html>




