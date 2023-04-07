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
        $a = 2; 
        $isBro = true;

        // if($a === 1) {
        //     echo 'hi';
        // } else {
        //     echo 'bay';
        // };

/*
 if there is only one line in the operator,
 then you can not use {}
*/

        if($a === 1)   
            echo 'hi';
        else if($a == 2 && $isBro) // and
            echo 'brooooo';
        else if($a == 3 || $isBro) // or
            echo 'brooooo';
        else 
            echo 'bay';
        
    ?>
</body>
</html>