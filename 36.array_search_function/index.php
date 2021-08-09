<?php
    // array_search()

    // $x = array('html', 'css', 'php', 'mysql');
    // $y = array_search('php', $x);
    // echo $y;

    // example 02 with 3rd parameter type
    // $x = array('html', 'css', 'php', 'mysql', 55);
    // $y = array_search('55', $x,true);
    // var_dump($y);
    // echo $y;

    // with condition
    // How to check if the array has value?
    //  $x = array('html', 'css', 'php', 'mysql', 55);
    //  if(array_search('html',$x)){
    //      echo 'element fond.';
    //  }else{
    //      echo 'element not fond!';
    //  }

    // solution
    $x = array('html', 'css', 'php', 'mysql', 55);
     if(array_search('html',$x) !== false){
         echo 'element fond.';
     }else{
         echo 'element not fond!';
     }

    
?>