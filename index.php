<?php
    session_start(); // session MUST be startetd ahead of rendering anything on the page

    $title = 'Home';
    require_once("./blocks/header.php");//connect once
?>
    <h1>Home</h1>
<?php  

//_____________________________________________________________________________________________________________
//COOKIE
//_____________________________________________________________________________________________________________

    $user_name = "Alex";
    setcookie('user_name', $user_name, time() + 180); //setcookie(key, value, liveTime)
    // setcookie('user_name', $user_name, time() - 180); //way to delete cookie

    // print_r($_COOKIE);
    echo $_COOKIE['user_name'] . "<br>";

//_____________________________________________________________________________________________________________
//SESSION
//_____________________________________________________________________________________________________________

    $_SESSION['user_name'] = $user_name;

    if($_SESSION["user_name"] == "Alex"){
        echo "ohohoh $_SESSION[user_name]";
    }

    unset($_SESSION["user_name"]); // delete one element of session
    session_destroy(); // delete ALL session

    require_once("./blocks/footer.php");
?>