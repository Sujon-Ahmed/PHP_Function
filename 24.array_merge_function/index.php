<?php
    // PHP when two or more array merge then use array_merge function
    $x = array('adnan' => 30,32, 'rifat' => 29);
    $y = array(50,30, 'adnan' => 29);
    $final = array_merge($x,$y);
    echo '<pre>';
        print_r($final);
    echo '</pre>';

    // If there is a numeric key, whatever the value of that key is at the time of merge (value of the key) will start from zero and the current key will be deleted.

    $language = array(5 => 'html', 6 => 'css');
    $serverSiteLanguage = array('php','mysql');
    $add = array_merge($language,$serverSiteLanguage);
    echo '<pre>';
        print_r($add);
    echo '</pre>';
?>