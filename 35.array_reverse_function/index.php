<?php
    // The array_reverse () function can be used to sort an array in reverse order.

    // example-01
    // $x = array(5,'html','css', 6 => 'php', 'db' => 'mysql');
    // $y = array_reverse($x);
    // echo '<pre>';
    // print_r($y);

    // example-02
    $x = array(5,'html','css', 6 => 'php', 'db' => 'mysql');
    $y = array_reverse($x,true);
    echo '<pre>';
    print_r($y);

?>