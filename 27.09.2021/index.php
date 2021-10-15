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
            <div class="fio">
                <?
                $fio = "Крайнов Вадим";
                echo $fio;
                ?>
            </div>
            <div class="text">
                <div class="text-1">
                    <? $text1 = "Мои навыки: html,css. <br>
                    До этого занимался веб-дизайном на фрилансе (лет 6-7) также в одной веб студии 2 года.<br>
                    Занятие первое пропустил к сожалению из-за техническких проблем. Сейчас посмотрел в записи.<br>
                    Объясняете хорошо на данный момент более менее все понятно. Ритм обучения устраивает.<br>
                    Спасибо за внимание))";
                    $text1Arr = explode (', ', $text1);
                    $text1Arr[0] = "<span style= 'color: #551a8b'>$text1Arr[0]</span>";
                    $textcolor = implode('. ', $text1Arr);
                    echo $textcolor;
                    ?>
                </div>
                <div class="text-2">
                    <?
                    $text2 =  "Все супееееер, отлично)";
                    $text2Arr = explode (' ', $text2);
                    foreach ($text2Arr as $a => $b) {
                        if ($a % 2 == 0) {
                            $text2Arr[$a] = "<span style= 'color: #551a8b'>$b</span>";
                        }
                        else{
                            $text2Arr[$a] = "<span style= 'color: coral'>$b</span>";
                        }
                    }
                    $text2color = implode('', $text2Arr);
                    echo $text2color;
                    ?>
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
    <div class="flex-container-2">
        <?
        /*echo "На данный момент время: $timeDisplayed";*/
        $alltext = $fio.$text1.$text2;
        $publicCount = preg_match_all('/[аеёиоуэюя]/iu', $alltext);
        echo "Количество гласных на данной странице $publicCount".'<br>';
        $textCount = str_word_count($alltext);
        echo "Количество слов на данной странице $textCount".'<br>';
        $strBirthday = '1991-11-11';
        $strTime = date("Y-m-d");
        $Birthday = date_create($strBirthday);
        $time = date_create($strTime);
        $interval = date_diff($Birthday, $time);
        echo "Разница количества дней равна" .$interval ->format('%a');
        ?>
    </div>
</footer>
</body>
</html>