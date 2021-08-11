<?php
    // array_keys()
    // $x = array('html','css','php','mysql');
    // $y = array_keys($x);
    // echo '<pre>';
    // print_r($y);


    // with second parameter
    // $x = array('html','css','php','mysql');
    // $y = array_keys($x,'mysql');
    // echo '<pre>';
    // print_r($y);


    // with multidimensional array
    $continents = array(
        "asia" => array('bangladesh','india','pakistan'),
        "europe" => array('england','france'),
        "africa" => array('somalia','kenya','libya')
    );
    $result = array_keys($continents);
    echo '<pre>';
    print_r($result);

?>