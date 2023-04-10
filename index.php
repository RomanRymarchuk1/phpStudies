<?php
    $title = 'Home';
    require_once("./blocks/header.php");//connect once
?>
    <h1>Home</h1>
<?php
    echo date('F t') . '<br>';
    echo date('m d y H:i:s') . '<br>'; //current date
    echo time(); //seconds from 01.01.1970
    echo date('m d y H:i:s', time() + 10000) . '<br>'; // future date (by 10000sec)
    echo date('m d y H:i:s', time() - 10000) . '<br>'; // past date (by 10000sec)
    echo date('m d y H:i:s', strtotime('now')) . '<br>'; //current date
    echo date('m d y H:i:s', strtotime('+ 1 Hour')) . '<br>'; //future date (by 1 Hour)
    echo date('m d y H:i:s', strtotime('- 10 Day')) . '<br>'; //past date (by 10 Days)
    echo date('m d y H:i:s', strtotime('- 10 Day -5 Minutes -30 Seconds')) . '<br>'; //past date (by 10 Days 5 minutes and 30 seconds)
    require_once("./blocks/footer.php");
?>