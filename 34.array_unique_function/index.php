<?php
    // array_unique() always delete duplicate (value,element)
    // $element = array('html','css','html','php','java','php','javascript','perl','mysql');
    // $duplicate = array_unique($element);
    
    // echo '<pre>';
    //var_dump($element);
    // print_r($duplicate);

    // example with key
    // $x = array(5 => 'html', 2 => 'css','php', 'db' => 'mysql', 'database' => 'mysql', 1 => 'css');
    // $y = array_unique($x);
    // echo '<pre>';
    // print_r($y);

    $continents = array(
        "Asia" => array('Bangladesh', 'India', 'Pakistan'),
        "Europe" => array('England', 'France'),
        "Africa" => array('Somalia', 'kenya', 'Libya'),
        "Asia" => array('Bangladesh', 'India', 'Pakistan')
    );
    $result = array_unique($continents, SORT_REGULAR);
    echo '<pre>';
    print_r($result);

?>