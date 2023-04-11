<?php
    $title = 'Home';
    require_once("./blocks/header.php");//connect once
?>
    <h1>Home</h1>
<?php
    // phpinfo(); //ALL info about php, plugins, extentions and other...

    // echo '<pre>'; // All SERVER information
    // print_r($_SERVER);
    // echo '</pre>';

    echo $_SERVER['HTTPS'] . "<br>"; // secure connection check
    echo $_SERVER['HTTP_HOST'] . "<br>"; //return domain name
    echo $_SERVER['REQUEST_URI'] . "<br>"; // return all info after domain
    echo $_SERVER['HTTP_USER_AGENT'] . "<br>"; //return users OS name

    if($_GET['source'] != '' ){
        $link = explode('?source=', $_SERVER['REQUEST_URI']);
        $redirect = "http://$_SERVER[HTTP_HOST]$link[0]";

        header("HTTP/1.1 301: Moved Permanently");
        header("Location: $redirect");
        exit();
    }

    require_once("./blocks/footer.php");
?>