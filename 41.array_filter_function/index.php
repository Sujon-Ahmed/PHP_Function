<?php

    // array_filter function
    // $arr = [0 => 542, 1 => 'abc', 2 => 'xyz', 3 => 374, 4 => ''];
    // function check_int($val){
    //     if(is_int($val)){
    //         return $val;
    //     }
    // }
    // echo '<pre>';
    // print_r(array_filter($arr, 'check_int'));
    // echo '</pre>';

    // example-2

    // $arr = [0 => 542, 1 => 'abc', 2 => 'xyz', 3 => 548, 4 => ''];
    // $new_arr = array_filter($arr, function($val){
    //     if(is_int($val)){
    //         return $val;
    //     }
    // });
    // echo '<pre>';
    // print_r($new_arr);
    // echo '</pre>';


    // professional uses method
    // $arr = [0 => 454, 1 => 'abc', 2 => 'xyz', 3 => NULL, 4 => false, 5 => 768];
    // $new_arr = array_filter($arr);
    // echo '<pre>';
    // print_r($new_arr);

    // professional uses method with key_values() key reindexed 
    $arr = [0 => 454, 1 => 'abc', 2 => 'xyz', 3 => NULL, 4 => false, 5 => 768];
    $new_arr = array_filter($arr);
    echo '<pre>';
    print_r(array_values($new_arr));


?>