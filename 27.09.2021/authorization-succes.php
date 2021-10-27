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

    <?

    // логин для входа vadim
    // пароль для входа 12345

    $db_connect = mysqli_connect('localhost', 'vadim', '12345', 'authorization');

    $login = md5($_POST['login']);
    $password = md5($_POST['password']);


        if ($login == '' || $password == '') {
            echo 'Заполните оба поля';

        } else {
            echo 'Вы заполнили оба поля' . '<br>';

        }

    if (isset($_POST['submit'])) {
        $select = mysqli_query($db_connect,"SELECT * FROM users WHERE login = '$login' AND password = '$password'");
        $arr_select = mysqli_fetch_array($select);

        if($password == $arr_select['password']){
            echo 'Вы успешно авторизовались!';
        }
        else {
            echo 'Авторизация прошла неуспешна, перепроверьте введенные данные';
        }
    }
    ?>

</div>

</body>
</html>

