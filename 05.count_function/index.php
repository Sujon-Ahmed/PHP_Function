<?php

   /*  $p_languages = array('HTML','CSS','PHP');
    $check = count($p_languages);
    echo $check; */

    $countries = array(
        "asia" => array('bangladesh','india','pakistan'),
        "europe" => array('england','france'),
        "africa" => array('somalia','kenya','libya')
    );
    echo count($countries, COUNT_RECURSIVE);


?>