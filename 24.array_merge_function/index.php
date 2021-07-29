<?php
    // PHP when two or more array merge then use array_merge function
    $x = array('adnan' => 30,32, 'rifat' => 29);
    $y = array(50,30, 'adnan' => 29);
    $final = array_merge($x,$y);
    echo '<pre>';
        print_r($final);
    echo '</pre>';
    
?>