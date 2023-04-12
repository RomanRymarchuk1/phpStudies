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
    Вам нужно разработать программу, которая считала
    бы сумму цифр числа введенного пользователем.
    Например: есть число 123, то программа должна 
    вычислить сумму цифр 1, 2, 3, т. е. 6.
    */

    $num = 12345;
    $num_array = str_split($num);
    $res;

    foreach($num_array as $value){
        $res += $value;
    }

    echo $res;

    ?>
</body>
</html>
