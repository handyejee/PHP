<?php
    /* 
    문자열을 잘라서 배열안에 저장하는 함수
    -> 배열을 넣어서 저장할 또다른 함수 필요
    */
    
    $str = 'yjson@daou.co.kr';
    $strArr = explode('@', $str);

    echo $strArr[0]."<br>";
    echo $strArr[1];