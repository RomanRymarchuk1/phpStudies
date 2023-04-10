<?php
    $title = 'Home';
    require_once("./blocks/header.php");//connect once
?>
    <h1>Home</h1>
<?php

//______________________________________________________________________________
//ARRAY METHODS
//______________________________________________________________________________


    $list = [3, 5, 7, 90, 23, 75,];

    // delete element by index, but else elements saves there index
    unset($list[0]); 

    //reset index for elements, and return new array
    $list = array_values($list); 

    //sorts the array in ascending order
    sort($list); 

    //sorts the array in descending order
    rsort($list); 

    //sorts the array in random order
    shuffle($list); 

    //serchin element in array, return 1 == true; '' == false
    in_array(3, $list); 

     //slice the array from index to index and return in new array
    $arr = array_slice($list, 0, 3);

    //show array langth
    echo count($arr) . '<br>'; 

    //merge 2 arrays
    $arr_1 = [1, 3, 4, 5];
    $arr_2 = [12, 33, 44, 45];
    $arr_3 = array_merge($arr_1, $arr_2);
    print_r($arr_3);
    echo '<br>';

    //show array on the host
    print_r($list); 
    echo '<br>';


// ______________________________________________________________________________
// TYPES
// ______________________________________________________________________________

    $x = 13;

    //return data type
    echo gettype($x); // type int
    echo '<br>';

    $y = floatval('15');

    echo gettype($x); // type Duble
    echo '<br>';

    //return 1 when arg is num and '' in other case
    echo is_numeric(2); //1
    echo is_numeric(2.2); //1
    echo is_numeric('2.2'); //1
    echo is_numeric('str'); //''
    echo '<br>';

    //return 1 when arg is int and '' in other case
    echo is_integer(100); // 1
    echo is_integer(100.3); // ''
    echo is_integer('str'); //''
    echo is_integer('2.2'); //''
    echo '<br>';

    //return 1 when arg is string and '' in other case
    is_string('qwerty'); //1

    //return 1 when arg is float and '' in other case
    is_double(2.2); //1

    //return 1 when arg is boolean and '' in other case
    is_bool(false); //1

    //return 1 when arg is array and '' in other case
    is_array([false, 2, 'tyu']); //1

//______________________________________________________________________________
// STRING
// ______________________________________________________________________________

    $str = 'Some STR';

    //looking for match in the string
    echo strpos($str, 'ST');
    echo '<br>';

    //split string by given parameter and return new array
    $str_1 = 'Sam, Roman, Bob, Mark';
    $names_array = explode(",", $str_1);
    print_r($names_array);
    echo '<br>';

    //concatenates an array into a string with the specified delimiter
    echo implode(' | ', $names_array);
    echo '<br>';

    require_once("./blocks/footer.php");
?>