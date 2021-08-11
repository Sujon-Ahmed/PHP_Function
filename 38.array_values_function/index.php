<?php
    // array_values()

    // $x = array('markup' => 'html', 'stylesheet' => 'css', 7 => 'php', 'db' => 'mysql');
    // $y = array_values($x);
    // echo '<pre>';
    // print_r($y);

    // with multidimensional array
    $continents = array(
        "asia" => array('bangladesh','india','pakistan'),
        "europe" => array('england','france'),
        "africa" => array('somalia','kenya','libya')
    );
    $result = array_values($continents);
    echo '<pre>';
    print_r($result);
?>