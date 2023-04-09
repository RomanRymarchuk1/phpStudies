<?php
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];

if(trim($name) == '') 
    echo "name is empty";
else if(strlen($name) <= 1) 
    echo "name is short";
else if(trim($email) == '' || trim($pass) == '' || trim($_POST['message'] == '')) 
    echo "some field is empty";
else {
    // $pass = md5($pass);
        echo "<h1>From Data</h1><br>";
    // echo "
    // <p>Name: $name </p>
    // <br>
    // <p>Email: $email </p>
    // <br>
    // <p>Password: $pass </p>
    // <br>
    // <p>Message:$_POST[message]</p>";

    foreach($_POST as $formField => $value){
        if($formField == 'password'){
            $value = md5($velue);
        }
        echo "<p>$formField: $value</p><br>";
    }

    header('location: about.php');
    exit;
}