<?php
    // Example-1
    $arr1 = array('id' => 15, 'name' => 'Sujon', 29);
    $arr2 = array('customer_id' => 15, 'name' => 'Sujon', 57);
    $result = array_intersect($arr1,$arr2);
    echo '<pre>';
    print_r($result);

?>