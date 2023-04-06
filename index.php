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
        echo "<h1>Vsriables</h1>";

        $num = 5; //type: int
        $num2 = -0.45; //type: float (floating point number)
        $str = 'Variable: '; //type: string
        $str2 = ' Variable 2: '; //type: string
        $bool = true; //type: boolean

        echo $str .
        $num .
        '<br>' .
        $str2 .
        $num2 .
        '<br>';
;

        $a = 0.5; // float
        $b = '0.5'; // string

        floatval($b); // now $b type is float 
        echo $a + $b . '<br>'; // = 1 

        define('MY_AGE', 21); //make constant
        echo MY_AGE . '<br>'; //call const MY_AGE
        echo "TheEnd";

        /*
        variables are not strongly typed,
        which is considered minuses of php.
        gotta keep that in mind
        */

    ?>
</body>
</html>
