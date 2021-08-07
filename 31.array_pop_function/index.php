<?php
    // array_pop function used for delete array last element

    $x = array('html','css','php');
    $y = array_pop($x);
    var_dump($y);
    echo '<pre>';
    print_r($x);
    echo '</pre>';

    
    // more example
    $text = array(2 => 'html', 9 =>'css', 0 => 'php');
    $pop = array_pop($text);
    // var_dump($y);
    echo '<pre>';
    print_r($text);
    echo '</pre>';

?>