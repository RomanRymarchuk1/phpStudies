<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP + MySQL</title>
</head>
<body>
    <h1>Hello PHP + MySQL</h1>
    <?php 
        $mysql = new mysqli("localhost", "root", "root", "php-mysql-test"); //create an instance of the class, pass the necessary data about the database
        $mysql->query("SET NAMES 'utf8'"); // set encryption

        for($i = 0; $i < 5; $i++){
            $name = "Bob #  $i";
            $mysql->query("INSERT INTO `users` (`name`, `bio`) VALUES('$name', 'TEEEEXT')");
        }

        $mysql->query("UPDATE `users` SET `bio` = 'textTEXTtext' WHERE `_id` > 3");
        $mysql->query("DELETE FROM `users` WHERE `_id` = 5 OR `_id` = 6 AND `name`  = 'Bob #  4'");

        $mysql->close(); // close is a //!!MUST!!
    ?>
</body>
</html>
