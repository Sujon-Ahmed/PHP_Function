<?php
    //when variable array output result true
    //$city = array('dhaka','chittagong','khulna','rajshahi','barishal');
    $city = "not array but string"; //when variable string output result false
    $checker = is_array($city);
    var_dump($checker);

?>