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

    <?
    //правильный логин для входа vadim
    //правильный пароль для входа qwerty

    if(count($_GET)>0) { // Проверка, если поля заполнены
        $login = md5(trim($_GET['login'])); //Функция trim() убирает ненужные пробелы в начале и конце строчки
        $password = md5(trim($_GET['password']));

        if ($login == '171c6d4e0685a32a28b0db65e423ec3f' & $password == 'd8578edf8458ce06fbc5bb76a58c5ca4'){ //Проверка на то, чтобы оба поля были заполнены
            echo '<meta http-equiv=Refresh content="0.001; authorization-succes.php">';
        }
        else {
            echo 'Вы неправильно ввели данные для входа';
        }
    }
    else {
        echo 'Введите данные'; // Проверка, если поля не заполнены
    }
    ?>

    <form method="get">
        <p>
            Логин<input type="text" name="login">
        </p>
        <p>
            Пароль<input type="password" name="password">
        </p>
        <p>
            <button type="submit">Отправить</button>
        </p>
    </form>
    <p>Если Вы ниразу не регистрировались на сайте, перейдите по ссылке ниже. </p>
    <a class="registration" href="registration.php">Пройти регистрацию</a>

</div>

</body>
</html>




