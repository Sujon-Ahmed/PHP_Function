<?php
    // The array_push () function allows one or more elements to be inserted at the end of an array.

    $old = array('html', 'css', 'php');
    $push = array_push($old, 'CI', 'JS');
    echo var_dump($push);
    echo '<pre>';
    print_r($old);

    // array_push with multidimensional
    $olds = array('html', 'css', 'php');
    $pushes = array_push($olds,array('python', 'JS', 'ruby'));
    echo var_dump($pushes);
    echo '<pre>';
    print_r($olds);

    // array_push with simple method
    $simple = array('html', 'css', 'js');
    $simple[] = 'python';
    $simple[] = 'mysql';
    echo '<pre>';
    print_r($simple);

?>