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
    Вам нужно разработать программу, которая
    считала бы количество вхождений какой-нибуть
    выбранной вами цифры в выбранном вами числе.
    Например: цифра 5 в числе 442158755745 встречается
    4 раза
    */
    
    $num = 89473286432982; 

    function occurrences ($target, $desired) {
        $num_arr = str_split($target);
        $res = 0;

        foreach($num_arr as $value){
            if($value == $desired)
                $res++;
        };

        return $res;

    };

    echo occurrences($num, 4);

    ?>
</body>
</html>