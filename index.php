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
        function printRes($res){
            echo "Nums: ". $res->num_rows. "<br>";
            if($res->num_rows != 0){
                while ($row = $res->fetch_assoc()) {
                    echo "ID: ". $row["_id"]. "<br>";
                    echo "NAME: ". $row["name"]. "<br>";
                    echo "BIO: ". $row["bio"]. "<br>";
                }
            }
    
        }

        $mysql = new mysqli("localhost", "root", "root", "php-mysql-test"); //create an instance of the class, pass the necessary data about the database
        $mysql->query("SET NAMES 'utf8'"); // set encryption

        $res = $mysql->query("SELECT * FROM `users` ");
        printRes($res);

        echo "<hr>";

        $res = $mysql->query("SELECT `_id`, `name` FROM `users` ");
        printRes($res);

        echo "<hr>";

        $res = $mysql->query("SELECT * FROM `users` WHERE `_id` < 10 ORDER BY `_id` DESC");
        printRes($res);

        $mysql->close(); // close is a //!!MUST!!
    ?>
</body>
</html>
