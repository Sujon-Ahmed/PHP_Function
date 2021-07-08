<?php
    /* implode function always array elements convert to string */
    $p_languages = array('HTML', 'CSS', 'PHP');
    $p_tutorials = implode(', ',$p_languages);
    var_dump($p_tutorials);


?>