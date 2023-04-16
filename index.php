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

        if($mysql->connect_error){
            echo "Error Numm: ". $mysql->connect_errno . "<br>";
            echo "Error: ". $mysql->connect_error;
        } else {
            echo "Host Info: " . $mysql->host_info;
            $mysql->query("DROP TABLE `new-test`");
            $mysql->query("CREATE TABLE `users` (
                _id INT(11) NOT NULL,
                name VARCHAR(50) NOT NULL,
                bio TEXT(50) NOT NULL,
                PRIMARY  KEY(_id)
            )");
            
        }

        $mysql->close(); // close is a //!!MUST!!
    ?>
</body>
</html>
