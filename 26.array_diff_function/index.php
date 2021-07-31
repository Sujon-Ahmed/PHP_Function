<?php
    // array_diff()
    $arr1 = array('id' => 15, 'name' => 'riman', 29);
    $arr2 = array('customer_id' => 15, 'name' => 'riman');
    $result = array_diff($arr1,$arr2);
    echo '<pre>';
    print_r($result);

?>