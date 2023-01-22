<?php
    // 문자열에 있는 영문의 첫글자 대문자로 변경
    $str = 'strawberry, mango, pineapple';
    echo ucwords($str);

    echo "<br>";

    $str = 'once in a life time';
    $str = ucwords($str);
    echo $str;
