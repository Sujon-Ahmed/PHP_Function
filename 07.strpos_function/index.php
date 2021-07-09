<?php

    // substr position
    //echo strpos("Hello_World!",'l');

    // when ch isn't present in function
    //$x = strpos("Hello_World!",'i');
    //var_dump($x);

    // when you know ch position then you assign the where count ch function
    //echo strpos("Hello_World!",'l',4);

    // check url

    $x = strpos($_SERVER['REQUEST_URI'],'create_user');
    if($x !== false){

    echo '"create_user" substring found in URL';

    }else{

    echo '"create_user" substring not found in URL';

    }

    

?>