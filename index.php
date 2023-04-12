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
    Разработайте программу, которая из чисел 20 .. 45 
    находила те, которые делятся на 5 и найдите сумму
     этих чисел.
    */

    $res;

    for($i = 20; $i <= 45; $i++ ){
        if(fmod($i, 5) == 0)
            $res += $i;
    }

    echo $res;

    ?>
</body>
</html>
