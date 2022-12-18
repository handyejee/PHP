<?php
    $fruit = array();
    $fruit = ['grape', 'mango', 'strawberry'];

    list($first, $second, $third) = $fruit;
    echo $second;

    /*
    list 선언은 아래 내역을 포함하고 있다.
    $first = $fruit[0]
    $second = $fruit[1]
    $third = $fruit[2]
    */

?>