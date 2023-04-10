<?php
    $title = 'Home';
    require_once("./blocks/header.php");//connect once
?>
    <h1>Home</h1>
<?php

    $file = fopen("text.txt", "w"); //file open to rewrite or write somesing new

    fwrite($file, "Exemple\nHello"); // write to file

    fclose($file); //!!file MUST by closed!!

    //OR

    file_put_contents("text_2.txt", "Hello text_2\n"); // the same func in 1 str

//---------------------------------------------------------------------------------------------------------------------

    $file_1 = fopen("text_1.txt", "a"); //file open to append

    fwrite($file_1, "\nExemple\nHello"); // write to file 

    fclose($file_1); //!!file MUST by closed!!

//---------------------------------------------------------------------------------------------------------------------

    $fileName = 'text.txt';

    $file_2 = fopen($fileName, 'r'); // file open for reading

    $content = fread($file_2, filesize($fileName));

    fclose($file_2); //!!file MUST by closed!!

    echo $content . '<br>';

    //OR

    echo file_get_contents($fileName) . '<br>';// the same func in 1 str

//---------------------------------------------------------------------------------------------------------------------

    //checks for the existence of a file by its name
    echo file_exists('text.txt') . '<br>'; //1
    echo file_exists('t.txt') . '<br>'; //''

    //use to rnemae file
    //rename('text_1.txt', 'text___1.txt');

    //use to delete file
    // unlink('text.txt');

    //show the path to current file
    echo __FILE__ . "<br>";

    //show the access rights 
    echo fileperms(__FILE__) . "<br>";

    //change the access rights 
    chmod(__FILE__, 0777);


    

    require_once("./blocks/footer.php");
?>