<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Массивы</title>
</head>
<body>

<?
include ("ini/header.php");
?>

<div class="container">

    <div class="task1">

        <h2>Задача 1</h2>
        <p>Создать массив размера n, заполненный случайными цифрами.<br>
            Вывести каждый элемент массива с новой строки.<br>
            Все четные элементы массива необходимо выделить жирным шрифтом.
        </p>
        <h4>Решение задачи:</h4>
        <?
        $massiv = [mt_rand(0,10), mt_rand(0,10), mt_rand(0,10), mt_rand(0,10), mt_rand(0,10)];
        foreach ($massiv as $value) {
            if ($value % 2 == 0) {
                echo '<b>'.$value.'</b>'.'<br>';
            }
            elseif ($value % 2 != 0) {
                echo $value.'<br>';
            }
        }
        ?>

        <br><br><br><br><br><br>

        <h2>Задача 2</h2>
        <p>Создать двумерный массив произвольной длины, содержащий строковые значения.<br>
            Необходимо вывести все элементы массива, начинающие на N.<br>
        </p>
        <h4>Решение задачи:</h4>
        <?
        $town = array (
            'Russia' => array ('Moskow', 'Magnitogorsk', 'Novokuznetsk'),
            'America' => array ('Chicago', 'New York'),
        );
        foreach ($town['Russia'] as $value) {
            if (mb_substr($value, 0, 1) === 'N')  {
                echo $value.'<br>';
            }
        }
        foreach ($town['America'] as $value) {
            if (mb_substr($value, 0, 1) === 'N') {
                echo $value.'<br>';
            }
        }
        ?>

        <br><br><br><br><br><br>

        <h2>Задача 3</h2>
        <p>Создать двумерный массив состоящий из чисел.<br>
            Необходимо вывести общее количество элементов массива и количество элементов массива для каждого измерения.
        </p>
        <h4>Решение задачи:</h4>
        <?
        $massiv2 = array (
            'One' => array (2, 54, 75, 32, 87, 35, 66),
            'Two' => array (58, 33, 75, 76),
        );
        echo count($massiv2['One'])+count($massiv2['Two']).'<br>';
        echo count($massiv2['One']). '<br>';
        echo count($massiv2['Two']). '<br>';
        ?>

        <br><br><br><br><br><br>

        <h2>Задача 4</h2>
        <p>1.Посчитать количество членов семьи Ivanovs, Petrovs, Smith.<br>
            $arr = array ( <br> <br>
            'Ivanovs' => array ('Ivan', 'Kate', 'Tom'), <br>
            'Petrovs' => array ('Bob', 'Ann', 'Tanya'), <br>
            'Smith' => array ('Kate', 'Same'), <br> <br>
            );
        </p>

        <h4>Решение задачи:</h4>
        <?
        $arr = array (
            'Ivanovs' => array ('Ivan', 'Kate', 'Tom'),
            'Petrovs' => array ('Bob', 'Ann', 'Tanya'),
            'Smith' => array ('Kate', 'Same'),
        );
        echo count($arr['Ivanovs']). '<br>';
        echo count($arr['Petrovs']). '<br>';
        echo count($arr['Smith']);
        ?>

    </div>

</div>

</body>
</html>
