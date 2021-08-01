<?php
    // array_shift() always remove array first elements
    $arr = array('html', 'css', 'php');
    $result = array_shift($arr);
    echo '<pre>';
    print_r($arr);

    // array_shift() always remove array first key and value reset other elements 0
    $x = array(4 => 'html', 3 => 'css', 5 => 'python');
    $y = array_shift($x);
    echo '<pre>';
    print_r($x);

    // if array key string then array_shift() always remove array first key and value reset other elements 0

    $j = array('markup' => 'HTML', 'style' => 'CSS', 'programming' => 'PHP');
    $k = array_shift($j);
    echo '<pre>';
    print_r($j);



?>
