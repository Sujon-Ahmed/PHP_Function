<?php
    // echo str_replace('site','tutorials site','W3Schools is a nice site');

    // str_replace with array
   /*  $str = "Our Service available right now in Dhaka and Chittagong";
    $old_city = array('Dhaka','Chittagong');
    $current_city = array('Bogra','Rajshahi');
    echo str_replace($old_city,$current_city,$str); */

     // str_replace with count
     $str = "Our Service available right now in Dhaka and Chittagong";
     $old_city = array('Dhaka','Chittagong');
     $current_city = array('Bogra','Rajshahi');
     str_replace($old_city,$current_city,$str,$count);
     echo $count;



?>