<?php
    // The most useful function for code debugging is var_dump (). All the information in a variable can be extracted with this function.

    // $date = DateTime::createFromFormat('Y','2015');
    // var_dump($date);

    // var_dump with array

   /*  $countries = array(
        'asia'=>array('bangladesh','india','pakistan'),
        'europe' =>array('england','france'),
        'africa' =>array('kenya','libya','somalia')
    );
    echo '<pre>';
        var_dump($countries);
    echo '</pre>'; */

    // multiple variable with var_dump
    $x = 'text';
    $y = 9;
    $z = false;
    echo '<pre>';
        var_dump($x,$y,$z);
    echo '</pre>';



?>