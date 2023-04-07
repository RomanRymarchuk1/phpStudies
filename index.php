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
        $str = 'Hello';
        echo "Var: $str <br>"; //Variables in string
        echo "<input type='text' value=\"aaaa\"><br>"; //2 ways to use quotes

        $length = strlen($str); //func which return the string length
        echo "$length <br>";

        $trimmedText = trim('   some text      '); //func which return text whitout useless spaces 
        echo  "$trimmedText <br>";

        $lowerSrting = strtolower("$str");
        echo  "$lowerSrting <br>";

        $upperSrting = strtoupper($str);
        echo  "$upperSrting <br>";

        $hashSrting = md5($srt);
        echo  "$hashSrting <br>";

    ?>
</body>
</html>