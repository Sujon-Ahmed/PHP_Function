<?php
    // The isset () function is used to verify that a variable exists and that the variable is NULL.

    // when variable value NULL return false
    /* $x = isset($y);
    var_dump($x); */

    // when variable value set return true
    /* $x = "Something";
    $x = isset($x);
    var_dump($x); */

    // array element
    $y = array(1 => 'something', 2 => 'test');
    $x = isset($y[2]);
    var_dump($x);

?>