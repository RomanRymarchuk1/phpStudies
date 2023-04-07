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
        //cycle for

        // for($i = 0; $i < 10; $i++){
        //     echo "<p>$i</p>" . "<br>";
        // }

        //cycle while

        // $i = 0;
        // while($i < 10) {
        //     echo "<p>$i</p>" . "<br>";
        //     $i++;
        // }

        //cycle do while

        // $i = 10;
        // do {
        //     echo "<p>$i</p>" . "<br>";
        //     $i++;
        // } while ($i < 10)

//________________________________________________________________________________________________________________

        // for ($el = 100; $el > 10 ; $el /= 2) { 
        //     if($el < 15)
        //         break; //exit

        //     if($el % 2 == 0)
        //         continue; //skips an iteration

        //     echo "<p>$el</p>" . "<br>";
        // }

//________________________________________________________________________________________________________________

        // $list = [1, 2, 3, 4, 5, 6];

        // for ($i = 0; $i < count($list); $i++) { 
        //         echo "<p>Element $i: $list[$i]</p>" . "<br>";

        // }

//________________________________________________________________________________________________________________

        $arr = [
            "name" => "Roman",
            "age" => 21,
            "hobby" => "Code"
        ];

        $list = [1, 2, 3, 4, 5, 6];

        foreach ($list as $value){
            echo "<p>$value</p>" . "<br>";
        }

        foreach ($arr as $item => $value){
            echo "<p>$item: $value</p>" . "<br>";
        };

    ?>
</body>
</html>