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
        $x = 13;

        switch ($x) {
            case 10:
               echo "Var: 10";
                break;
            case 15:
                echo "Var: 15";
                break;
            case 13:
                echo "Var: 13";
                break;
            default:
                echo "Var: ???";               
                break;
        }
    ?>
</body>
</html>