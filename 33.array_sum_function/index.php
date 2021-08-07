<?php
    // array_sum() function
    // $num = array(10,20,30,40,50);
    // $sum = array_sum($num);
    // echo 'The Addition result is : '.$sum;
    
    // array_sum() function with float number
    // $num = array(10.5,20.258);
    // $sum = array_sum($num);
    // echo 'The Addition result is : '.$sum;

    //array_sum() function with float number and text
    // $num = array('test',10.5,20.258,25,'hello');
    // $sum = array_sum($num);
    // echo 'The Addition result is : '.$sum;

    //array_sum() function with float number and text and key
    $num = array('test', 1 => 10.5, 2 => 20.258,255,'hello');
    $sum = array_sum($num);
    echo 'The Addition result is : '.$sum;

?>