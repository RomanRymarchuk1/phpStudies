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
    //    function info($text) {
    //     echo "Info $text <br>";
    //    }

    //    info('text');
    //    info('info');
    //    info(31);

    //    function math($x, $y) {
    //     $result = $x + $y;
    //     echo "$result <br>";
    //     return $result;
    //    }

    //    info(math(3, 6))

//______________________________________________________________________________

// function summary ($arr) {
//     $sum = 0;

//     foreach($arr as $value){
//         $sum += $value;
//     };
//     return $sum;

// };

// $list = [3, 6, 9];

// echo summary($list)

//______________________________________________________________________________
    
// function info () {
//     $x = 5;
// }

// function info1 () {
//     global $x; //use global var, regardless of the location
//     $x = 5;//overwrites global variable
// }

// $x =10;

// echo "<p>$x</p>" . '<br>' ;
// info();
// echo "<p>$x</p>" . '<br>' ;
// info1();
// echo "<p>$x</p>" . '<br>' ;

//______________________________________________________________________________

function counter() {
    $count = 0;
    $count++;
    echo "<p>$count</p>" . "<br>";
} 

function staticCounter() {
    static $count = 0; //the program remembers changes in a local variable
    $count++;
    echo "<p>$count</p>" . "<br>";
} 
staticCounter(); // === 1
staticCounter(); // === 2
staticCounter(); // === 3

echo "_______________________________________________________________________________________________________________________________________ <br>";

counter(); // === 1
counter(); // === 1
counter(); // === 1

    ?>
</body>
</html>