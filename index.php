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

//One-dimensional arrays
        $numArr = array(4, 2, 3, 7, 8, -2);

        $numArr[0] = 33;
        echo $numArr[0] . '<br>';

        echo max($numArr) . '<br>';
        echo min($numArr) . '<br>';

        $arr = [1, 2, 0.3, 'string', [1, 5]];

        echo $arr[4] . '<br>';

        array_push($arr, 4); //add subject in the end of current array
        echo $arr[5] . '<br>';

//Associative arrays        
        $list = [3 => 14, "age" => 21, "name" => "Roman", "hooby" => "code"]; //like obj in js
        echo $list['name'] . '<br>';
        echo $list[3] . '<br>';

//Multidimensional arrays
        $matrix = [
            [1, 3.3, 7],
            ['srt', "name" => "Bob"],
            [true]
        ];

        echo $matrix[0][1] . '<br>';

    ?>
</body>
</html>