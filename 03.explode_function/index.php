<?php

    /* explode function always behavior the opposite function implode 
        this function always use string to array convert. */

    $p_languages = ('HTML,CSS,PHP');
    $p_tutorials = explode(',',$p_languages,2);
    /* when we assign last value 2 this array count indexed value 2 */
    
    echo '<pre>';
    print_r($p_tutorials);
    echo '</pre>';

?>