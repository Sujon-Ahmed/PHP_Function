<?php
    // array_unique() always delete duplicate (value,element)
    $element = array('html','css','html','php','java','php','javascript','perl','mysql');
    $duplicate = array_unique($element);
    
    echo '<pre>';
    //var_dump($element);
    print_r($duplicate);

?>