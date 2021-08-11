<?php
    // array_values()

    $x = array('markup' => 'html', 'stylesheet' => 'css', 7 => 'php', 'db' => 'mysql');
    $y = array_values($x);
    echo '<pre>';
    print_r($y);
?>