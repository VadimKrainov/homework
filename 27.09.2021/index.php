<?
$night = date("H:i:s");
echo "$night";
if($night >= "08:00" and $night <= "23:59")
{
    echo "<link rel='stylesheet' href='css/style.css'>";
}
else{
    echo "<link rel='stylesheet' href='css/style_night.css'>";
}
?>

<!doctype html>
<html lang="ru">
<head>
    <link rel="stylesheet" href="<?echo $night;?>">
    <meta charset="UTF-8">
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
          name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>Домашняя по работа по html,css</title>
</head>
<body>

<?
include ("ini/header.php");
?>

<main class="main">
    <div class="flex-container-2">
        <div class="photo">
            <img class="smile" src="image/photo.jpg" alt="">
        </div>
        <div class="flex-information">
            <div class="fio">Крайнов Вадим
            </div>
            <div class="text">
                <div class="text-1">
                    Мои навыки: html,css <br>
                    До этого занимался веб-дизайном на фрилансе (лет 6-7), также в одной веб студии 2 года. <br>
                    Занятие первое пропустил к сожалению из-за техническких проблем. Сейчас посмотрел в записи. <br>
                    Объясняете хорошо, на данный момент более менее все понятно. Ритм обучения устраивает. Спасибо за внимание))<br>
                </div>
                <div class="text-2">
                    Все супееееер)
                </div>
            </div>
        </div>
    </div>

    <div class="flex">
        <div class="flex-container">
            <img height="300px" src="image/karamazov.jpg" alt="">
            <p>Братья Карамазовы</p>
        </div>
        <div class="flex-container">
            <img height="300px" src="image/karamazov.jpg" alt="">
            <p>Братья Карамазовы</p>
        </div>
        <div class="flex-container">
            <img height="300px" src="image/karamazov.jpg" alt="">
            <p>Братья Карамазовы</p>
        </div>
        <div class="flex-container">
            <img height="300px" src="image/karamazov.jpg" alt="">
            <p>Братья Карамазовы</p>
        </div>
    </div>
    <div class="grid">
        <div class="container-2">
            <div class="grid-content">
                <img class="dostoevsk" src="image/karamazov%20—%202.jpg" alt="">
                <p>Братья Карамазовы</p>
            </div>
            <div class="grid-content">
                <img class="dostoevsk" src="image/karamazov%20—%202.jpg" alt="">
                <p>Братья Карамазовы</p>
            </div>
            <div class="grid-content">
                <img class="dostoevsk" src="image/karamazov%20—%202.jpg" alt="">
                <p>Братья Карамазовы</p>
            </div>
            <div class="grid-content">
                <img class="dostoevsk" src="image/karamazov%20—%202.jpg" alt="">
                <p>Братья Карамазовы</p>
            </div>
        </div>
    </div>
</main>

<footer class="footer">

</footer>
</body>
</html>