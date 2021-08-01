<?php
    // array_combine()
    $arr1 = array(10, 20, 30);
    $arr2 = array('html', 'css', 'javascript');
    $result = array_combine($arr1,$arr2);
    echo '<pre>';
    print_r($result);
    echo '</pre>';


    $arr3 = array('html', 'css', 'javascript');
    $arr4 = array(10, 20, 30);
    $results = array_combine($arr3,$arr4);
    echo '<pre>';
    print_r($results);
    echo '</pre>';

?>