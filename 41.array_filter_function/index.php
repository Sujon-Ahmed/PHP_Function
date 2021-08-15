<?php

    // array_filter function
    $arr = [0 => 542, 1 => 'abc', 2 => 'xyz', 3 => 374, 4 => ''];
    function check_int($val){
        if(is_int($val)){
            return $val;
        }
    }
    echo '<pre>';
    print_r(array_filter($arr, 'check_int'));


?>