<?php
    // array_flip function always flip key to value and value to key

    // $x = array('markup' => 'html', 'stylesheet' => 'css', 'programming' => 'php', 'database' => 'mysql');
    // $y = array_flip($x);
    // echo '<pre>';
    // print_r($y);

    // without key
    // $x = array('html', 'css', 'php', 'mysql');
    // $y = array_flip($x);
    // echo '<pre>';
    // print_r($y);

    // same multiple value
    $x = array('css','html','php','css','mysql');
    $y = array_flip($x);
    echo '<pre>';
    print_r($y);

?>