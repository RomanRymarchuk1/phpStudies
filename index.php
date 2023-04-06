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
    $x = 10;
    $y = 20;

    echo $x + $y . '<br>';
    echo $x - $y . '<br>';
    echo $x * $y . '<br>';
    echo $x / $y . '<br>';
    echo $x % $y . '<br>'; 

    $x += 10; // === $x = $x + 10;
    $x -= 10; // === $x = $x - 10;
    $x++; // === $x += 1;
    $x--; // === $x -= 1;

    // native php math constans
    echo M_PI . '<br>'; // === 3.1415926535898
    echo M_E . '<br>'; // === 2.718281828459

    // native php math functions
    echo abs(22) . '<br>'; // |22| === 22
    echo abs(-22) . '<br>'; // |-22| === 22
    echo ceil(3.1) . '<br>'; // === 4 (round up)
    echo floor(3.9) . '<br>'; // === 3 (round down)
    echo round(3.9) . '<br>'; // === 4 
    echo round(3.1) . '<br>'; // === 3 
    echo mt_rand(0, 500) . '<br>'; // random num 0 - 500 
    echo min(1, 2, 3, 4, 5, 6, 7, 8) . '<br>'; // === 1
    echo max(1, 2, 3, 4, 5, 6, 7, 8) . '<br>'; // === 8

    ?>
</body>
</html>