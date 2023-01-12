<?php
    $str = "timetracker";

    //0자리에서 시작하여 5글자를 자른 후  cutStr에 대입
    $cutStr = substr("$str", 0, 5);
    $cutStr2 = substr("$str", -1, 5);
    
    echo $cutStr."<br>";
    echo $cutStr2;
?>