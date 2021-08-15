<?php
    // array_flip function always flip key to value and value to key

    $x = array('markup' => 'html', 'stylesheet' => 'css', 'programming' => 'php', 'database' => 'mysql');
    $y = array_flip($x);
    echo '<pre>';
    print_r($y);

?>