<?php
    $str = "timetracker";

    //0자리에서 시작하여 5글자를 자른 후  cutStr에 대입
    $cutStr = substr("$str", 0, 5);

    //끝에서 시작할 경우 -1부터 순서대로 왼쪽 문자열은 오른쪽으로
    $cutStr2 = substr("$str", -4, 2);
    
    echo $cutStr."<br>";
    echo $cutStr2;
?>