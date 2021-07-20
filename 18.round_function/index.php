<?php
    // The round () function is used to wrap any float number.
    echo round(9.3).'<br>';

    // The round () function PHP_ROUND_HALF_UP
    echo round(9.5).'<br>';

    // round() with pi value
    echo round(3.14159265,3);
    echo '<br>';
    echo round(3.5,0,PHP_ROUND_HALF_UP);
    //output 4
    echo '<br>';
    echo round(3.5,0,PHP_ROUND_HALF_DOWN);
    //output 3
    echo '<br>';
    echo round(3.5,0,PHP_ROUND_HALF_EVEN);
    //output 4
    echo '<br>';
    echo round(3.5,0,PHP_ROUND_HALF_ODD);
    //output 3



?>