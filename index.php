<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    /*
    Ваше задание — создать массив, наполнить его
    случайными значениями (можно использовать функцию
    rand), найти максимальное и минимальное значение
    массива и поменять их местами.
    */
    $arr = [];

    for($i = 0; $i < 100; $i++){
        array_push($arr, rand(1, 333));
    }

    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>";

    $min = min($arr);
    $max = max($arr);

    $min_index = array_search($min, $arr);
    $max_index = array_search($max, $arr);

    echo "Min num: $min, Index: $min_index" . "<br>";
    echo "Max num: $max, Index: $max_index" . "<br>";

    echo "_____________________________________________" . "<br>";

    $arr[$min_index] = $max;
    $arr[$max_index] = $min;

    $min_index = array_search($min, $arr);
    $max_index = array_search($max, $arr);

    echo "Min num: $min, Index: $min_index" . "<br>";
    echo "Max num: $max, Index: $max_index" . "<br>";

    ?>
</body>
</html>
